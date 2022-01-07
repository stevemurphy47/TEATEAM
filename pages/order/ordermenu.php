<?php


include "connect.php";
	$gia=$_POST['submitorder'];
	$text= $_POST['text'];
	$size = $_POST['size'];
	$ten= $_POST['tenorder'];
	$loai='Loại:'.$_POST['loai'].', Đá:'.$_POST['da'].',Đường:'.$_POST['duong'].',Size:'.$size;
	$kem=$_POST['topping'];
	$giagoc=$gia/$text;
	 $sql_hinhanh="SELECT * FROM danhmuc WHERE tendanhmuc = '".$ten."'";
      $query_hinhanh=mysqli_query($mysqli,$sql_hinhanh);
      $row1=mysqli_fetch_array($query_hinhanh);
        $hinhanh=$row1['hinhanh'];
	$sql="INSERT INTO `datmon` (`id_datmon`, `tenmon`, `loaimon`, `toppingmon`, `soluongmon`, `giamon`, `giagoc`, `hinhanhdatmon`) VALUES (NULL, '".$ten."', '".$loai."', '".$kem."', '".$text."', '".$gia."', '".$giagoc."', '".$hinhanh."')";
	mysqli_query($mysqli,$sql);
		



?>