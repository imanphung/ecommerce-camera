    <!-- 
        SID: 1660004
        Name: Phùng Thanh An
        Create Date-Time: 5/11/2018 -- 21:10
    -->
    <?php
    ob_start();
    session_start();
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tansitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Camere máy ảnh chuyên nghiệp</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <script>
            // tạo menu cố định
        $(document).ready(function() {
            var div = $('#menu-top');
            var start = $(div).offset().top;
            $.event.add(window, "scroll", function() {
                var p = $(window).scrollTop();
                $(div).css('position',((p)>start) ? 'fixed' : 'static');
                $(div).css('top',((p)>start) ? '0px' : '');
            });
        });
        </script>
        
    </head>
    <body>
        <?php
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