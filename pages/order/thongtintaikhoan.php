<?php 
session_start();
$a= $_SESSION['hoten'];
include "connect.php";
$a=$_SESSION['hoten'];
$sql4= "SELECT * FROM taikhoan WHERE taikhoan='".$a."'";
$query4=mysqli_query($mysqli,$sql4);
$row4=mysqli_fetch_array($query4);
$sql5="SELECT * FROM hoadon WHERE taikhoanhoadon='".$a."'";
$query5=mysqli_query($mysqli,$sql5);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tài khoản của <?php echo $_SESSION['hoten'] ?></title>
	<link rel="stylesheet" type ="text/css" href="style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<header>
 <div class="list-header">
 		<div class="listheader" onclick="location.href='../trangchu.php';" ><i class='fas fa-arrow-circle-left' style='font-size:24px'></i>Quay lại trang chủ</div>
 		<div class="listheader" onclick="location.href='order.php';" ><i class='fas fa-arrow-circle-up' style='font-size:24px'></i>Tiếp tục order</div>
 		<div class="listheader" onclick="location.href='../baiviet/tintuc.php';" ><i class='fas fa-arrow-circle-right' style='font-size:24px'></i>Đọc bài viết</div>
 		<form action="thoat.php" method="POST">
 		<input type="submit" name="thoattk" class="listheader" onclick="thoat()" value="Đăng xuất">
 		</form>
 </div>
 <script type="text/javascript">
 	function thoat(){
 	 alert("TEATEAM tạm biệt quý khách");
 	}
 </script>
</header>
<body>
 <div class="chonthongtin">
 	<div class="list1">
 	<div class="list-thongtin"  onclick="location.href='thongtintaikhoan.php?act=thongtin';"  >
 		
 			Thông tin của bạn
 	</div> 		
 	<div class="list-thongtin1" onclick="location.href='thongtintaikhoan.php?act=hoadondangxl';" >
 		Hóa đơn đang xử lý
 	</div>
 	<div class="list-thongtin2" onclick="location.href='thongtintaikhoan.php?act=doimatkhau';" >	
 	Đổi mật khẩu
 	</div>
