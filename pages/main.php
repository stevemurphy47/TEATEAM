		
		<div id ="main">
			<?php 
		include "order/connect.php";
		$sql=" SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
		$query= mysqli_query($mysqli,$sql);

		
		
			
			$i=0;
			while ($row = mysqli_fetch_array($query)) {
				$a[$i++]= $row['id_danhmuc'];
			 ?>			
			
			 <div class="product">
				<div class="product-img">
					<img src="../admincp/modules/quanlysanpham/hinhanh/<?php echo $row['hinhanh'] ?>">
			
				</div>
				<div class="space"></div>
				<div class="title-product">
					<div class="name-product"> <?php echo $row['tendanhmuc'] ?></div>
					<div class="price-product"> <?php echo $row['giadanhmuc'] ?></div>
				
				<input type="button" name="hinorder" class="btn-one" id="1"  onclick="location.href='order/order.php?id=<?php echo $row['id_danhmuc'] ?>';" value="Đặt liền" >
				</div>
				
			</div>

		<?php  } ?>