<?php
	$sql_lietke = " SELECT * FROM taikhoan";
	$query_lietke= mysqli_query($mysqli,$sql_lietke);
?>



<p>Liệt kê danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
    <th>Tài khoản</th>
    <th>Mật khẩu </th>
    <th>Sdt</th>
    <th>Địa chỉ</th>
    <th>Giới tính</th>
    <th>Status</th>
  </tr>
<?php
	$i=0;
	while($row= mysqli_fetch_array($query_lietke)){
		$i++;
?>
  <tr>
    <td><?php echo $row['taikhoan'] ?></td>
    <td><?php echo $row['matkhau'] ?></td>
    <td><?php echo $row['sdt'] ?></td>
    <td><?php echo $row['diachikh'] ?></td>
    <td><?php echo $row['gioitinh'] ?></td>
    <td>
    		<a href="modules/quanlysanpham/xoatk.php?iddanhmuc=<?php echo $row['id']?>">Xóa</a>|
    		<a href="modules/quanlysanpham/suatk.php?iddanhmuc=<?php echo $row['id']?>">Sửa</a>
    </td>
  </tr>
  <?php
}
?>
</table>