
<?php
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
    $query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>
<p> sửa bài viết </p>
<table border="1" width="80" style="border-collapse:collapse;" >
<?php
while ($row= mysqli_fetch_array($query_sua_bv)) {
?>
<form method="post" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data"> 
<tr>
    <td>Tên bài viết</td>
    <td><input type="text" value="<?php echo $row['tenbaiviet']?>" name="tenbaiviet"></td>
  </tr>
  <tr>
    <td>hình ảnh</td>
    <td><input type="file" name="hinhanh">
    <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"> 
  </td>
  </tr>
  <tr>
    <td>tóm tắt</td>
    <td><textarea rows="10" cols="20"  name="tomtat"> <?php echo $row['tomtat'] ?> </textarea></td>
  </tr>
  <tr>
    <td>nội dung</td>
    <td><textarea rows="10" cols="20" name="noidung"> <?php echo $row['noidung'] ?> </textarea></td>
  </tr>
  <tr>
    <td>danh mục bài viết</td>
    <td>
      <select name="danhmuc" >
        <?php
        $sql_danhmuc="SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
        $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)) {
          if($row_danhmuc['id_baiviet'] == $row['id_danhmuc']){
        ?>
        <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>" ><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?> </option>
        <?php
          } else {
        ?>
        <option value="<?php echo $row_danhmuc['id_baiviet'] ?>" ><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?> </option>
        <?php  
          }
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="tinhtrang" >
        <?php
        if ($row['tinhtrang'] == 1) {
        ?>
        <option value="1" selected>Kích hoạt</option>
        <option value="0" >ẩn</option>
        <?php
        }else { 
        ?>
        <option value="1" >Kích hoạt</option>
        <option value="0" selected>ẩn</option>

        <?php
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"> <input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
  </tr>
</form>
<?php
}
?>  
  
</table>