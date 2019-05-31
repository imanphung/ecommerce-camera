<?php
if(isset($_SESSION['user'])==false){
    header('location:index.php?xem=dangnhap');
}
?>
<?php
$tong=0;
$tongtien=0;
$ship =20000;
$count=count($_SESSION['giohang']);
if(isset($_SESSION['giohang'])){?>
<form action="modules/content/xuly.php" method="POST" name="shipment" autocomplete="off" onsubmit="return validate_shipment(this)" enctype="multipart/form-data">
    <div class="shipment-wrap">
            <div class="shipment-title">
                <h2>Thông tin giao hàng</h2>
            </div>
            <div class="shipment-content">
                <div class="shipment-content-left">
                    <div class="mod-input">
                        <p>Họ tên <label class="label1">*</label></p>
                        <input type="text" name="fullname" id="fullname" placeholder="Họ tên" class="normal" onblur="Hightlight_name(this,1)" onclick ="Hightlight_name(this,2)">
                        <span id="eror-name"></span>
                    </div>
                    <div class="mod-input">
                        <p>Số điện thoại <label class="label">*</label></p>
                        <input type="text" name="phonenumber" id="phonenumber" placeholder="Nhập số điện thoại của bạn" class="normal" onblur="Hightlight_phone(this,1)" onclick ="Hightlight_phone(this,2)">
                        <span id="eror-phone"></span>
                    </div>
                </div>
                <div class="shipment-content-right">
                    <div class="mod-input">
                        <p>Số nhà - đường <label class="label">*</label></p>
                        <input type="text" name="street" id="street" placeholder="Nhập số nhà - tên đường" class="normal" onblur="Hightlight_street(this,1)" onclick ="Hightlight_street(this,2)">
                        <span id="eror-street"></span>
                        
                    </div>
                    <div class="mod-input">
                        <p>Phường/ Xã <label class="label">*</label></p>
                        <input type="text" name="ward" id="ward" placeholder="Nhập tên Phường/ Xã" class="normal" onblur="Hightlight_ward(this,1)" onclick ="Hightlight_ward(this,2)">
                        <span id="eror-ward"></span>
                    </div>
                    <div class="mod-input">
                        <p>Quận/ Huyện <label class="label">*</label></p>
                        <input type="text" name="county" id="county" placeholder="Nhập tên Quận/ Huyện" class="normal" onblur="Hightlight_county(this,1)" onclick ="Hightlight_county(this,2)">
                        <span id="eror-county"></span>
                    </div>
                    <div class="mod-input">
                        <p>Tỉnh/ Thành Phố <label class="label">*</label></p>
                        <input type="text" name="province" id="province" placeholder="Nhập tên Tỉnh/ Thành Phố" class="normal" onblur="Hightlight_province(this,1)" onclick ="Hightlight_province(this,2)">
                        <span id="eror-province"></span>
                    </div>
                </div>
            </div>
    </div>
    <div class="shipment-info">
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
                        <div class="total-price">
                        <?php
                        $tongtien=$tong + $ship;
                        ?>
                        <input class="total" readonly="readonly" type="text" name="tongtien" value="<?php echo $tongtien;?>"><?php echo number_format($tongtien, 0, ',', '.').'₫';?>
                        </div>
                        </div>                      
                    </li>
                    <li>
                    <button type="submit" class="btn-con-cart" name="btnshipment">THANH TOÁN</button>
                    </li>
                </ul>
    </div>
</form>
<script>
    function Hightlight_street(obj,flag){
        var street= document.getElementById('street').value;
        switch(flag){
            case 1:
            {
            if(street==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-street').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-street').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-street').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function Hightlight_ward(obj,flag){
        var ward= document.getElementById('ward').value;
        switch(flag){
            case 1:
            {
            if(ward==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-ward').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-ward').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-ward').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function Hightlight_county(obj,flag){
        var county= document.getElementById('county').value;
        switch(flag){
            case 1:
            {
            if(county==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-county').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-county').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-county').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function Hightlight_province(obj,flag){
        var province= document.getElementById('province').value;
        switch(flag){
            case 1:
            {
            if(province==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-province').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-province').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-province').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function validate_shipment(obj){
        var fullname= document.getElementById('fullname').value;
        var phonenumber= document.getElementById('phonenumber').value;
        var street= document.getElementById('street').value;
        var ward= document.getElementById('ward').value;
        var county = document.getElementById('county').value;
        var province = document.getElementById('province').value;

        if(fullname=='' || phonenumber=='' || street=='' || ward==''||county==''||province==''){
            if(fullname==''){
                Hightlight_name(obj.fullname,1);
            }
            if(phonenumber==''){
                Hightlight_phone(obj.phonenumber,1);
            }
            if(street==''){
                Hightlight_street(obj.street,1);
            }
            if(ward==''){
                Hightlight_ward(obj.ward,1);
            }
            if(county==''){
                Hightlight_county(obj.county,1);
            }
            if(province==''){
                Hightlight_province(obj.province,1);
            }
            return false;
        }
        else{
            return true;
        }
    }
</script>
<?php
}
?>


