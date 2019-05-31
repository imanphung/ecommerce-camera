<?php 
$sql="SELECT * FROM chitetsp where idsp=$_GET[id]";   
$run = mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);
?>
<form name="frmadd" action="modules/quanlysp/xuly.php?id=<?php echo $dong['idsp']?>" method="POST" enctype="multipart/form-data" autocomplete="off">
<table width="840" class="add-product">
    <tr>
        <td colspan="2" align="center">Thêm chi tiết sản phẩm</td>
    </tr>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
    </tr>
    <tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="giasp" value="<?php echo $dong['gia']?>"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"><img src="modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"><?php echo $dong['hinhanh']?></td>
    </tr>
    <tr>
        <td>Mô tả</td>
        <td><textarea name="motasp" cols="100" rows="15" ><?php echo $dong['mota']?></textarea></td>
    </tr>
    <tr>
        <td>Loại sản phẩm</td>
        <td>
        <?php
        $sql="SELECT * FROM loaisp ORDER BY idSP";   
        $run = mysqli_query($conn,$sql);
        ?>    
        <select name="idloaisp">
            <?php while($dong_loaisp=mysqli_fetch_array($run)){
                if($dong['idloaisp']==$dong_loaisp['idSP']){
            ?>
            <option selected="selected" value="<?php echo $dong_loaisp['idSP']?>"><?php echo $dong_loaisp['TenloaiSP']?></option>
            
            <?php
                }else{
            ?>
                <option value="<?php echo $dong_loaisp['idSP']?>"><?php echo $dong_loaisp['TenloaiSP']?></option>
            <?php
            }
            }
            ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Xuất sứ</td>
        <td><input type="text" name="xuatsu" value="<?php echo $dong['xuatsu']?>"></td>
    </tr>
    <tr>
        <td>Số lượng sp</td>
        <td><input type="text" name="soluongsp" value="<?php echo $dong['soluongsp']?>"></td>
    </tr>
    <tr>
        <td>Nhà sản xuất</td>
        <td>
        <?php
        $sql="SELECT * FROM nhasanxuat ORDER BY idnsx";   
        $run = mysqli_query($conn,$sql);
        ?>        
        <select name="idnsx">
            <?php while($dong_nsx=mysqli_fetch_array($run)){
                if($dong['idnsx']==$dong_nsx['idnsx']){
            ?>
                <option selected="selected" value="<?php echo $dong_nsx['idnsx']?>"><?php echo $dong_nsx['tennsx']?></option>
            <?php
                }else{
            ?>
                <option value="<?php echo $dong_nsx['idnsx']?>"><?php echo $dong_nsx['tennsx']?></option>
            <?php
            }
            }
            ?>
        </select></td>
    </tr>
        <td>Ngày tiếp nhận</td>
        <td><input type="date" name="date" value="<?php echo $dong['ngaytiepnhan']?>"></td>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="sua" id="sua" value="Sửa"></td>
    </tr>
</table>
</form>