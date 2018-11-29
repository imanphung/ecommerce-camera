<?php
    $sql="SELECT * FROM nhasanxuat,chitetsp WHERE nhasanxuat.idnsx=chitetsp.idnsx and nhasanxuat.idnsx=$_GET[id] ORDER BY nhasanxuat.idnsx";
    $run=mysqli_query($conn,$sql);

?>
<div class="sp">
    <p><a href="#"><?php echo $_GET['tennsx']?></a></p>
    <?php
    while ($dong=mysqli_fetch_array($run))
    {
    ?>
        <div class="box">
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
                <div class="pname"><?php echo $dong['tensp']?></div>
                <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>
            </a>
        </div> 
    <?php
    }?>
</div>     