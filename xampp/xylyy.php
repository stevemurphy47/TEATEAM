<?php


include "../connect.php";

	$gia=$_POST['submit-order'];
	$text= $_POST['text'];
	$size = $_POST['size'];
	$ten= $_POST['ten-order'];
	$loai='Loại:'.$_POST['loai'].', Đá:'.$_POST['da'].',Đường:'.$_POST['duong'].',Size:'.$size;
	$kem='';
	$giagoc=$gia/$text;
	if(isset($_POST['kem'])){
		$kem=' Kem machiato ,';
	}
		if(isset($_POST['phomai'])){
		$kem.='Thạch phô mai ,';
	}
		if(isset($_POST['flan'])){
		$kem.='Bánh flan ,';
	}
		if(isset($_POST['tranchau'])){
		$kem.=' Trân châu to như chân trâu ,';
	}
	if (isset($_POST['submit-order'])){
	$sql="INSERT INTO `datmon` (`id_datmon`, `tenmon`, `loaimon`, `toppingmon`, `soluongmon`, `giamon`, `giagoc`) VALUES (NULL, '".$ten."', '".$loai."', '".$kem."', '".$text."', '".$gia."', '".$giagoc."')";
	mysqli_query($mysqli,$sql);
	
	header("location:tesst.php");
	

}

?>