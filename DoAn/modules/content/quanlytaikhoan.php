<?php
if(isset($_SESSION['user'])){
    $sql="SELECT * FROM khachhang WHERE (email = $_SESSION[user] or sdt = $_SESSION[user])";
    $run = mysqli_query($conn,$sql);
    if($run){
        $row=mysqli_fetch_array($run);
        $day=substr($row['ngaysinh'],8,10);
        $month=substr($row['ngaysinh'],5,7);
        $year=substr($row['ngaysinh'],0,4);
    }
}
else{
    header('location:index.php?xem=dangnhap');
}
?>
<div class="box-info">
    <div class="info-left">
        <div class="member-info">Xin chào, <?php echo $row['tenkh']?></div>
        <ul class="mod-container">
            <li>
                <a href="index.php?xem=quanlytaikhoan&chon=thongtincanhan">Thông tin cá nhân</a>
                <ul>
                    <li><a href="index.php?xem=quanlytaikhoan&chon=thongtincanhan">Hồ sơ</a></li>
                    <li><a href="#">Địa chỉ</a></li>
                    <li><a href="#">Đổi mật khẩu</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="index.php?xem=quanlytaikhoan&chon=thongtindonhang">Đơn hàng của tôi</a>
            </li>
        </ul>
    <?php
            if(isset($_GET['chon'])){
                $tam=$_GET['chon'];
            }
            else{
                $tam='';
            }
            if($tam=='diachi'){
                include('modules/content/thongtincanhan/diachi.php');
            }
            if($tam=='thongtindonhang'){
                include('modules/content/thongtindonhang/thongtindonhang.php');
            }
            if($tam=='chitietdonhang'){
                include('modules/content/thongtindonhang/chitietdonhang.php');
            }
            if($tam=='thongtincanhan'){
                include('modules/content/thongtincanhan/thongtincanhan.php');
            }
    ?>
    </div>
</div>
