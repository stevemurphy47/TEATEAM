<?php 
session_start();
	include "connect.php";

	if(isset($_POST['ten'])){
		$ten1= $_SESSION['hoten'];
		$ten=$_POST['ten'];
		$sdt=$_POST['sdt'];
		$diachi=$_POST['diachi'];
		$gioitinh=$_POST['gioitinh'];
		$sql5="UPDATE `taikhoan` SET `taikhoan` = '".$ten."', `sdt` = '".$sdt."', `diachikh` = '".$diachi."', `gioitinh` = '".$gioitinh."' WHERE `taikhoan` ='".$ten1."'";
		$query5= mysqli_query($mysqli,$sql5);
		$_SESSION['hoten']=$ten;
	}




?>