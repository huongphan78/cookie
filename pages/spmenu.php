<?php
        $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
?>

<div class="menu">
            <ul class="list_menu">
                <li><a href="../index.php">trang chủ</a></li>
                <?php
                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <li><a href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']  ?></a></li>
                <?php
                }
                ?>
                <li><a href="sanpham.php?quanly=giohang">giỏ hàng</a></li>
                <li><a href="sanpham.php?quanly=lienhe">liên hệ</a></li>
            </ul>
        </div>