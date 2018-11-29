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
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
            <div class="pname"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>   
        </a>
    </div>
    <?php
    $i++;
    }
    ?>
</div>
<?php
$sql="SELECT * FROM chitetsp ORDER BY soluongban desc";
$run=mysqli_query($conn,$sql);
$i=0;
?>                      
<div class="sp">
    <p><a href="#">SẢN PHẨM BÁN CHẠY NHẤT</a></p>
    <?php
    while(($dong=mysqli_fetch_array($run))& $i<10){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
            <div class="pname"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>   
        </a>
    </div>
    <?php
    $i++;
    }
    ?>
</div>
<?php
$sql="SELECT * FROM chitetsp ORDER BY soluotxem desc";
$run=mysqli_query($conn,$sql);
$i=0;
?> 
<div class="sp">
    <p><a href="#">SẢN PHẨM XEM NHIỀU</a></p>
    <?php
    while(($dong=mysqli_fetch_array($run))& $i<10){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
            <div class="pname"><?php echo $dong['tensp']?></div>
            <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>   
        </a>
    </div>
    <?php
    $i++;
    }
    ?>
</div>                 