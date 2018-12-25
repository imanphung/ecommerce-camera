<?php
session_start();
include('../config.php');
$name=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$sex=$_POST['sex'];
$pass=$_POST['pass'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$year.'-'.$month.'-'.$day;
try{
$ip=$_SERVER['REMOTE_ADDR'];
$response=$_POST['g-recaptcha-response'];
$list=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcbLH4UAAAAAK2MvSMm025zGL0_Qb8cPEEswl52&response=$response&remoteip=$ip");
$json=json_decode($list,true);
if($json['success'] !=1){
    throw new Exception('Vui lòng kích hoạt captcha');
}
$sql="insert into khachhang (tenkh,ngaysinh,email,sdt,gioitinh,matkhau) values('$name','$date','$email','$phonenumber','$sex','$pass')";
mysqli_query($conn,$sql);
$_SESSION['user'] = $phonenumber;
$_SESSION['pass'] = $pass;
header('location:../../index.php?xem=quanlytaikhoan');
}
catch(Exception $e){
    setcookie('eror',$e->getMessage(), time()+ 1, '/');
    header('location:../../index.php?xem=dangky');   
}
?>