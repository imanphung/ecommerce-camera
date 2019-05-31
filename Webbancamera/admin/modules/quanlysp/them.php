<?php 
$sql="SELECT * FROM loaisp ORDER BY idSP";   
$run = mysqli_query($conn,$sql);
?>
<form name="frmadd" action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data" autocomplete="off">
<table width="840" class="add-product">
    <tr>
        <td colspan="2" align="center">Thêm chi tiết sản phẩm</td>
    </tr>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensp"></td>
    </tr>
    <tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="giasp"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
        <td>Mô tả</td>
        <td><textarea name="motasp" cols="100" rows="15"></textarea></td>
    </tr>
    <tr>
        <td>Loại sản phẩm</td>
        <td>
        <select name="idloaisp">
            <?php while($dong=mysqli_fetch_array($run)){
            ?>
            <option value="<?php echo $dong['idSP']?>"><?php echo $dong['TenloaiSP']?></option>
            <?php
            }
            ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Xuất sứ</td>
        <td><input type="text" name="xuatsu"></td>
    </tr>
    <tr>
        <td>Nhà sản xuất</td>
        <td>
        <?php
        $sql="SELECT * FROM nhasanxuat ORDER BY idnsx";   
        $run = mysqli_query($conn,$sql);
        ?>        
        <select name="idnsx">
            <?php while($dong=mysqli_fetch_array($run)){
            ?>
            <option value="<?php echo $dong['idnsx']?>"><?php echo $dong['tennsx']?></option>
            <?php
            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Số lượng sp</td>
        <td><input type="text" name="soluongsp"></td>
    </tr>
    <tr>
        <td>Ngày tiếp nhận</td>
        <td><input type="date" name="date"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="them" id="them" value="Thêm"></td>
    </tr>
</table>
</form>