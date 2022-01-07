<?php 
include "../../../connect.php";
$m= "Đã xác nhận";
$e = $_GET['iddanhmuc'];
	$sql= "UPDATE `hoadon` SET `status` = '".$m."' WHERE `idhoadon` ='".$e."'";
	$query= mysqli_query($mysqli,$sql);
header("location:http://localhost/admincp/index.php?act=danhmucsanpham&query=hoadon");

?>