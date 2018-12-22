
<div id="control">
    <div id="content">
        <?php
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            }
            else{
                $tam='';
            }
            if($tam=='cacloaisanpham'){
                include('modules/content/cacloaisanpham.php');
            }
            if($tam=='chitietsanpham'){
                include('modules/content/chitietsanpham.php');
            }
            if($tam=='cacnhasanxuat'){
                include('modules/content/cacnhasanxuat.php');
            }
            if($tam=='dangky'){
                include('modules/content/dangky.php');
            }
            if($tam=='dangnhap'){
                include('modules/content/dangnhap.php');
            }
            if($tam=='quanlytaikhoan'){
                include('modules/content/quanlytaikhoan.php');
            }
            if($tam=='quanlygiohang'){
                include('modules/content/quanlygiohang.php');
            }
            if($tam=='thongtingiaohang'){
                include('modules/content/thongtingiaohang.php');
            }
            if($tam==''){
                include('modules/banner.php');
                include('modules/content/main.php');
            }
        ?>
    </div>               
</div> 
<script type="text/javascript" src="js/slide.js"></script>