<?php
    $sql="SELECT * FROM loaisp,chitetsp WHERE loaisp.idSP=chitetsp.idloaisp and loaisp.idSP=$_GET[id] ORDER BY loaisp.idSP";
    $run=mysqli_query($conn,$sql);
    $i=0;
<<<<<<< HEAD
    if(isset($_GET['them'])){
        $idsp=$_GET['them'];
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
            $count=count($_SESSION['giohang']);
            $check=false;
            //Tìm sản phẩm trong giỏ hàng sau đó tăng số lượng lên 1
            for($i=0;$i<$count;$i++){
                if($_SESSION['giohang'][$i]["idsp"]==$idsp){
                    $_SESSION['giohang'][$i]["soluong"] +=1;
                    $check=true;
                    break;
                }
            }
            //Nếu chưa có trong giỏ hàng thì chèn vào cuối của giỏ hàng
            if($check==false){
                $_SESSION['giohang'][$count]["idsp"]=$idsp;
                $_SESSION['giohang'][$count]["soluong"]=1;
            }
        }
        else{
            //Tạo mới 1 giỏ hàng
            $_SESSION['giohang']=array();
            $_SESSION['giohang'][0]["idsp"]=$idsp;
            $_SESSION['giohang'][0]["soluong"]=1;
        }
        header('location:index.php?xem=cacloaisanpham&id='.$_GET['id'].'&tenloaisp='.$_GET['tenloaisp']);
    }
=======
>>>>>>> 7e212fcdee06c98f415d70808d723581af5d15e6
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
                <div class="pprice"><?php echo $dong['gia']?> VNĐ</div>
            </a>
            <div class="shopping_cart">
<<<<<<< HEAD
                <a href="index.php?xem=cacloaisanpham&them=<?php echo $dong['idsp']?>&id=<?php echo $_GET['id']?>&tenloaisp=<?php echo $_GET['tenloaisp'];?>">
=======
                <a href="index.php?xem=quanlygiohang&id=<?php echo $dong['idsp']?>">
>>>>>>> 7e212fcdee06c98f415d70808d723581af5d15e6
                    <img src="images/shopping_cart.jpg" width="40" height="40">
                </a>
            </div>
        </div> 
    <?php
    $i++;
    }?>
</div>                      
