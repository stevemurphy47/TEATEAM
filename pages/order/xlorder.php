<?php 
include "connect.php";

						
 if (isset($_POST['iddatmon'])){
		$a = $_POST['iddatmon'] ;
		$sql_que= "SELECT * FROM datmon WHERE id_datmon='".$a."'";
		$query_giam1=mysqli_query($mysqli,$sql_que);
		$row=mysqli_fetch_array($query_giam1);
		$b = $row['soluongmon'] -1;
		
		if ($b!=0){
			$c = $row['giagoc'];
		$d = $b*$c;
		$sql_giam=" UPDATE datmon SET soluongmon= '".$b."',giamon='".$d."' where id_datmon='".$a."' ";
			$query_giam= mysqli_query($mysqli,$sql_giam);
			
	}
		else if ($b==0) {
			$sql_xoa= " DELETE FROM datmon WHERE id_datmon='".$a."' ";
			$queru= mysqli_query($mysqli,$sql_xoa);
		}
}
if (isset($_POST['iddatmon1'])){
		$a = $_POST['iddatmon1'] ;
		$sql_que= "SELECT * FROM datmon WHERE id_datmon='".$a."'";
		$query_giam1=mysqli_query($mysqli,$sql_que);
		$row=mysqli_fetch_array($query_giam1);
		$b = $row['soluongmon'] +1;
			$c = $row['giagoc'];
		$d = $b*$c;
		$sql_giam=" UPDATE datmon SET soluongmon= '".$b."',giamon='".$d."' where id_datmon='".$a."' ";
			$query_giam= mysqli_query($mysqli,$sql_giam);
			
	
}
if (isset($_POST['idd'])){
	$sql_all= " DELETE FROM datmon";
	$que=mysqli_query($mysqli,$sql_all);
}
?>	