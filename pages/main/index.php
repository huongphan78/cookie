<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIt 25";
$query_pro = mysqli_query($mysqli, $sql_pro);


?>
<h3>sản phẩm mới nhẩt</h3>
               <ul class="product_list">
                <?php
                while ($row = mysqli_fetch_assoc($query_pro)){
                ?>
                     <li>
                        <a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                            <img src="../admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                            <p class="title_product">Tên món : <?php echo $row['tensanpham'] ?></p>
                            <p class="price_product">giá: <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
                            <p style="text-align:center;color:#d1d1d1 "><?php echo $row['tendanhmuc'] ?></p>

                        </a>
                     </li>
                  <?php 
                } 
                  ?>
               </ul>