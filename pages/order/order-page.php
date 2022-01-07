<?php
	include "connect.php";
		$sql1="SELECT * FROM showproduct where id_show=1";
		$query1=mysqli_query($mysqli,$sql1);
		$row2=mysqli_fetch_array($query1);
		$a=$row2['idPD'];
		$sql_lay="SELECT * FROM danhmuc WHERE id_danhmuc='".$a."' ";
		$query_lay=mysqli_query($mysqli,$sql_lay);
		$row1=mysqli_fetch_array($query_lay);
		$c= $row1['giadanhmuc'];
		

	
	 ?>

		<div class="formtobuy1">
			<script type="text/javascript">
		document.getElementById("tatorder").addEventListener("click",hehe1);
		function hehe1(){
			document.getElementById("formtobuy").style.display="none";
		}
</script>
<form method="POST" class="form-order" >
			<div class="formthongtin">
				<div class="left-formthongtin">
					<div class="login-order" id="tatorder">Xóa</div>
						<img src="../../admincp/modules/quanlysanpham/hinhanh/<?php echo $row1['hinhanh'] ?>">

				</div>

		
				<div class="right-formthongtin">

					<div class="ten-form">

					<input type="text" value="<?php echo $row1['tendanhmuc'] ?>" name="ten-order" class="ten-form" id="ten-order" >

				</div>
					<input type="button" class="btn-mua" value="<?php echo $c ?>" id="gia" class="text" name="submit-order" >
<input type="button" class="btn-mua1" value="Tiếp tục" id="gia1" class="text" name="submit-order" >
					<div class="soluong"> 

					<input type="button" onclick="tru()"  value="-">
					<input type="text" value="1"   id="soluong" class="text">
					<input type="button" onclick="cong()"  value="+">

			</div>

				</div>
<script type="text/javascript">

			function cong(){
				var t=document.getElementById('soluong').value;
				
				var a=document.getElementById('gia').value;
				a=a/t;

				document.getElementById('soluong').value= parseInt(t)+1;
				b=parseInt(t)+1;

				document.getElementById('gia').value= parseInt(a)*parseInt(b);
			}
			function tru(){
				var t=document.getElementById('soluong').value;

				var a=document.getElementById('gia').value;

				a=a/t;
				if (t>1){
				document.getElementById('soluong').value= parseInt(t)-1;

				b=parseInt(t)-1;

				document.getElementById('gia').value= parseInt(a)*parseInt(b);

			}}
		</script>
			</div>
		<div class="topping">
			<p class="order-tieude"> Loại</p>
			<input type="radio" name="loai" value="Nóng" onclick="chonloai()" class="loai" checked="">
				<label>Nóng</label>
				<input type="radio" name="loai" value="Lạnh" onclick="chonloai()" class="loai" >
				<label>Lạnh</label>
				<input type="radio" name="loai" value="Trung hòa" onclick="chonloai()" class="loai">
				<label>Trung hòa</label>
		
			<p class="order-tieude"> Đường</p>
			<input type="radio" name="duong" value="0%" checked>
				<label>0%</label>
				<input type="radio" name="duong" value="25%" >
				<label>25%</label>
				<input type="radio" name="duong" value="50%">
				<label>50%</label>

			<p class="order-tieude" > Đá</p>
<div class="loailanh">
				<input type="radio" name="da"  value="0%" checked>
				<label>0%</label>
				<input type="radio" name="da" value="25%" >
				<label>25%</label>
				<input type="radio" name="da" value="50%" >
				<label>50%</label>
				<input type="radio" name="da" value="75%">
				<label>75%</label>
			</div>
				<p class="order-tieude">Size</p>
				<p>
					<input type="radio" name="size" value="nhỏ"  class="size" checked="">
				<label>Nhỏ</label>
				<input type="radio" name="size" value="lớn"  class="size">
				<label>Lớn</label>
				</p>
			<p class="order-tieude">Topping</p>
			<p><input type="checkbox"  id="kem" onclick="func()" class="chontopping" value="9000" name="topping">
				<label>Kem Machiato</label>
				<label class="price-topping">+9.000đ</label>
			</p>
			<p class="topping">
				<input type="checkbox" onclick="func1()"  class="chontoping" id ="tranchau" value="10000" name="topping">
				<label>Trân châu to như chân trâu trắng</label>
				<label class="price-topping">+10.000</label>
			</p>
			<p class="topping">	<input type="checkbox"  class="chontoping1" onclick="func2()" id="flan" value="5000" name="topping">
				<label>Bánh flan</label>
				<label class="price-topping">+5.000</label>
			</p>
			<p class="topping">	<input type="checkbox" onclick="func3()" class="chontoping2" id="phomai" value="5000" name="topping">
				<label>Thạch phô mai</label>
				<label class="price-topping">+5.000đ</label>
			</p>	
		</div>

		</form>
