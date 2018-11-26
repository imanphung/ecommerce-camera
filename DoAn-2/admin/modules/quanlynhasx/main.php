<div class="left">
    <?php 
        if(isset($_GET['ac'])){
            $tam=$_GET['ac'];
        }
        else{
            $tam='';
        }
        if($tam=='them'){
            include('modules/quanlynhasx/them.php');
        }
        if($tam=='sua'){
            include('modules/quanlynhasx/sua.php');
        }
    ?>
</div>
<div class="right">
    <?php
        include('modules/quanlynhasx/lietke.php');
    ?>
</div>