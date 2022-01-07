<?php
	include "../../connect.php";

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		mysqli_query($mysqli,"UPDATE showproduct SET idPD = '".$id."' WHERE id_show = 1");
	}


?>