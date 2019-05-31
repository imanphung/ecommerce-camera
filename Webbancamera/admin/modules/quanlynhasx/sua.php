<?php
    $sql="select * from nhasanxuat where idnsx=$_GET[id]";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlynhasx/xuly.php?id=<?php echo $dong['idnsx']?>" method="POST" enctype="multipart/form-data" autocomplete="off">
<table width="400" border="1">
    <tr>
        <td colspan="2" align="center">Sửa nhà sản xuất</td>
    </tr>
    <tr>
        <td>Tên nhà sản xuất</td>
        <td><input type="text" name="tennsx" value="<?php echo $dong['tennsx']?>"></td>
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