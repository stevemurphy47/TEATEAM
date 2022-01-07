
<?php
session_start();

include "connect.php";
?>

<html>
<head>
<link rel="stylesheet" type ="text/css" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<header class="sroll" >
		<div class="icon" onclick="location.href='../trangchu.php';"> <p> TEATEAM</p></div>
		<div class="find">
			<form action="order.php" method="GET">
			<input type="text" name="find" placeholder="Tìm kiếm sản phẩm" class="find-c">
				</form>
		</div>
		<?php 
		if (isset($_GET['user']) ){
			$_SESSION['hoten']=$_GET['user'];
		}
		if (isset($_SESSION['hoten'])){
		 ?>
		 <form action="thoat.php" method="POST">
		 <p class="">

		 	<?php
			echo "Tài khoản: "?><i class='fas fa-address-book' style='font-size:24px'></i> <a href="thongtintaikhoan.php" class="taikhoan"><?php echo $_SESSION['hoten'] ?> </a> 	
			
				<button type="submit" name="xoa" onclick="dangxuat()" class="button">Log out</button>

			</p>
		</form>
			<?php

					}

					

		else { ?>
		<div class="login1"  id="sub"> 
			Đăng nhập
</div>
	<?php } 
	?>
</header>


<script type="text/javascript">

</script>

<body id="body">
		<div class="content">
		


	


		<?php include "listproduct.php"; ?>

<script type="text/javascript">

		</script>
		
		
			



		</div>
		

		<div class="menu" id="menu">
<?php include"menuorder.php"; ?>
			
</div>

<div class="formdangnhap">
	<div class="formdangnhap1">
		<img src="../../img/anhdaidien.jpg">
		<div class="login"  id="unsub">Đóng</div>

<form id="form-login" action="xl.php" method="POST">
		
		<p>
		
		<label>Tài khoản:</label> 
		<input type="text" id="fname" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" />
		</p>	
		<p>
		<label>Mật khẩu :</label> 
		<input type="password"  id ="fpass" name="fpass" value="<?php if(isset($_POST['fpass'])){echo $_POST['fpass'];}?>" />
</p>
		<p>
		<button type="submit" name="login" id ="btn"> Đăng nhập </button>
		</form>	

		<div id="button">
		<button type="submit" id="btn-quenmk" > Quên mật khẩu</button>
		<button type="submit" id="btn-taotk" > Tạo tài khoản</button>
		</p>
	</div>

		
</div>
<div class="taotk" >
	<h3 id="text">Đăng ký để kịp giờ ăn</h3>
	<div class="login"  id="unsubtaotk">Đóng</div>
	<form class="formtaotk" action="order.php" method="POST" id="myform">
		
		<p>
		<input type="text" id="fname" name="name" placeholder="Tài khoản"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" />
		</p>
		<span id="ghitk"></span>	
			
		<p>
		<input type="password"   name="pass" placeholder="Mật khẩu" value="<?php  if(isset($_POST['pass'])){ echo $_POST['pass'];} ?>"/>
</p>
		<span id="ghimk"></span>
		<p>
		<input type="password"   name="pass1" placeholder="Nhập lại mật khẩu" value="<?php if(isset($_POST['pass1'])){echo $_POST['pass1'];}
		?>"/>
</p>
		<span id="ghimk1"></span>
		<p>
			<input type="text" name="sdt" placeholder="Số điện thoại" value="<?php if(isset($_POST['sdt'])){ echo $_POST['sdt'];}?>"/>
		</p>
		<span id="ghisdt"></span>
		
			<button type="submit" name="taotk" id="tao"  >Tạo tài khoản</button>
		
		
		</form>	

</div>



