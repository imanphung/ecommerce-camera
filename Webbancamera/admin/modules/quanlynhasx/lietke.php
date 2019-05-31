<?php
    $sql="SELECT * FROM nhasanxuat ORDER BY idnsx desc";   
    $run = mysqli_query($conn,$sql);
?>
<table width="790" class="add">
    <tr>
        <td>ID</td>
        <td>Tên nhà sản xuất</td>
        <td>Thứ tự</td>
        <td colspan="2" align="center">Quản lý</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $dong['tennsx']?></td>
        <td><?php echo $dong['Thutu']?></td>
        <td><a href="index.php?quanly=quanlynsx&ac=sua&id=<?php echo $dong['idnsx']?>">Sửa</a></td>
        <td><a href="modules/quanlynhasx/xuly.php?id=<?php echo $dong['idnsx']?>">Xóa</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>