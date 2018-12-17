<?php
if(isset($_SESSION['user'])==false){
    header('location:index.php?xem=dangnhap');
}
?>
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