<script type="text/javascript">
		document.getElementById("gia").addEventListener("click",hehe1);
		document.getElementById("gia1").addEventListener("click",hehe1);
		function hehe1(){
			
	document.getElementById("formtobuy").style.display="none";
		var submitorder=$('#gia').val();
		var text=$('#soluong').val();
		var tenorder= $('#ten-order').val();

		var check = document.getElementsByName("da");
                for (var i = 0; i < check.length; i++){
                    if (check[i].checked === true){
                        var da=(check[i].value);
                    }
		}
		var check1 = document.getElementsByName("loai");
                for (var i = 0; i < check1.length; i++){
                    if (check1[i].checked === true){
                        var loai=(check1[i].value);
                    }
		}
		var check2 = document.getElementsByName("duong");
                for (var i = 0; i < check2.length; i++){
                    if (check2[i].checked === true){
                        var duong=(check2[i].value);
                    }
		}
		var check3 = document.getElementsByName("size");
                for (var i = 0; i < check3.length; i++){
                    if (check3[i].checked === true){
                        var size=(check3[i].value);
                    }
		}
		var topping = ' ';
 var checkbox = document.getElementsByName("topping");
                for (var i = 0; i < checkbox.length; i++){
                    if (checkbox[i].checked === true){
                        if(i==0){
                         topping+='Kem Machiato,';
                        }
                         if(i==1){
                         topping+='Trân châu to như chân trâu,';
                        }
                         if(i==2){
                         topping+='Bánh flan,';
                        }
                         if(i==3){
                         topping+='Thạch phô mai,';
                        }
                    }

		}

		


				$.ajax({
					url: "ordermenu.php",
					method:"POST",
					data:{submitorder:submitorder,text:text,tenorder:tenorder,da:da,loai:loai,duong:duong,size:size,topping:topping},
					success:function(data){
				$("#menu").load("menuorder.php");		
					refresh();		


}
				});
		
		

	

			
		}
</script>
<script type="text/javascript">
		function chonloai(){
				var c = document.getElementsByClassName('loai');

		if(c[0].checked){

			document.querySelector('.loailanh').style.display='none';

		}
		if(!c[0].checked){
		document.querySelector('.loailanh').style.display='block';
		}

		}


</script>






<script type="text/javascript">
	function func()
	{
		var c = document.getElementsByClassName('chontopping');

		if(c[0].checked)
		{
				var a= document.getElementById('kem').value;

				var t=document.getElementById('gia').value;

				var d=document.getElementById('soluong').value;

				document.getElementById('gia').value= parseInt(t) + parseInt(a)*parseInt(d);
		}
		if(!c[0].checked){
			var b= document.getElementById('kem').value;

				var d=document.getElementById('gia').value;

				var e=document.getElementById('soluong').value;

				document.getElementById('gia').value= parseInt(d) - parseInt(b)*parseInt(e);

		}
		
}
	


</script>

		<script type="text/javascript">
			function func1(){
				var d = document.getElementsByClassName('chontoping');
				if(d[0].checked)
		{
				var a= document.getElementById('tranchau').value;
				var e=document.getElementById('soluong').value;

				var t=document.getElementById('gia').value;

				document.getElementById('gia').value= parseInt(t) + parseInt(a)*parseInt(e);
		}
		if(!d[0].checked){
			var b= document.getElementById('tranchau').value;

				var t=document.getElementById('gia').value;
var f=document.getElementById('soluong').value;
				document.getElementById('gia').value= parseInt(t) - parseInt(b)*parseInt(f);

		}
	}

		</script>
<script type="text/javascript">
			function func2(){
				var d = document.getElementsByClassName('chontoping1');
				if(d[0].checked)
		{
				var a= document.getElementById('flan').value;
				var e=document.getElementById('soluong').value;
				var t=document.getElementById('gia').value;

				document.getElementById('gia').value= parseInt(t) + parseInt(a)*parseInt(e);
		}
		if(!d[0].checked){
			var b= document.getElementById('flan').value;

				var t=document.getElementById('gia').value;
	var f=document.getElementById('soluong').value;
				document.getElementById('gia').value= parseInt(t) - parseInt(b)*parseInt(f);

		}
	}

		</script>
<script type="text/javascript">
			function func3(){
				var d = document.getElementsByClassName('chontoping2');
				if(d[0].checked)
		{
				var a= document.getElementById('phomai').value;
					var e=document.getElementById('soluong').value;
				var t=document.getElementById('gia').value;

				document.getElementById('gia').value= parseInt(t) + parseInt(a)*parseInt(e);
		}
		if(!d[0].checked){
			var b= document.getElementById('phomai').value;

				var t=document.getElementById('gia').value;
	var f=document.getElementById('soluong').value;
				document.getElementById('gia').value= parseInt(t) - parseInt(b)*parseInt(f);

		}
	}

		</script>


