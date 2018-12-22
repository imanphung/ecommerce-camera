<?php
if(isset($_SESSION['user'])){
    header('location:index.php?xem=quanlytaikhoan');
}
?>
<div class="boxlogin">
<div class="boxlog">
<form action="modules/content/xuly.php" method="POST" name="login" autocomplete="off" onsubmit="return validate_login(this)" enctype="multipart/form-data">
    <div class="boxlog-l">
        <div class="mod-input">
            <p>Số điện thoại hoặc email <label class="label">*</label></p>
            <input type="text" name="phone_email" id="phonenumber" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'];?>" placeholder="Vui lòng nhập số điện thoại hoặc email của bạn" class="normal" onblur="Hightlight_phone(this,1)" onclick ="Hightlight_phone(this,2)">
            <span id="eror-phone"></span>
        </div>
        <div class="mod-input">
            <p>Mật khẩu <label class="label">*</label></p>
            <input type="password" name="pass" id="pass" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'];?>" placeholder="Vui lòng nhập mật khẩu của bạn" class="normal" onblur="Hightlight_pass(this,1)" onclick ="Hightlight_pass(this,2)">
            <span id="eror-pass"></span>
            <span><?php if(isset($_COOKIE['eror'])) echo $_COOKIE['eror'];?></span>
        </div>
    </div>
    <div class="boxlog-r">
        <div class="mod-input">
            <input type="submit" name="submit" value="ĐĂNG NHẬP" class="btnsubmit">
        </div>
    </div>
</form>
</div>
</div>
