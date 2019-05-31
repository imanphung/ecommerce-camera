<div id="header">
    <div class="account"><ul>
        <?php
        if(isset($_SESSION['user'])){
        ?>
        <li><a href="index.php?xem=quanlytaikhoan&chon=thongtincanhan">Tài khoản của tôi</a>
            <ul>
                <li><a href="modules/content/logout.php">Đăng xuất</a></li>
                <li><a href="#">Đổi mật khẩu</a></li>
            </ul>
        </li>
        <?php
        }else{
        ?>
        <li><a href="index.php?xem=dangky">Đăng ký</a></li>
        <li><a href="index.php?xem=dangnhap">Đăng nhập</a></li>
        <?php
        }
        ?>
    </ul>
    </div>
</div>