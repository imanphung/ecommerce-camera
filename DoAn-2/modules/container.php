<div id="container">
     <div id="content">
        <?php
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            }
            else{
                $tam='';
            }
            if($tam=='cacloaisanpham'){
                include('modules/content/cacloaisanpham.php');
            }

            if($tam=='chitietsanpham'){
                include('modules/content/chitietsanpham.php');
            }
            if($tam=='cacnhasanxuat'){
                include('modules/content/cacnhasanxuat.php');
            }
            if($tam==''){
                include('modules/content/main.php');
            }
        ?> 
     </div>               
</div>  