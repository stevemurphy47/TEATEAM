<?php
	include "connect.php";

	if (isset($_POST['a'])){
		$a=$_POST['a'];
		$t=$_POST['t'];
		$m=$_POST['m'];
		$e=$_POST['e'];
		$n=$_POST['n'];
		$sql5="UPDATE `taikhoan` SET `matkhau` = '".$n."' WHERE `taikhoan` ='".$a."'";
		$query4=mysqli_query($mysqli,$sql5);
	}


?>