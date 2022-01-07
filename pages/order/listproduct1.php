<?php 
		include "../../connect.php";
		$sql=" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
		$query= mysqli_query($mysqli,$sql);

		?>
		<div class="list-product">
			<?php
			$i=0;
			while ($row = mysqli_fetch_array($query)) {
				$a[$i++]= $row['id_danhmuc'];
			 ?>			
			
			 <div class="product">
				<div class="product-img">
					<img src="../../admincp/modules/quanlysanpham/hinhanh/<?php echo $row['hinhanh'] ?>">
			
				</div>
				<div class="space"></div>
				<div class="title-product">
					<div class="name-product"> <?php echo $row['tendanhmuc'] ?></div>
					<div class="price-product"> <?php echo $row['giadanhmuc'] ?></div>
				
				<input type="button" name="hinorder" class="btn-one" id="1" onclick="hehe(<?php echo $row['id_danhmuc'] ?>)" value="Đặt liền" >
				</div>
				
			</div>

		<?php  } ?>
<script type="text/javascript">
		document.getElementById("1").addEventListener("click",hehe);
		function hehe(d){
			

		document.getElementById("formtobuy").style.display="flex";
		var id=d;
				$.ajax({
					url: "xlorder1.php",
					method:"POST",
					data:{id:id},
					success:function(data){
					$("#formtobuy").load("order-page.php");		
					refresh();
					}


				});
		
		

	

			
		}
</script>