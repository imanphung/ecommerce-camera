<?php
if(isset($_GET['page'])){
    $getpage=$_GET['page'];
}
else{
    $getpage = '';
}
if($getpage ==''||$getpage==1){
    $setpage=0;
}
else{
    $setpage=($getpage*10)-10;
}
    $sql="SELECT * FROM loaisp,chitetsp WHERE loaisp.idSP=chitetsp.idloaisp and loaisp.idSP=$_GET[id] ORDER BY loaisp.idSP LIMIT $setpage,10";
    $run=mysqli_query($conn,$sql);
    $i=0;
    if(isset($_GET['them'])){
        $idsp=$_GET['them'];
        $gia=$_GET['gia'];
        $sql="SELECT * FROM chitetsp WHERE idsp=$idsp";
        $run1=mysqli_query($conn,$sql);
        if($run1){
            $dong1=mysqli_fetch_array($run1);
        }
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
            $count=count($_SESSION['giohang']);
            $check=false;
            //Tìm sản phẩm trong giỏ hàng sau đó tăng số lượng lên 1
            for($i=0;$i<$count;$i++){
                if($_SESSION['giohang'][$i]["idsp"]==$idsp){
                    if($_SESSION['giohang'][$i]["soluong"]<$dong1['soluongban']){
                    $_SESSION['giohang'][$i]["soluong"]+=1;
                    }
                
                $check=true;
                break;
                }
            }
            //Nếu chưa có trong giỏ hàng thì chèn vào cuối của giỏ hàng
            if($check==false){
                $_SESSION['giohang'][$count]["idsp"]=$idsp;
                $_SESSION['giohang'][$count]["soluong"]=1;
                $_SESSION['giohang'][$count]["gia"]=$gia;
            }
        }
        else{
            //Tạo mới 1 giỏ hàng
            $_SESSION['giohang']=array();
            $_SESSION['giohang'][0]["idsp"]=$idsp;
            $_SESSION['giohang'][0]["soluong"]=1;
            $_SESSION['giohang'][0]["gia"]=$gia;
        }
        header('location:index.php?xem=cacloaisanpham&id='.$_GET['id'].'&tenloaisp='.$_GET['tenloaisp']);
    }
?>
<div class="sp">
    <p><a href="#"><?php echo $_GET['tenloaisp'];?></a></p>
    <?php
    while ($dong=mysqli_fetch_array($run))
    {
    ?>
        <div class="box">
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong['idsp']?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" class="motionpictures" onmouseover="motionpictures(this,1,<?php echo $i;?>)" onmouseout="motionpictures(this,2,<?php echo $i;?>)">
                <div class="pname" id="<?php echo $i;?>"><?php echo $dong['tensp']?></div>
                <div class="pprice"><?php echo number_format($dong['gia'], 0, ',', '.').'₫' ?></div>   
            </a>
            <div class="shopping_cart">
                <a href="index.php?xem=cacloaisanpham&them=<?php echo $dong['idsp']?>&id=<?php echo $_GET['id']?>&tenloaisp=<?php echo $_GET['tenloaisp'];?>&gia=<?php echo $dong['gia']?>">
                    <img src="images/shopping_cart.jpg" width="40" height="40">
                </a>
            </div>
        </div> 
    <?php
    $i++;
    }?>
</div> 
<div class="page">
        Trang: 
        <?php
            $sql="SELECT * FROM loaisp,chitetsp WHERE loaisp.idSP=chitetsp.idloaisp and loaisp.idSP=$_GET[id] ORDER BY loaisp.idSP";
            $run=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($run);
            $page=ceil($count/10);

        for($a=1;$a<=$page;$a++){
            echo '<a href="index.php?xem=cacloaisanpham&id='.$_GET['id'].'&tenloaisp='.$_GET['tenloaisp'].'&page='.$a.'">'.' '.$a.' '.'</a>';
        }
        ?>
</div>                     
