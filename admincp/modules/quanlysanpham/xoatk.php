<?php 
	include "../../../connect.php";
	$e = $_GET['iddanhmuc'];
$sql="DELETE FROM taikhoan WHERE id='".$e."'";
	$query= mysqli_query($mysqli,$sql);
	header("location:http://localhost/admincp/index.php?act=danhmucsanpham&query=taikhoan");



?>