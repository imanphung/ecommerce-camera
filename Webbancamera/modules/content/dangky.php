<?php
if(isset($_SESSION['user'])){
    header('location:index.php?xem=quanlytaikhoan');
}
?>
<div class="boxregister">
<div class="have-account">Bạn đã có tài khoản? <a href="?xem=dangnhap">Đăng nhập</a> tại đây
</div>
<div class="boxreg">
<form action="modules/content/kiemtradangky.php" method="POST" name="register" autocomplete="off" onsubmit="return validate_register(this)" enctype="multipart/form-data">
    <div class="boxreg-l">
        <div class="mod-input">
            <p>Họ tên <label class="label">*</label></p>
            <input type="text" name="fullname" id="fullname" placeholder="Họ tên" class="normal" onblur="Hightlight_name(this,1)" onclick ="Hightlight_name(this,2)">
            <span id="eror-name"></span>
        </div>
        <div class="mod-input">
            <p>Số điện thoại <label class="label">*</label></p>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Nhập số điện thoại của bạn" class="normal" onblur="Hightlight_phone(this,1)" onclick ="Hightlight_phone(this,2)">
            <span id="eror-phone"></span>
        </div>
        <div class="mod-input">
            <div class="boxreg-birthday">
                <p>Ngày sinh <label class="label">*</label></p>
                <div class="input-birthday">
                    <select name="day" id="day" class="input-birthday-day" onchange="genderChanged(this)">
                            <option disabled="disabled" selected="selected" value="">Ngày</option>
                            <?php
                            $i=1;
                            ?>
                            <?php
                            while($i<=31){
                            ?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                            $i++;
                            }?>
                    </select>
                    <select name="month" id="month" class="input-birthday-month" onchange="genderChanged(this)">
                            <option disabled="disabled" selected="selected" value="">Tháng</option>
                            <?php
                            $i=1;
                            ?>
                            <?php
                            while($i<=12){
                            ?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                            $i++;
                            }?>
                    </select>
                    <select name="year" id="year" class="input-birthday-year" onchange="genderChanged(this)">
                        <option disabled="disabled" selected="selected" value="">Năm</option>
                        <?php
                        $date= getdate();
                        $i=$date['year'];
                        ?>
                        <?php
                        while($i>=1900){
                        ?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php
                        $i--;
                        }?>
                    </select>
                </div>
            </div>
            <div class="boxreg-sex">
                <p>Giới tính <label class="label">*</label></p>
                <select name="sex" id="sex" class="input-sex" onchange="genderChanged(this)">
                    <option disabled="disabled" selected="selected" value="">Chọn</option>
                    <option value="Nam">Nam</option>
                    <option value="Nu">Nữ</option>
                </select>             
            </div>
        </div>
    </div>
    <div class="boxreg-r">
        <div class="mod-input">
            <p>Mật khẩu <label class="label">*</label></p>
            <input type="password" name="pass" id="pass" placeholder="Tối thiểu 6 ký tự bao gồm cả chữ và số" class="normal" onblur="Hightlight_pass(this,1)" onclick ="Hightlight_pass(this,2)">
            <span id="eror-pass"></span>
        </div>
        <div class="mod-input">
            <p>Địa chỉ email <label class="label">*</label></p>
            <input type="text" name="email" id="email" placeholder="Vui lòng nhập địa chỉ email của bạn" class="normal" onblur="Hightlight_email(this,1)" onclick ="Hightlight_email(this,2)">
            <span id="eror-email"></span>
        </div>
        <div class="mod-input">
            <div class="g-recaptcha" data-sitekey="6LcbLH4UAAAAADFFYuCo6glQHL2g47zY21YfB_LD"></div>
            <div class="recaptcha"><?php if(isset($_COOKIE['eror'])) echo $_COOKIE['eror'];?></div>
            <span id="eror-recaptcha"></span>
        </div>
        <div class="mod-input">
            <input type="submit" name="submit" value="ĐĂNG KÝ" class="btnsubmit">
        </div>
    </div>
</form>
</div>
</div>