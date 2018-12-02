<?php

session_start();
try{
$ip=$_SERVER['REMOTE_ADDR'];
$response=$_POST['g-recaptcha-response'];
$list=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcbLH4UAAAAAK2MvSMm025zGL0_Qb8cPEEswl52&response=$response&remoteip=$ip");
$json=json_decode($list,true);
if($json['success'] !=1){
    throw new Exception('Vui lòng kích hoạt captcha');
}
$_SESSION['msg']='';

header('location:../../index.php?xem=dangky&check=1');
}
catch(Exception $e){
    $_SESSION['msg']=$e->getMessage();
    header('location:../../index.php?xem=dangky&check=1');  
}?>