<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>

<h3>danh mục món ăn :<?php echo $row_title['tendanhmuc'] ?> </h3>
<ul class="product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="">
                <img src="../admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                <p class="title_product">Tên món : <?php echo $row_pro['tensanpham'] ?></p>
                <p class="price_product">giá: <?php echo number_format($row_pro['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
