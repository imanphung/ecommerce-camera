<?php
    include('../config.php');
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    $id=$_GET['id'];
    if(isset($_POST['them'])){
        //thêm
        $sql="insert into khachhang (tenkh,ngaysinh,email,sdt,gioitinh,matkhau) values('an','2018-1-1','anphug','0987678909','nam','09876557')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
    else if(isset($_POST['sua'])){
        //sửa
        $sql="update loaisp set TenloaiSP='$tenloaisp',Thutu='$thutu' where idSP='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
    }
    else{
        //xóa
        $sql="delete from loaisp where idSP='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
?>