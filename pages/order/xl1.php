<?
session_start();
?>
<html>

<body>
<?php
			include "../../connect.php";
if(isset($_POST['login'])){
$username= $_POST['fname'];
	$pass=$_POST['fpass'];
	
$sql="select * from taikhoan where taikhoan='".$username."' and matkhau='".$pass."'";

$query= mysqli_query($mysqli, $sql);
$row= mysqli_fetch_array($query);
	if(!$row){

							header("location:checkdon.php?act=chuanbidangnhap&login=sai");
		
	}

	else if ($row['taikhoan']==$username && $row['matkhau']==$pass){
		if(isset($_POST['fname'])){$_SESSION['hoten']=$username;
		?>
		 <script type="text/javascript">
		 	function my1(){
		 	alert('Đã đăng nhập !');}
		 	setTimeout(my1,300);
		 </script>

		<?php
		
		header("location:checkdon.php?act=on&&user=$username");
		
}
	}
	else if (strcmp($row['taikhoan'],$username)==0 && strcmp($row['matkhau'],$pass)==0) {
		echo "Ádsadsad";
		echo $username;
		echo $pass;
		echo $row['taikhoan'];
		echo $row['matkhau'];
	}
	else {
		header("location:checkdon.php?act=chuanbidangnhap&login=sai");
	}
}
else 
if (isset($_POST['taotk'])){
	if($_POST['name']=='' && $_POST['pass']=='' && $_POST['pass1']=='' && $_POST['sdt']==''){

		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";	
		document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
		document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
		document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
			
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
		$sql="select * from taikhoan where taikhoan='$user'";
		$sql1="select * from taikhoan where sdt='$sdt'";
	$query=mysqli_query($mysqli,$sql);
	$query1=mysqli_query($mysqli,$sql1);
	$row=mysqli_fetch_array($query);
	$row1=mysqli_fetch_array($query1);
	$rong='';
	$u=md5($sdt);
	$a=md5($pass);
	if(!count($row)){
		if(!count($row1)){
			if($pass==$pass1){
				$sql_them= "INSERT INTO taikhoan(taikhoan,matkhau,sdt) VALUE('".$user."','".$pass."','".$sdt."')";
	mysqli_query($mysqli,$sql_them);
					?>
					<script >
						document.getElementById('text').innerHTML = " Đăng ký thành công ";
							document.querySelector('.taotk').style.display='none';
							document.querySelector('.formdangnhap').style.display='flex';
							document.querySelector('.formdangnhap1').style.display='flex';
						
					</script>


					<?php				
			}
			else{
				
				?>
				<script type="text/javascript">
					document.getElementById('ghimk1').innerHTML = " Mật khẩu không khớp! :)";
				</script>

				<?php
					
			}

		}
		else{
			?>
			<script type="text/javascript">
				document.getElementById('ghisdt').innerHTML = "Số điện thoại đã tồn tại";
			</script>
			<?php
		}
	}
	else {
		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = " Tài khoản  đã tồn tại!";
		</script>

		<?php
	}
}
	else {
				?>

		<script type="text/javascript">
				document.getElementById('ghisdt').innerHTML ="Vui lòng ghi số điện thoại! :)";
		</script>
		<?php

	}	

}
	else{

		?>
		<script type="text/javascript">
				document.getElementById('ghimk1').innerHTML ="Vui lòng ghi lại mật khẩu! :)";
		</script>

		<?php
	}
}

		else {
			
				?>
		<script type="text/javascript">
				document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
		</script>

		<?php
		}


}
	else{
	
		?>
		<script type="text/javascript">
			document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";
		</script>
		<?php
	}


	
}
}





	?>
	<?php
		


	?>


	
</body>
</html>