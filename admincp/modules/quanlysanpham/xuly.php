<?php
include("../../../connect.php");
$tensp = $_POST['ten'];
$giasp = $_POST['gia'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh= time().'_'.$hinhanh;
if (isset($_POST['themdanhmuc'])){
	$sql_them= "INSERT INTO danhmuc(tendanhmuc,giadanhmuc,hinhanh) VALUE('".$tensp."','".$giasp."','".$hinhanh."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'hinhanh/'.$hinhanh);
	header("location:../../index.php?act=danhmucsanpham&query=them");
}else if (isset($_POST['suadanhmuc'])){
	$sql_sua= "UPDATE danhmuc SET tendanhmuc='".$tensp."',giadanhmuc='".$giasp."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_sua);
	header("location:../../index.php?act=danhmucsanpham&query=them");
}


else {
	$id=$_GET['iddanhmuc'];
	$sql_xoa=" DELETE FROM danhmuc where id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
header("location:../../index.php?act=danhmucsanpham&query=them");
}




?>