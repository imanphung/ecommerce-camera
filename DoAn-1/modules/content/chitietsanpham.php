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
    <p>Chi tiết sản phẩm</p>
    <div class="boxctsp">
        <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
        <div class="pname"><?php echo $dong['tensp']?></div>
        <div class="pprice">Giá bán: <?php echo $dong['gia']?></div>
        <div class="view">Lượt xem: 503</div>
        <div class="quantity">Số lượng bán: 1000</div>
        <div class="origin">Xuất xứ: <?php echo $dong['xuatsu']?></div>
        <div class="species">Loại: <?php echo $dong['TenloaiSP']?></div>
        <div class="producer">Nhà sản xuất: <?php echo $dong['tennsx']?></div>
        <div class="description">Mô tả: <?php echo $dong['mota']?></div>
    </div>
</div>
<div class="sp">
    <p>Sản phẩm cùng loại</p>
    <?php
    $i=1;
    ?>
    <?php
    while(($dong_cungloai=mysqli_fetch_array($run_cungloai))&$i<=5){
    ?>
    <div class="box">
    <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungloai['idsp']?>">
        <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungloai['hinhanh']?>">
        <div class="pname"><?php echo $dong_cungloai['tensp']?></div>
        <div class="pprice"><?php echo $dong_cungloai['gia']?>đ</div>
        <div class="action">
        </div>
    </a>
    </div>
    <?php
    $i++;
    }?>
</div>
<div class="sp">
    <p>Sản phẩm cùng nhà sản xuất</p>
    <?php
    $i=5;
    ?>
    <?php
    while(($dong_cungnsx=mysqli_fetch_array($run_cungnsx))&$i<10){
    ?>
    <div class="box">
    <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungnsx['idsp']?>">
        <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungnsx['hinhanh']?>">
        <div class="pname"><?php echo $dong_cungnsx['tensp']?></div>
        <div class="pprice"><?php echo $dong_cungnsx['gia']?>đ</div>
        <div class="action">
        </div>
    </a>
    </div>
    <?php
    $i++;
    }?>
</div>
