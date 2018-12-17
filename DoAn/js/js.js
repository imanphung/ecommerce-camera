
    function genderChanged(obj)
    {
        var value=obj.value;
        if(value==''){ 
            obj.style.color="#ddd";               
        }
        else{
            obj.style.color="#000";
            obj.style.border= "1px solid #ddd";
        }
    }
    function Hightlight_name(obj,flag){
        var fullname= document.getElementById('fullname').value;
        switch(flag){
            case 1:
            {
            if(fullname==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-name').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-name').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-name').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function Hightlight_phone(obj,flag){
        var phonenumber= document.getElementById('phonenumber').value;
        switch(flag){
            case 1:
            {
            if(phonenumber==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-phone').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-phone').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-phone').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function Hightlight_pass(obj,flag){
        var pass= document.getElementById('pass').value;
        switch(flag){
            case 1:
            {
            if(pass==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-pass').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-pass').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-pass').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
        function Hightlight_email(obj,flag){
        var email= document.getElementById('email').value;
        switch(flag){
            case 1:
            {
            if(email==''){
            obj.className="mod-input-eror";
            document.getElementById('eror-email').innerHTML = "Bạn không thể bỏ trống chỗ này";
            }
            else{
            document.getElementById('eror-email').innerHTML = "";
            obj.className="normal";
            }
            break;
            }
            case 2:
            {
                document.getElementById('eror-email').innerHTML = "";
                obj.className="clicktext";
                break;
            }
        }
    }
    function validate_register(obj){
        var fullname= document.getElementById('fullname').value;
        var phonenumber= document.getElementById('phonenumber').value;
        var pass= document.getElementById('pass').value;
        var email= document.getElementById('email').value;
        var day = document.getElementById('day').value;
        var month = document.getElementById('month').value;
        var year = document.getElementById('year').value;
        var sex= document.getElementById('sex').value;
        if(fullname=='' || phonenumber=='' || pass=='' || email==''||day==''||month==''||year==''||sex==''){
            if(fullname==''){
                Hightlight_name(obj.fullname,1);
            }
            if(phonenumber==''){
                Hightlight_phone(obj.phonenumber,1);
            }
            if(pass==''){
                Hightlight_pass(obj.pass,1);
            }
            if(email==''){
                Hightlight_email(obj.email,1);
            }
            if(day==''){
                obj.day.className="input-birthday-day-eror";
            }
            if(month==''){
                obj.month.className="input-birthday-month-eror";
            }
            if(year==''){
                obj.year.className="input-birthday-year-eror";
            }
            if(sex==''){
                obj.sex.className="input-sex-eror";
            }
            return false;
        }
        else{
            return true;
        }
    }
    function validate_info_user(obj){
        var fullname= document.getElementById('fullname').value;
        var phonenumber= document.getElementById('phonenumber').value;
        var email= document.getElementById('email').value;
        var day = document.getElementById('day').value;
        var month = document.getElementById('month').value;
        var year = document.getElementById('year').value;
        var sex= document.getElementById('sex').value;
        if(fullname=='' || phonenumber=='' || pass=='' || email==''||day==''||month==''||year==''||sex==''){
            if(fullname==''){
                Hightlight_name(obj.fullname,1);
            }
            if(phonenumber==''){
                Hightlight_phone(obj.phonenumber,1);
            }
            if(email==''){
                Hightlight_email(obj.email,1);
            }
            if(day==''){
                obj.day.className="input-birthday-day-eror";
            }
            if(month==''){
                obj.month.className="input-birthday-month-eror";
            }
            if(year==''){
                obj.year.className="input-birthday-year-eror";
            }
            if(sex==''){
                obj.sex.className="input-sex-eror";
            }
            return false;
        }
        else{
            return true;
        }
    }
    function validate_login(obj){
        var phone_email= document.getElementById('phonenumber').value;
        var pass= document.getElementById('pass').value;
        if(phonenumber=='' || pass==''){
            if(phone_email==''){
                Hightlight_phone(obj.phonenumber,1);
            }
            if(pass==''){
                Hightlight_pass(obj.pass,1);
            }
            return false;
        }
        else{
            return true;
        }
    }
    function motionpictures(obj,flag,id){
        switch(flag){
            case 1:
            {
            obj.className="motionpictures_top";
            document.getElementById(id).style.color="rgb(14, 144, 184)";
            break;
            }
            case 2:
            {
            obj.className="motionpictures_bottom";
            document.getElementById(id).style.color="#333";
            break;
            }
        }
    }