</div>
<?php
include "../../connect.php";
if (isset($_POST['taotk'])){
	if($_POST['name']=='' && $_POST['pass']=='' && $_POST['pass1']=='' && $_POST['sdt']==''){

		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";	
		document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
		document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
		document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
		document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
			
		</script>
		<?php

	}
	else{
	if($_POST['name']!=''){
		if($_POST['pass']!=''){
			if($_POST['pass1']!=''){
				if($_POST['sdt']!=''){
	$user=$_POST['name'];
	$pass=$_POST['pass'];
	$pass1=$_POST['pass1'];
	$sdt=$_POST['sdt'];
		$sql="select * from taikhoan where taikhoan='".$user."'";
		$sql1="select * from taikhoan where sdt='".$sdt."'";
	$query=mysqli_query($mysqli,$sql);
	$query1=mysqli_query($mysqli,$sql1);
	$row=mysqli_fetch_array($query);
	$row1=mysqli_fetch_array($query1);
	$rong='';
	$u=md5($sdt);
	$a=md5($pass);
	if(!$row){
		if(!$row1){
			if($pass==$pass1){
				$sql_them= "INSERT INTO taikhoan(taikhoan,matkhau,sdt) VALUE('".$user."','".$pass."','".$sdt."')";
	mysqli_query($mysqli,$sql_them);
					?>
					<script >
						document.getElementById('text').innerHTML = " Đăng ký thành công ";
						function myfunction(){
							alert("Đăng ký thành công");
								document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='flex';
		document.querySelector('.taotk').style.display='none';
		document.getElementById('body').style.overflow= 'hidden';
							

						}
						setTimeout(myfunction,300);
						
					</script>


					<?php						
					$_POST['name'] ='';			
			}
			else{
				
				?>
				<script type="text/javascript">
					document.getElementById('ghimk1').innerHTML = " Mật khẩu không khớp! :)";
					document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
				</script>

				<?php
					
			}

		}
		else{
			?>
			<script type="text/javascript">
				document.getElementById('ghisdt').innerHTML = "Số điện thoại đã tồn tại";
				document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
			</script>
			<?php
		}
	}
	else {
		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = " Tài khoản  đã tồn tại!";
			document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';

		</script>

		<?php
	}
}
	else {
				?>

		<script type="text/javascript">
				document.getElementById('ghisdt').innerHTML ="Vui lòng ghi số điện thoại! :)";
				document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
		</script>
		<?php

	}	

}
	else{

		?>
		<script type="text/javascript">
				document.getElementById('ghimk1').innerHTML ="Vui lòng ghi lại mật khẩu! :)";
				document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
		</script>

		<?php
	}
}

		else {
			
				?>
		<script type="text/javascript">
				document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
				document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
		</script>

		<?php
		}


}
	else{
	
		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";
				document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
		</script>
		<?php
	}


	
}
}
?>


<div class="formtobuy" id="formtobuy" >
	<?php 
		include "chon.php";
?>
		

</div>

</body>
<script type="text/javascript">

	document.getElementById('sub').addEventListener('click',function(){
		document.querySelector('.formdangnhap').style.display='flex';
		document.getElementById('body').style.overflow='hidden';

	});
	document.getElementById('unsub').addEventListener('click',function(){
		document.querySelector('.formdangnhap').style.display='none';
		document.getElementById('body').style.overflow='scroll';
		
		
	});
	function dangxuat(){
			alert("TEATEAM tạm biệt quý khách");
	}
	
</script>
<script type="text/javascript">
	document.getElementById('btn-taotk').addEventListener('click',function(){
		document.querySelector('.taotk').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';


	});
	document.getElementById('unsubtaotk').addEventListener('click',function(){
		document.querySelector('.taotk').style.display='none';
		document.querySelector('.formdangnhap1').style.display='flex';	
	});

</script>

<script type="text/javascript">
	var m= "<?php echo $_GET['act']?>";
	var e="<?php echo $_GET['login'] ?>";
	if (m=='dienthongtin'){
		document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";
	}
	else if(m=='dienmk'){
		document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
	}
	else if(m=='dienmk1'){
		document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
	}
	else if (m=='diensdt'){
		document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
	}
	else if (m=='diendaydu'){
		document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";	
		document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
		document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
		document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
	}
	else if (m=='dangdangky'){
		document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='none';
		document.querySelector('.taotk').style.display='flex';
		document.getElementById('body').style.overflow= 'hidden';
	}
	else if(m=='chuanbidangnhap' && e=='sai'){
		function my(){
		alert('Tài khoản hay mật khẩu không đúng!');}
		document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='flex';
		document.querySelector('.taotk').style.display='none';
		document.getElementById('body').style.overflow= 'hidden';
		setTimeout(my,300);
	}
	else if(m=='chuanbidangnhap'){
		document.querySelector('.formdangnhap').style.display='flex';
		document.querySelector('.formdangnhap1').style.display='flex';
		document.querySelector('.taotk').style.display='none';
		document.getElementById('body').style.overflow= 'hidden';
	}
	else if(m=='order'){
		document.getElementById('body').style.overflow= 'hidden';
	}
</script>
