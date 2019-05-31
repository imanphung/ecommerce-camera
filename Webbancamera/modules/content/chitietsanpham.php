<?php
if(isset($_GET['them'])){
    $idsp=$_GET['them'];
    $gia=$_GET['gia'];
    $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
    $run1=mysqli_query($conn,$sql);
    if($run1){
        $dong1=mysqli_fetch_array($run1);
    }
    if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
        $count=count($_SESSION['giohang']);
        $check=false;
        //Tìm sản phẩm trong giỏ hàng sau đó tăng số lượng lên 1
        for($i=0;$i<$count;$i++){
            if($_SESSION['giohang'][$i]["idsp"]==$idsp){
                if($_SESSION['giohang'][$i]["soluong"]<$dong1['soluongban']){
                $_SESSION['giohang'][$i]["soluong"]+=1;
                }
            
            $check=true;
            break;
            }
        }
        //Nếu chưa có trong giỏ hàng thì chèn vào cuối của giỏ hàng
        if($check==false){
            $_SESSION['giohang'][$count]["idsp"]=$idsp;
            $_SESSION['giohang'][$count]["soluong"]=1;
            $_SESSION['giohang'][$count]["gia"]=$gia;
        }
    }
    else{
        //Tạo mới 1 giỏ hàng
        $_SESSION['giohang']=array();
        $_SESSION['giohang'][0]["idsp"]=$idsp;
        $_SESSION['giohang'][0]["soluong"]=1;
        $_SESSION['giohang'][0]["gia"]=$gia;
    }
    header('location:index.php?xem=chitietsanpham&id='.$_GET['them']);
}
    if(isset($_SESSION['user'])){
        $sql="SELECT * from chitetsp where chitetsp.idsp=$_GET[id]";
        $run=mysqli_query($conn,$sql);
        if($run){
        $dong=mysqli_fetch_array($run);
        $luotxem=$dong['soluotxem']+1;
        $sql="UPDATE chitetsp SET soluotxem=$luotxem where chitetsp.idsp=$_GET[id]";
        $run=mysqli_query($conn,$sql);
        }
    }
    //Truy vấn chi tiết sản phẩm
    $sql="SELECT * from chitetsp,loaisp,nhasanxuat where chitetsp.idsp=$_GET[id] and chitetsp.idloaisp=loaisp.idSP and chitetsp.idnsx=nhasanxuat.idnsx";
    $run=mysqli_query($conn,$sql);
    if($run){
    $dong=mysqli_fetch_array($run);
    //Truy vấn các sản phẩm cùng loại
    $sql_cungloai="SELECT * FROM chitetsp WHERE idloaisp=$dong[idloaisp] and idsp != $dong[idsp]";
    $run_cungloai=mysqli_query($conn,$sql_cungloai);
    //Truy vấn các sản phảm cùng nhà sản xuất
    $sql_cungnsx="SELECT * FROM chitetsp WHERE idnsx=$dong[idnsx] and idsp != $dong[idsp]";
    $run_cungnsx=mysqli_query($conn,$sql_cungnsx);
    }
?>
<div class="sp">
    <p class="boxhead"><?php echo $dong['tensp']?></p>
    <div class="boxctsp">
        <div class="boximg"><img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="300" height="300" class="detail"></div>
    <div class="price_sale">

        <div class="area_price"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>
        <div class="view">Lượt xem: <?php echo $dong['soluotxem']?></div>
        <div class="quantity">Số lượng bán: <?php echo $dong['soluongsp']?></div>
        <div class="origin">Xuất xứ: <?php echo $dong['xuatsu']?></div>
        <div class="species">Loại: <?php echo $dong['TenloaiSP']?></div>
        <div class="producer">Nhà sản xuất: <?php echo $dong['tennsx']?></div>
        <div class="btncarts"><a href="index.php?xem=chitietsanpham&them=<?php echo $dong['idsp']?>&gia=<?php echo $dong['gia']?>"><img src="images/shopping_cart.jpg"></a></div>
        </div>
        <div class="description"><?php echo $dong['mota']?></div>
        
    </div>
</div>
<div class="sp">
    <p><a href="#">Sản phẩm cùng loại</a></p>
    <?php
    $i=1;
    ?>
    <?php
    while(($dong_cungloai=mysqli_fetch_array($run_cungloai))&$i<=5){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungloai['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungloai['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong_cungloai['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong_cungloai['gia'], 0, ',', '.').'₫' ?></div>
            <div class="action">
            </div>
        </a>
        <div class="shopping_cart">
        <a href="index.php?xem=quanlygiohang&id=<?php echo $dong['idsp']?>">
            <img src="images/shopping_cart.jpg" width="40" height="40">
        </a>
        </div>
    </div>
    <?php
    $i++;
    }?>
</div>
<div class="sp">
    <p><a href="#">Sản phẩm cùng nhà sản xuất</a></p>
    <?php
    $i=5;
    ?>
    <?php
    while(($dong_cungnsx=mysqli_fetch_array($run_cungnsx))&$i<10){
    ?>
    <div class="box">
        <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_cungnsx['idsp']?>">
            <img src="admin/modules/quanlysp/uploads/<?php echo $dong_cungnsx['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
            <div class="pname" id="<?php echo $i;?>"><?php echo $dong_cungnsx['tensp']?></div>
            <div class="pprice"><?php echo number_format($dong_cungnsx['gia'], 0, ',', '.').'₫' ?></div>
            <div class="action">
            </div>
        </a>
        <div class="shopping_cart">
        <a href="index.php?xem=quanlygiohang&id=<?php echo $dong['idsp']?>">
            <img src="images/shopping_cart.jpg" width="40" height="40">
        </a>
        </div>
    </div>
    <?php
    $i++;
    }?>
</div>
