
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type ="text/css" href="css/style.css">
	<title>Admin</title>
</head>
<body>
	<h3 class="title_admincp">
		Welcome to ADMINCP
	</h3>
	<div class =" wrapper">
	<?php
			include("../connect.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
		?>
	</div>
</body> 
</html>
