    <!-- 
        SID: 1660004
        Name: Phùng Thanh An
        Create Date-Time: 5/11/2018 -- 21:10
    -->
    <?php session_start();
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tansitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Camere máy ảnh chuyên nghiệp</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <?php
            include('js/js.html');
            include('modules/config.php');
            include('modules/header.php');
            include('modules/menu-top.php');
        ?>
        <div id="wrapper">
            <?php
            include('modules/container.php');
            ?>    
        </div>
        <?php
        include('modules/footer.php');?>
    </body>
    </html>