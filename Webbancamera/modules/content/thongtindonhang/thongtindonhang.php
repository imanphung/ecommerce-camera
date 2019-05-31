<?php
  if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $sql="SELECT idkh FROM khachhang WHERE sdt=$user or email=$user"; //lấy id của khách hàng
    $run = mysqli_query($conn,$sql);
    if($run){
      $duyetkhachhang=mysqli_fetch_array($run);
      $nguoidungid=$duyetkhachhang['idkh'];
      $sql="SELECT * FROM dathang WHERE userid=$nguoidungid ORDER BY ngaytao DESC";
      $run = mysqli_query($conn,$sql);
    }

}
else{
    header('location:index.php?xem=dangnhap');
}
?>
<form action="#" method="POST" name="info-user" autocomplete="off" onsubmit="return validate_info_user(this)" enctype="multipart/form-data">
        <div class="info-right">
            <div class="header-info">
              <p>Đơn hàng Của Tôi</p>
            </div>     
                <div class="order-info">
                  <div class="head-order-info">
                    <div class="head-order-info-left">
                      <p class="oder-near">Đơn hàng gần đây</p>
                    </div>
                  </div>
                </div>
                  <div class="order-item">
                    <table class="oder-item-header">
                      <tr>
                        <td class="oder-col1">Đơn hàng số #</td>
                        <td class="oder-col2">Ngày đặt hàng</td>
                        <td class="oder-col3">Sản phẩm</td>
                        <td colspan="2" class="oder-col4">Tổng cộng</td>
                        </tr>
                      </table>
                      <table class="oder-item-content">
                          <tr>
                            <?php 
                            while($duyetdathang=mysqli_fetch_array($run)){
                            ?>
                            <td class="oder-content-col1"><?php echo $duyetdathang['id'];?></td>
                            <td class="oder-content-col2"><?php $ngay=strtotime($duyetdathang['ngaytao']); $ngaytao=date("d-m-Y",$ngay); echo $ngaytao;?></td>
                            <td class="oder-content-col3">
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
                                      $run2 = mysqli_query($conn,$sql);
                                      if($run2){
                                        $duyetsanpham=mysqli_fetch_array($run2);
                                      }
                                    ?>
                                      <img src="admin/modules/quanlysp/uploads/<?php echo $duyetsanpham['hinhanh']?>" width="50" height="50">       
                                    <?php 
                                    }
                                    ?>
                                    </td>
                                    <td class="oder-content-col5"><?php echo number_format($duyetdathang['tonggia'], 0, ',', '.').'₫' ?></td>
                                    <td class="oder-content-col5">                    
                                      <a href="index.php?xem=quanlytaikhoan&chon=chitietdonhang&id=<?php echo $duyetdathang['id'];?>">QUẢN LÝ</a>
                                    </td>
                                  </tr>
                                  <?php
                                  }
                                  ?>
                                </table>
                  </div>
            </div>  
        </div>
</form>
