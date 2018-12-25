<?php
if(isset($_SESSION['user'])==false){
    header('location:index.php?xem=dangnhap');
}
?>
<?php
$tong=0;
$ship =20000;
if(isset($_SESSION['giohang'])){?>
<?php
$count=count($_SESSION['giohang']);
    //Xoá sản phẩm có trong giỏ hàng
    if(isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        $check=false;
        for($i=0;$i<$count;$i++){
            if($_SESSION['giohang'][$i]["idsp"]==$id){
                $_SESSION['giohang'][$i]=$_SESSION['giohang'][$i+1];
                $check=true;
            }
            if($check==true){
                $_SESSION['giohang'][$i]=$_SESSION['giohang'][$i+1];
            }
        }
        unset($_SESSION['giohang'][$count-1]);
        header('location:index.php?xem=quanlygiohang');
    }?>
    <?php
    //Thêm số lượng sản phẩm
    if(isset($_GET['themsoluong'])){
        $id=$_GET['themsoluong'];
        $sql="SELECT * FROM chitetsp WHERE idsp=$id";
        $run=mysqli_query($conn,$sql);
        if($run){
            $dong=mysqli_fetch_array($run);
        }
        for($i=0;$i<$count;$i++){
            if($_SESSION['giohang'][$i]["idsp"]==$id){
                if( $_SESSION['giohang'][$i]["soluong"]< $dong['soluongban']){
                $_SESSION['giohang'][$i]["soluong"]+=1;
                }
                break;
            }
        }
        header('location:index.php?xem=quanlygiohang');
    }
    ?>
        <?php
    //Giảm số lượng sản phẩm
    if(isset($_GET['giamsoluong'])){
        $id=$_GET['giamsoluong'];
        $sql="SELECT * FROM chitetsp WHERE idsp=$id";
        $run=mysqli_query($conn,$sql);
        if($run){
            $dong=mysqli_fetch_array($run);
        }
        $id=$_GET['giamsoluong'];
        for($i=0;$i<$count;$i++){
            if($_SESSION['giohang'][$i]["idsp"]==$id){
                if( $_SESSION['giohang'][$i]["soluong"]>1){
                    $_SESSION['giohang'][$i]["soluong"]-=1;
                }
                break;
            }
        }
        header('location:index.php?xem=quanlygiohang');
    }
    ?>
<form action="modules/content/xuly.php" method="POST" name="cart" enctype="multipart/form-data">
    <div class="cart-wrap">
                <div class="cart-title">
                    <h2>Giỏ hàng của bạn</h2>
                    <div class="product-total">(<?php echo count($_SESSION['giohang']);?> sản phẩm)</div>
                    <div class="shipping">
                        <div class="shipping-info">
                            <p>Hình thức giao hàng:</p>
                            <select name="ship" id="ship">
                                <option value="" disabled="disabled" selected="selected">Lựa chọn</option>
                                <option  value="1">Giao một phần</option>
                                <option  value="2">Giao toàn bộ</option>
                            </select>
                        </div>
                </div>
                </div>
                <div class="cart-content">
                    <?php
                    //Duyệt tất cả sản phẩm có trong giỏ hàng để hiển thị
                    for ($i=0; $i < count($_SESSION['giohang']); $i++) {?>
                        
                        <?php
                            $idsp=$_SESSION['giohang'][$i]["idsp"];
                            $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
                            $run=mysqli_query($conn,$sql);
                            if($run){
                                $dong=mysqli_fetch_array($run);
                            }
                        ?>
                        <div class="cart-content-left">
                        <div class="cart-row-inner">
                            <div class="option-col">
                            </div>
                            <div class="field-img-col">
                                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>">
                            </div>
                            <div class="field-content-col">
                                <p class="field-name"><?php echo $dong['tensp']?></p>
                                <div class="field-others">
                                    <a href="index.php?xem=quanlygiohang&xoa=<?php echo $dong['idsp']?>" class="btn-remove">Xoá</a>
                                </div>
                            </div>
                            <div class="field-price-col">
                                <p class="price"><?php echo number_format($dong['gia'], 0, ',', '.').'₫';?></p>
                            </div>
                            <div class="field-qty-col">
                                <div class="qty">
                                    <button type="button" onclick="Redirect_sub(<?php echo $dong['idsp']?>);" >-</button>
                                    <input type="text" readonly="readonly" name="order-number" id="order-number" value="<?php echo $_SESSION['giohang'][$i]["soluong"]?>">                     
                                    <button type="button" onclick="Redirect_add(<?php echo $dong['idsp']?>);">+</button>
                                </div>
                                <div class="field-status-col">
                                    <span>Còn <?php echo $dong['soluongban']?> sản phẩm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
            </div>
            <div class="cart-info">
                <h2>Thông tin đơn hàng</h2>
                <ul>
                    <li>
                        <div class="oder-info-left">
                            <p>Tạm tính(<span><?php echo count($_SESSION['giohang']);?> sản phẩm</span>)</p></div>
                        <div class="oder-info-right">
                            <p><?php
                                for ($i=0; $i < count($_SESSION['giohang']); $i++) 
                                {                          
                                    $idsp=$_SESSION['giohang'][$i]["idsp"];
                                    $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
                                    $run=mysqli_query($conn,$sql);
                                    if($run){
                                        $dong=mysqli_fetch_array($run);
                                    }
                                    $tong += $dong['gia'] *  $_SESSION['giohang'][$i]["soluong"];
                                }
                                echo number_format($tong, 0, ',', '.').'₫';
                            ?></p>
                        </div>
                    </li>
                    <li>
                        <div class="oder-info-left"><p>Phí giao hàng</p></div>
                        <div class="oder-info-right"><p><?php echo number_format($ship, 0, ',', '.').'₫';?></p></div>
                    </li>
                    <li>
                        <div class="oder-info-left">
                            <p>Tổng cộng</p>
                        </div>
                        <div class="oder-info-right">   
                        <div class="total-price"><?php
                        $tongtien=$tong + $ship;
                        echo number_format($tongtien, 0, ',', '.').'₫';
                        ?></div>
                        </div>
                        
                    </li>
                    <li>
                    <button type="submit" class="btn-con-cart" name="btncart" id="btncart">XÁC NHẬN GIỎ HÀNG</button>
                    </li>
                </ul>
    </div>
</form>
<?php
}
?>

