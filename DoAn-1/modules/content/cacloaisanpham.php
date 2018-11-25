<?php
    $sql="SELECT * FROM loaisp,chitetsp WHERE loaisp.idSP=chitetsp.idloaisp and loaisp.idSP=$_GET[id] ORDER BY loaisp.idSP";
    $run=mysqli_query($conn,$sql);

?>
<div class="sp">
    <p><?php echo $_GET['tenloaisp']?></p>
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
