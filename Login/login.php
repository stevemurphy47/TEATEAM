<html>
<body>
<div id ="ri">
<form action = "/1.php" method ="post">
	<p>
		<label bgcolor = "#777777">Tên đăng nhập:</label> 
		<input type="text" id="fname" name="fname"/>
	</p>
	<p>	
		<label>Mật khẩu :</label> 
		<input type="password"  id ="fpass" name="fpass"/>
</p>
	<p>
		<button type="submit"  id ="btn" value="login"> Đăng nhập </button>
		</p>
		<?php
			if (isset($_POST['submit'])){
			include '2.php';
$username= $_POST['fname'];
	$pass=$_POST['fpass'];
	
$sql="select * from taikhoan where taikhoan='$username' and matkhau='$pass'";

$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);

	if ($row['taikhoan']==$username){

		echo "dang nhap thanh cong";
	}
	else {
		echo "dang nhap that bai";
	}

			}
		?>

	</form>
</div>
</body>
<html>