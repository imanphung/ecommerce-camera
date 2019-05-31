<?php
$tukhoa=$_POST['txtsearch'];
$sql="SELECT * FROM chitetsp  WHERE tensp=$tukhoa or gia=$tukhoa ";
$run=mysqli_query($conn,$sql);
$i=0;
?> 
<?php
if($run){
?> 
<div class="wrap-search">
    <div class="sp">
    <?php
    while ($dong=mysqli_fetch_array($run))
    {
    ?>
        <div class="box">
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
                <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
                <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
            </a>
        </div> 
    <?php
    }?>
</div>
</div>
<?php
}else{
?>
<?php
$sql="SELECT * FROM loaisp  WHERE TenloaiSP=$tukhoa or idSP=$tukhoa ";
$run=mysqli_query($conn,$sql);
?>
<?php
if($run){
    $dong=mysqli_fetch_array($run)
?> 
<div class="wrap-search">
    <div class="sp">
    <?php
    $sql="SELECT * FROM chitetsp  WHERE idloaisp=$dong[idSP]";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run)
    ?>
    <?php
    while ($dong=mysqli_fetch_array($run))
    {
    ?>
        <div class="box">
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
                <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
                <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
            </a>
        </div> 
    <?php
    }?>
</div>
</div>
<?php
}else{
?>
<div class="cart-none">
    <img src="images/nonesearch.jpg">
</div>
<?php
}
?>                     
<?php
}
?>  

