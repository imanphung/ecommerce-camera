<div class="boxregister">
<div class="boxreg">
<form action="modules/content/kiemtra.php" method="POST" name="register" onsubmit="return validateForm(this)">
    <div class="boxreg-l">
        <div class="boxreg-input">
            <p>Họ tên <label class="label">*</label></p>
            <input type="text" name="fullname" id="fullname" placeholder="Họ tên" class="normal" onblur="Hightlight_name(this,1)" onclick ="Hightlight_name(this,2)">
            <span id="eror-name"></span>
        </div>
        <div class="boxreg-input">
            <p>Số điện thoại <label class="label">*</label></p>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Nhập số điện thoại của bạn" class="normal" onblur="Hightlight_phone(this,1)" onclick ="Hightlight_phone(this,2)">
            <span id="eror-phone"></span>
        </div>
        <div class="boxreg-input">
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
                        while($i>=1990){
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
        <div class="boxreg-input">
            <p>Mật khẩu <label class="label">*</label></p>
            <input type="password" name="pass" id="pass" placeholder="Tối thiểu 6 ký tự bao gồm cả chữ và số" class="normal" onblur="Hightlight_pass(this,1)" onclick ="Hightlight_pass(this,2)">
            <span id="eror-pass"></span>
        </div>
        <div class="boxreg-input">
            <p>Địa chỉ email <label class="label">*</label></p>
            <input type="text" name="email" id="email" placeholder="Vui lòng nhập địa chỉ email của bạn" class="normal" onblur="Hightlight_email(this,1)" onclick ="Hightlight_email(this,2)">
            <span id="eror-email"></span>
        </div>
        <div class="boxreg-input">
            <div class="g-recaptcha" data-sitekey="6LcbLH4UAAAAADFFYuCo6glQHL2g47zY21YfB_LD"></div>
            <div class="recaptcha"><?php if(isset($_SESSION['msg']) && isset($_GET['check'])) echo $_SESSION['msg'];?></div>
            <span id="eror-recaptcha"></span>
        </div>
        <div class="boxreg-input">
            <input type="submit" name="submit" value="Đăng ký" class="normal">
        </div>
    </div>
</form>
</div>
</div>