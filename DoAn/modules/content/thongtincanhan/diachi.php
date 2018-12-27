<div class="info-right">
            <div class="header-info">
                <p>Địa chỉ Của Tôi</p>
                <div class="header-security">Quản lý địa chỉ giao hàng</div>   
            </div>
            <div class="profile">
                <div class="profile-left">
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Số nhà - đường </label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="street" id="street" placeholder="Nhập số nhà - tên đường" class="normal" onblur="Hightlight_street(this,1)" onclick ="Hightlight_street(this,2)">
                                <span id="eror-street"></span>                          
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Phường/ Xã</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="ward" id="ward" placeholder="Nhập tên Phường/ Xã" class="normal" onblur="Hightlight_ward(this,1)" onclick ="Hightlight_ward(this,2)">
                                <span id="eror-ward"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Quận/ Huyện</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">
                                <input type="text" name="county" id="county" placeholder="Nhập tên Quận/ Huyện" class="normal" onblur="Hightlight_county(this,1)" onclick ="Hightlight_county(this,2)">
                                <span id="eror-county"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-profile">
                        <div class="input-profile-label">
                            <label>Tỉnh/ Thành Phố</label>
                        </div>
                        <div class="input-profile-content">
                            <div class="mod-input">                           
                                <input type="text" name="province" id="province" placeholder="Nhập tên Tỉnh/ Thành Phố" class="normal" onblur="Hightlight_province(this,1)" onclick ="Hightlight_province(this,2)">
                                <span id="eror-province"></span>
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