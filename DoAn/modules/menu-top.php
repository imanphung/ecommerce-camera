<?php
    $sql="SELECT * FROM loaisp ORDER BY idSP";   
    $run = mysqli_query($conn,$sql);
?>
<nav id="menu-top">
    <ul>
        <li>
            <a href="index.php"><img src="images/home.jpg"></a>
        </li>
        <li><a>Danh mục sản phẩm</a>
            <ul>
            <?php
            while($dong=mysqli_fetch_array($run)){
            ?>
                <li><a href="index.php?xem=cacloaisanpham&id=<?php echo $dong['idSP']?>&tenloaisp=<?php echo $dong['TenloaiSP']?>"><?php echo $dong['TenloaiSP']?></a></li>
            <?php
            }
            ?>
            </ul>
        </li>
        <li><a>Nhà sản xuất</a>
            <ul>
                <?php
                include('modules/config.php');
                $sql="SELECT * FROM nhasanxuat ORDER BY idnsx";   
                $run = mysqli_query($conn,$sql);
                ?>
                <?php
                while($dong=mysqli_fetch_array($run)){
                ?>
                    <li><a href="index.php?xem=cacnhasanxuat&id=<?php echo $dong['idnsx']?>&tennsx=<?php echo $dong['tennsx']?>"><?php echo $dong['tennsx']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        </ul>
            <div class="search">
            <form name="frmsearch" action="#" method="GET">
                <input name="txtsearch" placeholder="Tìm sản phẩm, nhà sản xuất" class="search-text">
                <input type="submit" value="Tìm kiếm" class="search-btn">  
            </form>
            </div>
        <div class="cart">
            <span class="cart-num">
            <?php 
            $tong=0;
            if(isset($_SESSION['giohang'])){
                $count=count($_SESSION['giohang']);
                for($i=0;$i<$count;$i++){
                    $tong+= $_SESSION['giohang'][$i]["soluong"];
                }
            }
            echo $tong;
            ?></span>
            <a href="index.php?xem=quanlygiohang">
                <img src="images/cart.jpg" width="35" height="35">
            </a>
        </div>
</nav>
