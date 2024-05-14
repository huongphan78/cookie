<p>chi tiết sản phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]'  LIMIt 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)){

?>
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
    <img width="40%" src="../admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
</div>

<div class="chitiet_sanpham">
    <h3>tên sản phẩm :<?php echo $row_chitiet['tensanpham'] ?></h3>
    <p>mã sp :<?php echo $row_chitiet['masp'] ?></p>
    <p>giá sp :<?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
    <p>số lượng sp :<?php echo $row_chitiet['soluong'] ?></p>
    <p>danh mục sp :<?php echo $row_chitiet['tendanhmuc'] ?></p>
</div>
<?php
}
?>
</div>