<?php
    $sql="SELECT * FROM dathang WHERE id = $_GET[id] ORDER BY dathang.ngaytao desc";
    $run = mysqli_query($conn,$sql);
?>
<?php
if($run){?>
    <table class="product" >
    <tr>
        <td class="col1">Đơn hàng số #</td>
        <td class="col2">Sản phẩm</td>
        <td class="col3">Số lượng</td>
        <td class="col4">Ngày đặt hàng</td>
        <td class="col5">Trạng thái</td>
    </tr>
    </table>
    <table class="product-info">
    <?php
    while($duyetdathang=mysqli_fetch_array($run)){
    ?>
            <?php
            $dathangid=$duyetdathang['id'];
            $sql="SELECT * FROM chitietdathang WHERE dathangid=$dathangid";
            $run2 = mysqli_query($conn,$sql);
            ?>
                <?php 
                while ($duyetchitietdh=mysqli_fetch_array($run2))
                {?>
                <?php
                $idsp=$duyetchitietdh['idsp'];
                $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
                $run3 = mysqli_query($conn,$sql);
                if($run3){
                $duyetsanpham=mysqli_fetch_array($run3);
                }
                ?>
                <tr>
                <td class="col1"><?php echo $duyetdathang['id']; ?></td>
                <td class="col2"><?php echo $duyetsanpham['tensp']; ?>
                <img src="modules/quanlysp/uploads/<?php echo $duyetsanpham['hinhanh']?>" width="50" height="50"> </td>
                <td class="col3"><?php echo $duyetchitietdh['soluong']?></td>
                <td class="col4"><?php $ngay=strtotime($duyetdathang['ngaytao']); $ngaytao=date("d-m-Y",$ngay); echo $ngaytao;?></td>
                <td class="col5">
                    <?php
                    if($duyetchitietdh['tinhtrang']==0){
                    ?>
                    <button type="button" class="red">Chưa giao</button>
                    <button type="button" onclick="danggiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Đang giao</button>
                    <button type="button" onclick="dagiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Đã giao</button>
                    <?php
                    }
                    ?>
                    <?php
                    if($duyetchitietdh['tinhtrang']==1){
                    ?>
                    <button type="button" onclick="chuagiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Chưa giao</button>
                    <button type="button" class="green">Đang giao</button>
                    <button type="button" onclick="dagiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Đã giao</button>
                    <?php
                    }
                    ?>
                    <?php
                    if($duyetchitietdh['tinhtrang']==2){
                    ?>
                    <button type="button" onclick="chuagiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Chưa giao</button>
                    <button type="button" onclick="danggiao(<?php echo $duyetsanpham['idsp']?>,<?php echo $duyetdathang['id']?>)">Đang giao</button>
                    <button type="button" class="yellow">Đã giao</button>
                    <?php
                    }
                    ?>
                </td>  
                </tr>
                <?php 
                }
                ?>
    <?php
    }
    ?>
    </table>
<?php
}
?>
<script>
function chuagiao(id,dathangid){
    var idsp=id;
    var iddathang=dathangid
    window.location = "index.php?quanly=xulydonhang&idsp="+idsp+"&iddathang="+iddathang+"&ship=chuagiao";
}
function danggiao(id,dathangid){
    var idsp=id;
    var iddathang=dathangid
    window.location = "index.php?quanly=xulydonhang&idsp="+idsp+"&iddathang="+iddathang+"&ship=danggiao";
}
function dagiao(id,dathangid){
    var idsp=id;
    var iddathang=dathangid
    window.location = "index.php?quanly=xulydonhang&idsp="+idsp+"&iddathang="+iddathang+"&ship=dagiao";
}
</script>
