<?php
    $sql="SELECT * FROM chitetsp,loaisp,nhasanxuat where chitetsp.idloaisp=loaisp.idSP and chitetsp.idnsx=nhasanxuat.idnsx ORDER BY chitetsp.ngaytiepnhan desc";   
    $run = mysqli_query($conn,$sql);
?>
<p>Các loại mặt hàng</p>
<table width="100%" class="products">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Loại sp</td>
        <td>Xuất sứ</td>    
        <td>Nhà SX</td>
        <td>Số lượng sp</td>
        <td>Số lượt xem</td>
        <td>Ngày tiếp nhận</td>
        <td colspan="2" align="center">Quản lý</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $dong['tensp']?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
        <td><?php echo $dong['gia']?></td>
        <td><?php echo $dong['TenloaiSP']?></td>
        <td><?php echo $dong['xuatsu']?></td>
        <td><?php echo $dong['tennsx']?></td>
        <td><?php echo $dong['soluongsp']?></td>
        <td><?php echo $dong['soluotxem']?></td>
        <td><?php echo $dong['ngaytiepnhan']?></td>
        <td><a href="index.php?quanly=quanlysp&ac=sua&id=<?php echo $dong['idsp']?>">Sửa</a></td>
        <td><a href="modules/quanlysp/xuly.php?id=<?php echo $dong['idsp']?>">Xóa</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>