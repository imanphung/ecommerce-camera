<div class="boxregister">
<div class="boxreg">
<form action="#" method="POST" name="register">
    <div class="boxreg-l">
        <div class="boxreg-input">
            <p>Họ tên <label class="label">*</label></p>
            <input type="text" name="phonenumber">
            <span></span>
        </div>
        <div class="boxreg-input">
            <p>Số điện thoại <label class="label">*</label></p>
            <input type="text" name="phonenumber">
            <span></span>
        </div>
        <div class="boxreg-input">
            <div class="boxreg-birthday">
                <p>Ngày sinh <label class="label">*</label></p>
                <div class="input-birthday">
                    <div class="input-birthday-day">
                        <select name="day" onchange="genderChanged(this)">
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
                    </div>
                    <div class="input-birthday-month">
                    <select name="month" onchange="genderChanged(this)">
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
                    </div>
                    <div class="input-birthday-year">
                    <select name="year" onchange="genderChanged(this)">
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
                <span></span>
            </div>
            <div class="boxreg-sex">
                <p>Giới tính <label class="label">*</label></p> 
                <div class="input-sex">
                    <select name="sex" onchange="genderChanged(this)">
                        <option disabled="disabled" selected="selected" value="">Chọn</option>
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nữ</option>
                        </select>
                </div>               
            </div>
        </div>
    </div>
    <div class="boxreg-r">
        <div class="boxreg-input">
            <p>Mật khẩu <label class="label">*</label></p>
            <input type="password" name="pass">
            <span></span>
        </div>
        <div class="boxreg-input">
            <p>Địa chỉ email <label class="label">*</label></p>
            <input type="password" name="pass">
            <span></span>
        </div>
    </div>
</form>
</div>
</div>