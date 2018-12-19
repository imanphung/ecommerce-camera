<?php
if(isset($_SESSION['user'])){
    $sql="SELECT * FROM khachhang WHERE (email = $_SESSION[user] or sdt = $_SESSION[user])";
    $run = mysqli_query($conn,$sql);
    if($run){
        $row=mysqli_fetch_array($run);
        $day=substr($row['ngaysinh'],8,10);
        $month=substr($row['ngaysinh'],5,7);
        $year=substr($row['ngaysinh'],0,4);
    }
}
else{
    header('location:index.php?xem=dangnhap');
}
?>
<div class="box-info">
    <div class="info-left">
        <div class="member-info">Xin chào, <?php echo $row['tenkh']?></div>
        <ul class="mod-container">
            <li>
                <a href="">Thông tin cá nhân</a>
            </li>
            <li>
                <a href="">Đơn hàng của tôi</a>
            </li>
        </ul>
    </div>
    <form action="#" method="POST" name="info-user" autocomplete="off" onsubmit="return validate_info_user(this)" enctype="multipart/form-data">
        <div class="info-right">
            <div class="header-info">
                <p>Thông Tin Của Tôi</p>
                <div class="header-security">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>   
            </div>
            <div class="profile">
                <div class="profile-left">
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Họ và tên</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="fullname" id="fullname" class="normal" onblur="Hightlight_name(this,1)" onclick ="Hightlight_name(this,2)" value="<?php echo $row['tenkh']?>">
                                <span id="eror-name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Số điện thoại</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="phonenumber" id="phonenumber" class="normal" onblur="Hightlight_phone(this,1)" onclick ="Hightlight_phone(this,2)" value="<?php echo $row['sdt']?>">
                                <span id="eror-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Email</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="email" id="email" class="normal" onblur="Hightlight_email(this,1)" onclick ="Hightlight_email(this,2)" value="<?php echo $row['email']?>">
                                <span id="eror-email"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Giới tính</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                            <div class="boxreg-sex">
                                <select name="sex" id="sex" class="input-sex" onchange="genderChanged(this)">
                                <?php
                                if($row['gioitinh']=="Nam"){
                                ?>
                                    <option selected="selected" value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                <?php
                                }else{?>
                                    <option value="Nam">Nam</option>
                                    <option selected="selected" value="Nu">Nữ</option>
                                <?php
                                }?>
                                </select>
                                <span></span>
                            </div>
                            </div>       
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Ngày sinh</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <div class="input-birthday">
                                    <select name="day" id="day" class="input-birthday-day" onchange="genderChanged(this)">
                                            <option disabled="disabled" selected="selected" value="">Ngày</option>
                                            <?php
                                            $i=1;
                                            ?>
                                            <?php
                                            while($i<=31){
                                                if($day==$i){
                                            ?>
                                                <option selected="selected" value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php
                                            $i++;
                                            }else{?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>                                            
                                            <?php
                                            }
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
                                                if($month==$i){
                                            ?>
                                                <option selected="selected" value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php
                                            $i++;
                                            }else{?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>                                            
                                            <?php
                                            }
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
                                            if($year==$i){
                                        ?>
                                            <option selected="selected" value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php
                                        $i--;
                                        }else{?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>                                            
                                        <?php
                                        }
                                        $i--;
                                        }?>
                                    </select>
                                </div>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <input type="submit" value="Lưu" name="save" id="save" class="btnsave"></div>
                    </div>
                <div class="profile-right">                  
                </div>
            </div>
        </div>
    </form>
</div>