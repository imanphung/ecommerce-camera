<?php
include('../../config.php');
$name=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$sex=$_POST['sex'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$year.'-'.$month.'-'.$day; echo $date; echo $sex;
$sql="SELECT idkh FROM khachhang WHERE sdt = $phonenumber";
$run = mysqli_query($conn,$sql);
if($run){
    $dong=mysqli_fetch_array($run);
    $sql="UPDATE khachhang SET tenkh=$name,ngaysinh=$date,email=$email,sdt=$phonenumber,gioitinh=$sex WHERE idkh = $dong[idkh]";
    mysqli_query($conn,$sql);
}

header('location:../../../index.php?xem=quanlytaikhoan&chon=thongtincanhan');
?>