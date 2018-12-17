<?php
    $sql="SELECT * FROM nhasanxuat,chitetsp WHERE nhasanxuat.idnsx=chitetsp.idnsx and nhasanxuat.idnsx=$_GET[id] ORDER BY nhasanxuat.idnsx";
    $run=mysqli_query($conn,$sql);
    $i=0;
?>
<div class="sp">
    <p><a href="#"><?php echo $_GET['tennsx']?></a></p>
    <?php
    while ($dong=mysqli_fetch_array($run))
    {
    ?>
        <div class="box">
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
                <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
                <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>
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