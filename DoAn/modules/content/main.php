<?php
$sql="SELECT * FROM chitetsp ORDER BY ngaytiepnhan desc";
$run=mysqli_query($conn,$sql);
$i=0;
?>
<div class="sp">
    <p><a href="#">SẢN PHẨM MỚI</a></p>
    <?php
    while(($dong=mysqli_fetch_array($run))& $i<10){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
        </a>
        <div class="new-product">
            <label class="new-p">Mới ra mắt</label>
        </div>
    </div>
    <?php
    $i++;
    }
    ?>
</div>
<?php
$sql="SELECT * FROM chitetsp ORDER BY soluongban desc";
$run=mysqli_query($conn,$sql);
?>                      
<div class="sp">
    <p><a href="#">SẢN PHẨM BÁN CHẠY NHẤT</a></p>
    <?php
    while(($dong=mysqli_fetch_array($run))& $i<20){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
        </a>
        <div class="new-product">
            <label class="hot-p">Bán chạy</label>
        </div>
    </div>
    <?php
    $i++;
    }
    ?>
</div>
<?php
$sql="SELECT * FROM chitetsp ORDER BY soluotxem desc";
$run=mysqli_query($conn,$sql);
?> 
<div class="sp">
    <p><a href="#">SẢN PHẨM XEM NHIỀU</a></p>
    <?php
    while(($dong=mysqli_fetch_array($run))& $i<30){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
        </a> 
        <div class="new-product">
            <label class="view-p">Xem nhiều</label>
        </div>
    </div>
    <?php
    $i++;
    }
    ?>
</div>                 