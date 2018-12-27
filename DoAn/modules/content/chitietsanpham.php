<?php
    //Truy vấn chi tiết sản phẩm
    $sql="SELECT * from chitetsp,loaisp,nhasanxuat where chitetsp.idsp=$_GET[id] and chitetsp.idloaisp=loaisp.idSP and chitetsp.idnsx=nhasanxuat.idnsx";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
    //Truy vấn các sản phẩm cùng loại
    $sql_cungloai="SELECT * FROM chitetsp WHERE idloaisp=$dong[idloaisp] and idsp != $dong[idsp]";
    $run_cungloai=mysqli_query($conn,$sql_cungloai);
    //Truy vấn các sản phảm cùng nhà sản xuất
    $sql_cungnsx="SELECT * FROM chitetsp WHERE idnsx=$dong[idnsx] and idsp != $dong[idsp]";
    $run_cungnsx=mysqli_query($conn,$sql_cungnsx);
?>
<div class="sp">
    <p><a href="#">Chi tiết sản phẩm</a></p>
    <div class="boxctsp">
        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="400" height="400" class="
detail">
        <div class="pname"><?php echo $dong['tensp']?></div>
        <div class="pprice">Giá bán: <?php echo $dong['gia']?></div>
        <div class="view">Lượt xem: <?php echo $dong['soluotxem']?></div>
        <div class="quantity">Số lượng bán: <?php echo $dong['soluongban']?></div>
        <div class="origin">Xuất xứ: <?php echo $dong['xuatsu']?></div>
        <div class="species">Loại: <?php echo $dong['TenloaiSP']?></div>
        <div class="producer">Nhà sản xuất: <?php echo $dong['tennsx']?></div>
        <div class="description">Mô tả: <?php echo $dong['mota']?></div>
    </div>
</div>
<div class="sp">
    <p><a href="#">Sản phẩm cùng loại</a></p>
    <?php
    $i=1;
    ?>
    <?php
    while(($dong_cungloai=mysqli_fetch_array($run_cungloai))&$i<=5){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungloai['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungloai['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong_cungloai['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong_cungloai['gia'], 0, ',', '.').'₫' ?></div>
            <div class="action">
            </div>
        </a>
        <div class="shopping_cart">
        <a href="index.php?xem=quanlygiohang&id=<?php echo $dong['idsp']?>">
            <img src="images/shopping_cart.jpg" width="40" height="40">
        </a>
        </div>
    </div>
    <?php
    $i++;
    }?>
</div>
<div class="sp">
    <p><a href="#">Sản phẩm cùng nhà sản xuất</a></p>
    <?php
    $i=5;
    ?>
    <?php
    while(($dong_cungnsx=mysqli_fetch_array($run_cungnsx))&$i<10){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungnsx['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungnsx['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong_cungnsx['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong_cungnsx['gia'], 0, ',', '.').'₫' ?></div>
            <div class="action">
            </div>
        </a>
        <div class="shopping_cart">
        <a href="index.php?xem=quanlygiohang&id=<?php echo $dong['idsp']?>">
            <img src="images/shopping_cart.jpg" width="40" height="40">
        </a>
        </div>
    </div>
    <?php
    $i++;
    }?>
</div>
