<?php
	include "../../../connect.php";
	$e = $_GET['iddanhmuc'];
	$m='1';
	$sql= "UPDATE `taikhoan` SET `matkhau` = '".$m."' WHERE `id` ='".$e."'";
	$query= mysqli_query($mysqli,$sql);
header("location:http://localhost/admincp/index.php?act=danhmucsanpham&query=taikhoan");



?>