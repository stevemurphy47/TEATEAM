<?php
$sql="SELECT * FROM hoadon";
$query= mysqli_query($mysqli,$sql);

?>
<p>Liệt kê danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
    <th>Tên</th>
    <th>Sdt </th>
    <th>Cửa hàng</th>
    <th>List order</th>
    <th>Status</th>
  </tr>
<?php
	$i=0;
	while($row= mysqli_fetch_array($query)){
		$i++;
?>
  <tr>
    <td><?php echo $row['tennguoinhan'] ?></td>
    <td><?php echo $row['sdtnguoinhan'] ?></td>
    <td><?php echo $row['cuahang'] ?></td>
    <td><?php echo $row['listorder'] ?></td>
    <td>
    	<?php if($row['status']=='Đợi xác nhận'){ ?>
    		<a href="modules/quanlysanpham/xoa.php?iddanhmuc=<?php echo $row['idhoadon']?>">Hủy</a>
    		<a href="modules/quanlysanpham/xacnhan.php?iddanhmuc=<?php echo $row['idhoadon']?>">Xác nhận</a>
    	<?php 
    			}
   			else {
    	?>
    		Đã xác nhận
    	<?php } ?>
    </td>
  </tr>
  <?php
}
?>
</table>