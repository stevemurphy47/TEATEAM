<div class="clear"></div>
<div class ="main">
	<?php
						if (isset($_GET['act']) && $_GET['query']){
							$tam=$_GET['act'];
							$query=$_GET['query'];
						}
						else {
							$tam='';
							$query='';
						}
						if ($tam=='danhmucsanpham' && $query=='them'){
						include ("modules/quanlysanpham/them.php");
						include ("modules/quanlysanpham/lietke.php");
						}else if ($tam=='quanlysanpham' && $query=='sua'){
							include("modules/quanlysanpham/sua.php");
						}
						else if ($tam=='danhmucsanpham' && $query=='hoadon'){
							include("quanlysanpham/quanlyhoadon.php");
						}
						else if ($tam=='danhmucsanpham' && $query=='taikhoan'){
							include("quanlysanpham/quanlytaikhoan.php");
						}
						
						else {
							include("dasboard.php");
						}
					?>
</div>