<?php
	include "connect.php";
		$sql_lietke= "SELECT * FROM datmon ";
		$query_lietke= mysqli_query($mysqli,$sql_lietke);
?>
			<div class="tieudehoadon">
				<div class="tieudehoadon1">
					<p class="tieudehoadon-1">Nước uống order của tôi</p>
		<form method="POST">	
			<input type="button" name="submit1" id="btn-xoaall" value="Xóa hết" class="btn-xoaorder">
		</form>
		<script type="text/javascript">
			document.getElementById("btn-xoaall").addEventListener("click",xoaall);
		function xoaall(){
		var idd=1;
				$.ajax({
					url: "xlorder.php",
					method:"POST",
					data:{idd:idd},
					success:function(data){
		$("#menu").load("menuorder.php");		
					refresh();
					} 


				});
		}
		</script>
				</div>
			</div>
			<div class="danhsachorder">
<?php
	while($row=mysqli_fetch_array($query_lietke)){
?>
	<form method="POST"  >
				<div class="product-order">
					<div class="thongtin-order">
						<p> <?php echo $row['tenmon'] ?></p>
						<p> <?php echo $row['loaimon'] ?> </p>
						<p> <?php echo $row['toppingmon'] ?></p>
						<p> <?php echo number_format($row['giagoc']) ?> đ x <?php echo $row['soluongmon'] ?> = <?php echo number_format($row['giamon']) ?>đ</p>
					
				</div>
				<div class="btn-soluong">
					<input type="button" name="tanggiam" id="tangiam" onclick="soluong(<?php echo $row['id_datmon'] ?>)" value="-">
					<input type="text" value="<?php echo $row['soluongmon'] ?>" name="text"  id="text" class="text">
					<input type="button" name="tanggiam1" id="tangiam1"  onclick="soluong1(<?php echo $row['id_datmon'] ?>)" value="+">
			</div>
			</div>
		</form>
<script type="text/javascript">
		function soluong(d){
		var iddatmon=d;
				$.ajax({
					url: "xlorder.php",
					method:"POST",
					data:{iddatmon:iddatmon},
					success:function(data){
						$("#menu").load("menuorder.php");		
					refresh();
					} 


				});
		
		

	

			
		}
</script>
<script type="text/javascript">
		function soluong1(d){
		var iddatmon1=d;
				$.ajax({
					url: "xlorder.php",
					method:"POST",
					data:{iddatmon1:iddatmon1},
					success:function(data){
				$("#menu").load("menuorder.php");		
					refresh();
					} 


				});
		
		

	

			
		}
</script>
<?php }?>
		

				</div>
			<div class="footer-order">
					<?php 
					$sql_lietke= "SELECT * FROM datmon ";
		$query_lietke= mysqli_query($mysqli,$sql_lietke);
					$row= mysqli_fetch_array($query_lietke);
						if ($row){
						?>
						<button name="thanhtoan" id="thanhtoan" class="btn-thanhtoan" onclick="Thanhtoan()"  >Thanh toán </button>
					<?php } ?>


			</div>
<script type="text/javascript">
	function Thanhtoan() {
		
			location.assign("checkdon.php");
		
		
	}
</script>
<?php 


?>			
<script type="text/javascript">
</script>
			</div>
				
		</div>