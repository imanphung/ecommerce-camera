<?php
if(isset($_SESSION['user'])==false){
    header('location:index.php?xem=dangnhap');
}
if(isset($_GET['id'])){
    $iddathang=$_GET['id'];
    $sql="SELECT * FROM dathang WHERE id=$iddathang";
    $run = mysqli_query($conn,$sql);
    if($run){
      $duyetdathang=mysqli_fetch_array($run);
    }
}

?>
<form action="#" method="POST" name="info-user" autocomplete="off" onsubmit="return validate_info_user(this)" enctype="multipart/form-data">
        <div class="info-right">
            <div class="header-info">
              <p>Chi tiết đơn hàng</p>
            </div>     
                <div class="order-info">
                  <div class="head-order-info">
                    <div class="head-order-info-left">
                      <p>Đơn hàng #<?php echo $duyetdathang['id']?></p>
                      <div class="oder-date">Đặt ngày: <?php echo $duyetdathang['ngaytao']?></div>
                    </div>
                  </div>
                </div>
                <?php
                  $dathangid=$duyetdathang['id'];
                  $sql="SELECT * FROM chitietdathang WHERE dathangid=$dathangid";
                  $run1 = mysqli_query($conn,$sql);
                  ?>
                  <?php 
                  while ($duyetchitietdh=mysqli_fetch_array($run1))
                  {?>
                  <?php
                    $idsp=$duyetchitietdh['idsp'];
                    $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
                    $run = mysqli_query($conn,$sql);
                    if($run){
                      $duyetsp=mysqli_fetch_array($run);
                    }
                  ?>
                  <div class="order-item">
                    <div class="item-pic"><a href=""><img src="admin/modules/quanlysp/uploads/<?php echo $duyetsp['hinhanh']?>" width="80" height="80"></a></div>
                    <div class="item-content"><?php echo $duyetsp['tensp'];?></div>
                    <div class="item-quantity">Số lượng: <?php echo $duyetchitietdh['soluong'];?></div>
                    <div class="item-info">Nhận hàng vào <?php echo $duyetchitietdh['ngaydukiengiaohang'];?></div>
                  </div>
                  <?php
                  }
                  ?>
            </div>  
        </div>
</form>
