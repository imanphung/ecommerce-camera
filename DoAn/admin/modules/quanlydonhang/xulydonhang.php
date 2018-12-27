<?php
    $tinhtrang=$_GET['ship'];
    if($_GET['ship']=="chuagiao"){
        $tinhtrang=0;
    }    
    if($_GET['ship']=="danggiao"){
        $tinhtrang=1;
    }

    if($_GET['ship']=="dagiao"){
        $tinhtrang=2;
    }

    $sql="UPDATE chitietdathang SET tinhtrang=$tinhtrang WHERE idsp = $_GET[idsp] and dathangid=$_GET[iddathang]";
    $run = mysqli_query($conn,$sql);
    header("location:index.php?quanly=duyetdonhang&id=$_GET[iddathang]");
?>