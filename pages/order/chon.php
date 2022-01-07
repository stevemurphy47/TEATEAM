<?php
$a=0;
if (isset($_GET['id'])){

	if($a==0){	
?>

<script type="text/javascript">
			document.getElementById("formtobuy").style.display="flex";
		var id="<?php echo $_GET['id'] ?>";
				$.ajax({
					url: "xlorder1.php",
					method:"POST",
					data:{id:id},
					success:function(data){
					$("#formtobuy").load("order-page.php");		
					refresh();
					}


				});
		
		

	

			
		
</script>
<?php
$a+=1;
} }
?>