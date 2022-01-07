
<form method="POST">
<p class="order-tieude" > Đá</p>
<div class="loailanh">
				<input type="checkbox" name="da" id="da"  value="0%" checked>
				<label>0%</label>
				<input type="checkbox" id="da" name="da" value="25%" >
				<label>25%</label>
				<input type="checkbox" id="da" name="da" value="50%" >
				<label>50%</label>
				<input type="checkbox" name="da" id="da" value="75%">
				<label>75%</label>
			</div>
			<button id ="gia">click</button>
		</form>
		<script type="text/javascript">
		document.getElementById("gia").addEventListener("click",hehe);
		function hehe(){
			var a = ' ';
 var checkbox = document.getElementsByName("da");
                for (var i = 0; i < checkbox.length; i++){
                    if (checkbox[i].checked === true){
                         a+=(checkbox[i].value);
                    }

		}
			a+=" ádasdasd";
alert(a);

			
		}
</script>