</div>
 </div>
 <div class="thongtinchon">
 	<?php if(isset($_GET['act'])){

 		$m=$_GET['act'];
 		if ($m=='thongtin'){

 	?>
 		<div class="title-thongtin">
 			Thông tin cá nhân 
 		</div>
 	<?php 
include "connect.php";
$a=$_SESSION['hoten'];
$sql4= "SELECT * FROM taikhoan WHERE taikhoan='".$a."'";
$query4=mysqli_query($mysqli,$sql4);
$row4=mysqli_fetch_array($query4);

 	?>
 	<form method="POST">
<div class="thongtin">
	<p class="thongtin-p"><label class="thongtin-label">Tài khoản</label> <input type="text" class="input-thongtin" name="ten" id="ten" value="<?php echo $row4['taikhoan']; ?>"></p>
	<p class="thongtin-p"><label class="thongtin-label">Số điện thoại</label> <input type="text" class="input-thongtin" name="sdt" id="sdt" value="<?php echo $row4['sdt'] ?>"></p>
	<p class="thongtin-p"><label class="thongtin-label">Địa chỉ hiện tại</label> <input type="text" class="input-thongtin" name="diachi"  id="diachi" value="<?php echo $row4['diachikh'] ?>"></p>
</div>
	<p class="thongtin-p1"><label class="thongtin-label">Giới tính</label><input type="radio" class="radio-name" name="gender" value="Nam"
	<?php if($row4['gioitinh']=='Nam'){ ?> checked <?php } ?>	>Nam<input type="radio" class="radio-name" name="gender" value="Nữ" <?php if($row4['gioitinh']=='Nữ'){ ?> checked <?php } ?>	>Nữ</p>

<div class="action-kh"> 
 	
 	<input type="button" name="" class="button-kh" id="btn-save" value="Save">
 	</form>
 </div>

<?php } 
	else if ($m=='hoadondangxl'){
		?>
		<div class="hoadon-tieude">
			<div class="hoadontieude">Cửa hàng</div>
			<div class="hoadontieude">Thông tin hóa đơn</div>
			<div class="hoadontieude">Tổng tiền</div>
			<div class="hoadontieude">Status</div>
		</div>
<?php 
		while($row5=mysqli_fetch_array($query5)){
?>
		<div class="hoadon-tieude1">
			<div class="thongtinhoadon"><?php echo $row5['cuahang'] ?></div>
			<div class="thongtinhoadon"><?php
			 $m=''; 
			$m.="Tên người nhận:";
			$m.=$row5['tennguoinhan'];
			$m.=",Số điện thoại:";
			$m.=$row5['sdtnguoinhan'];
			$m.="Order:";
			$m.=$row5['listorder'];
			$m.="Phí ship:";
			$m.=$row5['phiship'];
			echo $m;			 ?></div>
			<div class="thongtinhoadon1"><?php echo $row5['tong'] ?></div>
			<div class="thongtinhoadon1"><?php echo $row5['status'] ?></div>
		</div>
		<?php
	}}


else if($m=='doimatkhau'){
?>
	<form method="POST" id="in">
		<div class="thongtin">
	<p class="thongtin-p"><label class="thongtin-label">Mật khẩu cũ</label> <input type="password" class="input-thongtin" name="matkhaucu" id="matkhaucu" value=""></p>
	<p class="thongtin-p"><label class="thongtin-label">Mật khẩu mới</label> <input type="text" class="input-thongtin" name="matkhaucu" id="matkhaumoi" value=""></p>
	<p class="thongtin-p"><label class="thongtin-label">Nhập lại </label> <input type="text" class="input-thongtin" name="matkhaucu" id="matkhaumoi1" value=""></p>
</div>
	<input type="button" name="doimatkhau" id="doimatkhau" class="button-kh1" value="Đổi mật khẩu">
</form>
<script type="text/javascript">
	document.getElementById("doimatkhau").addEventListener("click",load1);
	function load1() {
		var a = "<?php echo $row4['taikhoan'] ?>";
		var t = "<?php echo $row4['matkhau'] ?>";
		var m = $('#matkhaucu').val();
		var e = $('#matkhaumoi').val();
		var n = $('#matkhaumoi1').val();
		if (m=='' || e == '' || n == ''){
			alert("Vui lòng ghi đầy đủ! ");
		}
		else if (t!=m){
			alert("Mật khẩu cũ không đúng!");
		}
		else if(e!=n){
			alert("Mật khẩu mới không trùng khớp!");
		}
		else {
			$.ajax({
				url:"doimatkhau.php",
				method:"POST",
				data:{a:a,t:t,m:m,e:e,n:n},
				success:function(data){
					alert("Đổi mật khẩu thành công!");
					$('#in')[0].reset();
				}
			});
		}
	}
</script>
<?php
}}
else {
	include "connect.php";
$a=$_SESSION['hoten'];
$sql4= "SELECT * FROM taikhoan WHERE taikhoan='".$a."'";
$query4=mysqli_query($mysqli,$sql4);
$row4=mysqli_fetch_array($query4);
 ?>
<form method="POST">
<div class="title-thongtin">
 			Thông tin cá nhân 
 		</div>
<div class="thongtin">
	<p class="thongtin-p"><label class="thongtin-label">Tài khoản</label> <input type="text" class="input-thongtin" name="ten" id="ten" value="<?php echo $row4['taikhoan']; ?>"></p>
	<p class="thongtin-p"><label class="thongtin-label">Số điện thoại</label> <input type="text" class="input-thongtin" name="sdt" id="sdt" value="<?php echo $row4['sdt']; ?>"></p>
	<p class="thongtin-p"><label class="thongtin-label">Địa chỉ hiện tại</label> <input type="text" class="input-thongtin" name="diachi"  id="diachi" value="<?php echo $row4['diachikh'] ?>"></p>
</div>
	<p class="thongtin-p1"><label class="thongtin-label">Giới tính</label><input type="radio" class="radio-name" name="gender" value="Nam"<?php if($row4['gioitinh']=='Nam'){ ?> checked <?php } ?>	 >Nam<input type="radio" class="radio-name" name="gender" value="Nữ" <?php if($row4['gioitinh']=='Nữ'){ ?> checked <?php } ?>	>Nữ</p>

<div class="action-kh"> 
 
 
 	<input type="button" name="" class="button-kh" id="btn-save" value="Save">
 </form>
 	
 </div>
<?php	
}?>
 </div>
 <script type="text/javascript">
 	document.getElementById("btn-save").addEventListener("click",load);
 	function load() {
 		var ten=$('#ten').val();
 		var sdt = $('#sdt').val();
 		var diachi=$('#diachi').val();
 		var gioitinh ='';
 		var check = document.getElementsByName("gender");
                for (var i = 0; i < check.length; i++){
                    if (check[i].checked === true){
                         gioitinh=(check[i].value);
                    }
                    
		}
		if (ten==''||sdt==''||diachi==''||gioitinh==''){
			alert("Vui lòng nhập đầy đủ thông tin!");
			
		}
		else {
			$.ajax({
				url:"xltaikhoan.php",
				method:"POST",
			data:{ten:ten,sdt:sdt,diachi:diachi,gioitinh:gioitinh},
			success:function(data){
				alert("Save thành công");
			}
			});
		}
 	}



 </script>
<script type="text/javascript">
		var m = "<?php echo $_GET['act'] ?>";
if (m=='thongtin'){
document.querySelector('.list-thongtin').style.background='white';
}
else if (m=='hoadondangxl'){
document.querySelector('.list-thongtin1').style.background='white';
}
else {
	document.querySelector('.list-thongtin2').style.background='white';
}


</script>
</body>
</html>