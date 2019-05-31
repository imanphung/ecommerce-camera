<?php
    $sql="select * from loaisp where idSP=$_GET[id]";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['idSP']?>" method="POST" enctype="multipart/form-data" autocomplete="off">
<table width="400" class="edit">
    <tr>
        <td colspan="2" align="center">Sửa loại sản phẩm</td>
    </tr>
    <tr>
        <td>Tên loại sản phẩm</td>
        <td><input type="text" name="tenloaisp" value="<?php echo $dong['TenloaiSP']?>"></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['Thutu']?>"></td>
    </tr>
    <tr>
        <td colspan = "2" align="center"><input type="submit" name="sua" id="sua" value="Sửa"></td>
    </tr>
</table>
</form>