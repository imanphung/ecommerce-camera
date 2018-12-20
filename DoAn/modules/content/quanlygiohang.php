<?php
if(isset($_SESSION['user'])==false){
    header('location:index.php?xem=dangnhap');
}
?>
<<<<<<< HEAD
<?php
if(isset($_SESSION['giohang'])){?>
<?php if(isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    $check=false;
    for($i=0;$i<$count;$i++){
        if($_SESSION['giohang'][$i]["idsp"]==$id){
            unset($_SESSION['giohang'][$i]);
            $check=true;
        }
        if($check==true){
            $_SESSION['giohang'][$i]=$_SESSION['giohang'][$i+1];
        }
    }
    header('location:index.php?xem=quanlygiohang');
}?>
<div class="cart-wrap">
            <div class="cart-title">
                <h2>Giỏ hàng của bạn</h2>
                <div class="product-total">(<?php echo count($_SESSION['giohang']);?> sản phẩm)</div>
            </div>
            <div class="cart-content">
                <?php
                for ($i=0; $i < count($_SESSION['giohang']); $i++) {?>
                    
                    <?php
                        $idsp=$_SESSION['giohang'][$i]["idsp"];
                        $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
                        $run=mysqli_query($conn,$sql);
                        $dong=mysqli_fetch_array($run);
                    ?>
                    <div class="cart-content-left">
                    <div class="cart-row-inner">
                        <div class="option-col">
                            <input type="checkbox" checked="checked" class="checkmark">
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
                            <p class="price"><?php echo $dong['gia']?></p>
                        </div>
                        <div class="field-qty-col">
                            <div class="qty">
                                <button onclick="Subnumber()">-</button>
                                <input type="text" name="order-number" id="order-number" value="<?php echo $_SESSION['giohang'][$i]["soluong"]?>" onload="Checknumber(this)">                     
                                <button  onclick="Addnumber()">+</button>
                            </div>
                            <div class="field-status-col">
                                <span>Còn <?php echo $dong['soluongban']?> sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-content-right">
                    <div class="shipping-info">
                        <p>Hình thức giao hàng:</p>
                        <select name="ship" id="ship">
                            <option value="" disabled="disabled" selected="selected">Lựa chọn</option>
                            <option value="1">Giao một phần</option>
                            <option value="2">Giao toàn bộ</option>
                        </select>
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
                        <p>Tạm tính(<span>4 sản phẩm</span>)</p></div>
                    <div class="oder-info-right">
                        <p>234.000</p>
                    </div>
                </li>
                <li>
                    <div class="oder-info-left"><p>Phí giao hàng</p></div>
                    <div class="oder-info-right"><p>11.000</p></div>
                </li>
                <li>
                    <div class="oder-info-left">
                        <p>Tổng cộng</p>
                    </div>
                    <div class="oder-info-right">   
                    <div class="total-price">1.800.000</div>
                    </div>
                    
                </li>
                <li>
                <button type="button" class="btn-con-cart">XÁC NHẬN GIỎ HÀNG</button>
                </li>
            </ul>
</div>
<?php
}
?>

=======
<div class="cart-wrap">
    <div class="cart-title">
        <h2>Giỏ hàng của bạn</h2>
        <div class="product-total">(1 sản phẩm)</div>
    </div>
    <div class="cart-content">
        <div class="cart-content-left">
            <div class="cart-row-inner">
                <div class="option-col">
                    <input type="checkbox" checked="checked" class="checkmark">
                </div>
                <div class="field-img-col">
                    <img src="admin/images/m32_600x532.jpg">
                </div>
                <div class="field-content-col">
                    <p class="field-name">Combo máy quay hành động Gopro Hero 7 Black + thiết bị chống rung Feiyu G6</p>
                    <div class="field-others">
                        <a class="btn-remove" title="Xoá">Xoá</a>
                    </div>
                </div>
                <div class="field-price-col">
                    <p class="price">1.880.000 ₫</p>
                </div>
                <div class="field-qty-col">
                    <div class="qty">
                        <button type="button">-</button>
                        <input type="text" value="1">
                        <button type="button">+</button>
                    </div>
                    <div class="field-status-col">
                        <span>Còn hàng</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-content-right">
            <div class="shipping-info">
                <p>Hình thức giao hàng:</p>
                <select name="ship" id="ship">
                    <option value="" disabled="disabled" selected="selected">Lựa chọn</option>
                    <option value="1">Giao một phần</option>
                    <option value="2">Giao toàn bộ</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="cart-info"></div>
>>>>>>> 7e212fcdee06c98f415d70808d723581af5d15e6
