<?php
    include('../config.php');
    if(isset($_POST['tennsx'])){
        $tennsx=$_POST['tennsx'];
    }
    if(isset($_POST['thutu'])){
        $thutu=$_POST['thutu'];
    }
    $id=$_GET['id'];
    if(isset($_POST['them'])){
        //thêm
        $sql="insert into nhasanxuat (tennsx,Thutu) values('$tennsx','$thutu')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlynsx&ac=them');
    }
    else if(isset($_POST['sua'])){
        //sửa
        $sql="update nhasanxuat set tennsx='$tennsx',Thutu='$thutu' where idnsx='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlynsx&ac=sua&id='.$id);
    }
    else
    {   
        //xóa

        $sql="delete from nhasanxuat where idnsx='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlynsx&ac=them');
    }
?>


