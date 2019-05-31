<?php
    $sql="SELECT * FROM dathang ORDER BY dathang.ngaytao desc";
    $run = mysqli_query($conn,$sql);
?>
<?php
if($run){?>
    <table class="product" >
    <tr>
        <td class="col-1">Đơn hàng số #</td>
        <td class="col-2">Tên khách hàng</td>
        <td class="col-3">Địa chỉ</td>
        <td class="col-4">Ngày đặt hàng</td>
        <td class="col-5">Sản phẩm</td>
        <td class="col-6">Tổng cộng</td>
        <td class="col-7">Duyệt đơn hàng</td>
    </tr>
    </table>
    <table class="product-info">
    <?php
    while($duyetdathang=mysqli_fetch_array($run)){
    ?>
        <tr>
            <td class="info-col-1"><?php echo $duyetdathang['id']; ?></td>
            <?php
                $sql="SELECT * FROM diachinhanhang WHERE id = $duyetdathang[diachinhanhangid]";
                $run1 = mysqli_query($conn,$sql);
                $duyetdiachi=mysqli_fetch_array($run1);
            ?>
            <td class="info-col-2"><?php echo $duyetdiachi['tennguoinhan']; ?></td>
            <td class="info-col-3"><?php echo $duyetdiachi['diachigiaohang']; ?></td>
            <td class="info-col-4"><?php $ngay=strtotime($duyetdathang['ngaytao']); $ngaytao=date("d-m-Y",$ngay); echo $ngaytao;?></td>
            <td class="info-col-5">
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
                <img src="modules/quanlysp/uploads/<?php echo $duyetsanpham['hinhanh']?>" width="50" height="50"> 
                <?php 
                }
                ?>
                </td>  
            <td class="info-col-6"><?php echo number_format($duyetdathang['tonggia'], 0, ',', '.').'₫' ?></td>
            <td class="info-col-7"><a href="index.php?quanly=duyetdonhang&id=<?php echo $duyetdathang['id'];?>">Chi tiết</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}
?>
