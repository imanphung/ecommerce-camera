<?php
    $sql="SELECT * FROM loaisp ORDER BY idSP desc";   
    $run = mysqli_query($conn,$sql);
?>
<table width="790" class="add">
    <tr>
        <td>ID</td>
        <td>Tên loại sản phẩm</td>
        <td>Thứ tự</td>
        <td colspan="2" align="center">Quản lý</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $dong['TenloaiSP']?></td>
        <td><?php echo $dong['Thutu']?></td>
        <td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['idSP']?>">Sửa</a></td>
        <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['idSP']?>">Xóa</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>