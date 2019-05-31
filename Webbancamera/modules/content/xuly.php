<?php
include('../config.php');
session_start();    
if(isset($_POST['btncart'])){
    $_SESSION['loaigiaohang']=$_POST['ship'];
    header('location:../../index.php?xem=thongtingiaohang');
}
if(isset($_POST['btnshipment'])){
            //thêm địa chỉ nhận hàng 
            $user=$_SESSION['user'];
            $sql="SELECT idkh FROM khachhang WHERE sdt=$user or email=$user"; //lấy id của khách hàng
            $run = mysqli_query($conn,$sql);
            if($run){
                $dong=mysqli_fetch_array($run);
                $nguoidungid=$dong['idkh'];
                $tennguoinhan=$_POST['fullname'];
                $sdt=$_POST['phonenumber'];
                $street=$_POST['street'];
                $ward=$_POST['ward'];
                $county=$_POST['county'];
                $province=$_POST['province'];
                $diachigiaohang=$street.'-'.$ward.'-'.$county.'-'.$province;
                $sql="insert into diachinhanhang (nguoidungid,tennguoinhan,sdt,diachigiaohang) values('$nguoidungid','$tennguoinhan','$sdt','$diachigiaohang')";
                mysqli_query($conn,$sql);
                //thêm thông tin đặt hàng
                $tongtien=$_POST['tongtien'];
                $loaigiaohang=$_SESSION['loaigiaohang'];
                $tinhtrang=0;
                $ngaytao=date('Y-m-d');
                $ngaydukiengiaohang=date( "Y-m-d", strtotime( "$ngaytao +3 day" ) );    
                $sql="SELECT id FROM diachinhanhang WHERE nguoidungid=$nguoidungid"; //lấy iddiachinhanhang
                $run = mysqli_query($conn,$sql);
                if($run){
                    $dong=mysqli_fetch_array($run);
                    $diachinhanhangid=$dong['id'];
                    $sql="insert into dathang (userid,tonggia,loaigiaohang,tinhtrang,ngaytao,ngaydukiengiaohang,diachinhanhangid) values('$nguoidungid','$tongtien','$loaigiaohang','$tinhtrang','$ngaytao','$ngaydukiengiaohang','$diachinhanhangid')";
                    mysqli_query($conn,$sql);
                }
                //Thêm thông tin chi tiết đặt hàng 
                $sql="SELECT id FROM dathang WHERE userid=$nguoidungid"; 
                $run = mysqli_query($conn,$sql);
                if($run){
                    $dong=mysqli_fetch_array($run);
                    $dathangid=$dong['id'];
                    echo $dathangid;
                    for ($i=0; $i <count($_SESSION['giohang']); $i++) {
                        $idsp=$_SESSION['giohang'][$i]["idsp"];
                        $soluong=$_SESSION['giohang'][$i]["soluong"];
                        $gia=$_SESSION['giohang'][$i]["gia"];
                        $sql="insert into chitietdathang (dathangid,idsp,soluong,gia,tinhtrang,ngaydukiengiaohang) values('$dathangid','$idsp','$soluong','$gia','$tinhtrang','$ngaydukiengiaohang')";
                        mysqli_query($conn,$sql);
                    }
                }
            }
            //Cập nhật số lượng bán
            for ($i=0; $i <count($_SESSION['giohang']); $i++) {
                $idsp=$_SESSION['giohang'][$i]["idsp"];
                $soluong=$_SESSION['giohang'][$i]["soluong"];
                $gia=$_SESSION['giohang'][$i]["gia"];
                $sql="UPDATE chitetsp SET soluongdaban=$soluong WHERE idsp=$idsp"; 
                mysqli_query($conn,$sql);
                $sql="SELECT soluongsp FROM chitetsp WHERE idsp=$idsp"; //lấy iddathang
                $run=mysqli_query($conn,$sql);
                if($run){
                    $dong=mysqli_fetch_array($run);
                    $soluong=$dong['soluongsp']-$soluong;
                    $sql="UPDATE chitetsp SET soluongsp=$soluong WHERE idsp=$idsp"; 
                    mysqli_query($conn,$sql);
                }
            }
            unset($_SESSION['giohang']);
            header('location:../../index.php?xem=quanlytaikhoan&chon=thongtindonhang');  
}
?>
