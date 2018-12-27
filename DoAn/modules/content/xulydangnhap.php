<?php
session_start();
include('../config.php');
$phone_email=$_POST['phone_email'];
$pass=$_POST['pass'];
if($phone_email=="admin"){
    $sql = "SELECT * FROM taikhoanadmin WHERE user= '$phone_email' and pass = '$pass'";  
    $run = mysqli_query($conn,$sql);
    if($run){
        $row=mysqli_fetch_array($run);
        if( $row != 0){
            header("location:../../admin/index.php");
        }
        else{
            setcookie('user',$phone_email, time()+ 1, '/');
            setcookie('pass',$pass, time()+ 1, '/');
            setcookie('eror','Tên đăng nhập hoặc mật khẩu không chính xác', time()+ 1, '/');
            header("location:../../index.php?xem=dangnhap");
        }
    }
}
else{
    $sql = "SELECT * FROM khachhang WHERE (email = '$phone_email' or sdt = '$phone_email') and matkhau = '$pass'";  
    $run = mysqli_query($conn,$sql);
    if($run){
        $row=mysqli_fetch_array($run);
        if( $row != 0){
            $_SESSION['user'] = $row['sdt'];
            $_SESSION['pass'] = $row['pass'];
            header("location:../../index.php?xem=quanlytaikhoan&chon=thongtincanhan");
        }
        else{
            setcookie('user',$phone_email, time()+ 1, '/');
            setcookie('pass',$pass, time()+ 1, '/');
            setcookie('eror','Tên đăng nhập hoặc mật khẩu không chính xác', time()+ 1, '/');
            header("location:../../index.php?xem=dangnhap");
        }
    }
}
?>