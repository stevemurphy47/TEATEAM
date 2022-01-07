<?php
session_start();

include "connect.php";
?>

<html>
<head>
<link rel="stylesheet" type ="text/css" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Green Ido | @greenido | plus.google.com/+greenido">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <meta name="description" content="Geo - Calculate the distance">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<header class="sroll" >
		<div class="icon" onclick="location.href='../trangchu.php';"> <p>TEATEAM</p></div>
		<div class="find">
			<form action="order.php" method="GET">
			<input type="text" name="find" placeholder="Tìm kiếm sản phẩm" class="find-c">
				</form>
		</div>
		<?php 
		if (isset($_GET['user'])){
			$_SESSION['hoten']=$_GET['user'];
			
		}
		else {
			$action='';
		}
		if (isset($_SESSION['hoten'])){
		 ?>
		 <form action="thoat.php" method="POST">
		 <p class="">

		 	<?php
		echo "Xin chao " ?><i class='fas fa-address-book' style='font-size:24px'></i> <a href="thongtintaikhoan.php" ><?php echo $_SESSION['hoten'] ?> </a>   
			
				<button type="submit" name="xoa" onclick="dangxuat()" class="button">Log out</button>

			</p>
		</form>
			<?php

					}

		else { ?>
		<div class="login1"  id="sub"> 
			Đăng nhập
</div>
	<?php } ?>
</header>
<body>
<div class="formdangnhap">
  <div class="formdangnhap1">
    <img src="../../img/anhdaidien.jpg">
    <div class="login"  id="unsub">Đóng</div>

<form id="form-login" action="xl1.php" method="POST">
    
    <p>
    
    <label>Tài khoản:</label> 
    <input type="text" id="fname" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" />
    </p>  
    <p>
    <label>Mật khẩu :</label> 
    <input type="password"  id ="fpass" name="fpass" value="<?php if(isset($_POST['fpass'])){echo $_POST['fpass'];}?>" />
</p>
    <p>
    <button type="submit" name="login" id ="btn"> Đăng nhập </button>
    </form> 

    <div id="button">
    <button type="submit" id="btn-quenmk" > Quên mật khẩu</button>
    <button type="submit" id="btn-taotk" > Tạo tài khoản</button>
    </p>
  </div>

    
</div>
<div class="taotk" >
  <h3 id="text">Đăng ký để kịp giờ ăn</h3>
  <div class="login"  id="unsubtaotk">Đóng</div>
  <form class="formtaotk" action="checkdon.php" method="POST" id="myform">
    
    <p>
    <input type="text" id="fname" name="name" placeholder="Tài khoản"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" />
    </p>
    <span id="ghitk"></span>  
      
    <p>
    <input type="password"   name="pass" placeholder="Mật khẩu" value="<?php  if(isset($_POST['pass'])){ echo $_POST['pass'];} ?>"/>
</p>
    <span id="ghimk"></span>
    <p>
    <input type="password"   name="pass1" placeholder="Nhập lại mật khẩu" value="<?php if(isset($_POST['pass1'])){echo $_POST['pass1'];}
    ?>"/>
</p>
    <span id="ghimk1"></span>
    <p>
      <input type="text" name="sdt" placeholder="Số điện thoại" value="<?php if(isset($_POST['sdt'])){ echo $_POST['sdt'];}?>"/>
    </p>
    <span id="ghisdt"></span>
    
      <button type="submit" name="taotk" id="tao"  >Tạo tài khoản</button>
    
    
    </form> 

</div>



</div>
<?php
include "../../connect.php";
if (isset($_POST['taotk'])){
  if($_POST['name']=='' && $_POST['pass']=='' && $_POST['pass1']=='' && $_POST['sdt']==''){

    ?>
    <script type="text/javascript">
      document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";  
    document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
    document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
    document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
    document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
      
    </script>
    <?php

  }
  else{
  if($_POST['name']!=''){
    if($_POST['pass']!=''){
      if($_POST['pass1']!=''){
        if($_POST['sdt']!=''){
  $user=$_POST['name'];
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
  $sdt=$_POST['sdt'];
    $sql="select * from taikhoan where taikhoan='".$user."'";
    $sql1="select * from taikhoan where sdt='".$sdt."'";
  $query=mysqli_query($mysqli,$sql);
  $query1=mysqli_query($mysqli,$sql1);
  $row=mysqli_fetch_array($query);
  $row1=mysqli_fetch_array($query1);
  $rong='';
  $u=md5($sdt);
  $a=md5($pass);
  if(!$row){
    if(!$row1){
      if($pass==$pass1){
        $sql_them= "INSERT INTO taikhoan(taikhoan,matkhau,sdt) VALUE('".$user."','".$pass."','".$sdt."')";
  mysqli_query($mysqli,$sql_them);
          ?>
          <script >
            document.getElementById('text').innerHTML = " Đăng ký thành công ";
            function myfunction(){
              alert("Đăng ký thành công");
                document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='flex';
    document.querySelector('.taotk').style.display='none';
    document.getElementById('body').style.overflow= 'hidden';
              

            }
            setTimeout(myfunction,300);
            
          </script>


          <?php           
          $_POST['name'] ='';     
      }
      else{
        
        ?>
        <script type="text/javascript">
          document.getElementById('ghimk1').innerHTML = " Mật khẩu không khớp! :)";
          document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
        </script>

        <?php
          
      }

    }
    else{
      ?>
      <script type="text/javascript">
        document.getElementById('ghisdt').innerHTML = "Số điện thoại đã tồn tại";
        document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
      </script>
      <?php
    }
  }
  else {
    ?>
    <script type="text/javascript">
      document.getElementById('ghitk').innerHTML = " Tài khoản  đã tồn tại!";
      document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';

    </script>

    <?php
  }
}
  else {
        ?>

    <script type="text/javascript">
        document.getElementById('ghisdt').innerHTML ="Vui lòng ghi số điện thoại! :)";
        document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
    </script>
    <?php

  } 

}
  else{

    ?>
    <script type="text/javascript">
        document.getElementById('ghimk1').innerHTML ="Vui lòng ghi lại mật khẩu! :)";
        document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
    </script>

    <?php
  }
}

    else {
      
        ?>
    <script type="text/javascript">
        document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
        document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
    </script>

    <?php
    }


}
  else{
  
    ?>
    <script type="text/javascript">
      document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";
        document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
    </script>
    <?php
  }


  
}
}
?>


<div class="formtobuy" id="formtobuy" >
    

</div>

</body>
<script type="text/javascript">

  document.getElementById('sub').addEventListener('click',function(){
    document.querySelector('.formdangnhap').style.display='flex';
    document.getElementById('body').style.overflow='hidden';

  });
  document.getElementById('unsub').addEventListener('click',function(){
    document.querySelector('.formdangnhap').style.display='none';
    document.getElementById('body').style.overflow='scroll';
    
    
  });
  function dangxuat(){
      alert("TEATEAM tạm biệt quý khách");
  }
  
</script>
<script type="text/javascript">
  document.getElementById('btn-taotk').addEventListener('click',function(){
    document.querySelector('.taotk').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';


  });
  document.getElementById('unsubtaotk').addEventListener('click',function(){
    document.querySelector('.taotk').style.display='none';
    document.querySelector('.formdangnhap1').style.display='flex';  
  });

</script>

<script type="text/javascript">
  var m= "<?php echo $_GET['act']?>";
  var e="<?php echo $_GET['login'] ?>";
  if (m=='dienthongtin'){
    document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";
  }
  else if(m=='dienmk'){
    document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
  }
  else if(m=='dienmk1'){
    document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
  }
  else if (m=='diensdt'){
    document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
  }
  else if (m=='diendaydu'){
    document.getElementById('ghitk').innerHTML = "Vui lòng ghi tài khoản! :)";  
    document.getElementById('ghimk').innerHTML ="Vui lòng ghi mật khẩu! :)";
    document.getElementById('ghimk1').innerHTML = "Vui lòng ghi lại mật khẩu! :)";
    document.getElementById('ghisdt').innerHTML = "Vui lòng ghi số điện thoại! :)";
  }
  else if (m=='dangdangky'){
    document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='none';
    document.querySelector('.taotk').style.display='flex';
    document.getElementById('body').style.overflow= 'hidden';
  }
  else if(m=='chuanbidangnhap' && e=='sai'){
    function my(){
    alert('Tài khoản hay mật khẩu không đúng!');}
    document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='flex';
    document.querySelector('.taotk').style.display='none';
    document.getElementById('body').style.overflow= 'hidden';
    setTimeout(my,300);
  }
  else if(m=='chuanbidangnhap'){
    document.querySelector('.formdangnhap').style.display='flex';
    document.querySelector('.formdangnhap1').style.display='flex';
    document.querySelector('.taotk').style.display='none';
    document.getElementById('body').style.overflow= 'hidden';
  }
  else if(m=='order'){
    document.getElementById('body').style.overflow= 'hidden';
  }
</script>

    <form method="POST">
	<div class="form-end">
		<div class="form-donhang">
			<div class="input-form">
				<i class="glyphicon glyphicon-user"></i><input type="text" name="" class="input-bill" placeholder="Tên người nhận" id="tennguoinhan">
			</div>
			<div class="input-form">
				<i class="fa fa-phone" style="font-size:20px"></i><input type="text" name="" class="input-bill" placeholder="Số điện thoại người nhận" id="sdtnguoinhan">
			</div>
			
				 
    <div class="an-location" >
    Geo1:
    <input id="geo1" name="geo1" type="text" placeholder="32.00,34.33" value="10.77178731064382, 106.6020407541167" >  </div>
  <div class="input-form">
  	<i class="fa fa-map-marker" style="font-size:23px"></i><input id="geo2" name="geo2" class="input-bill" onclick="getLocation()" type="text" placeholder="Nhấn vào đây để lấy tọa độ của bạn"> 
  </div>
  	<div class="input-form">
		<i class="fa fa-road" style="font-size:15px"></i><input type="text" id="dis" class="input-bill" placeholder="Quãng đường đi">Km
		</div>
		<div class="input-form">
			<i class="fa fa-sticky-note" style="font-size:18px"></i><textarea id="test" class="input-bill" placeholder="Ghi chú địa điểm"></textarea>
		</div>
	</div>
	<div class="bill-donhang">
			<div class="cuahang" >
				<div class="textcuahang">
					Địa chỉ cửa hàng : 
				</div>
				<div class="choncuahang">  
					 <select id="mySelect" class="form-select" onclick="myFunction()">
								<option>243 Mã Lò Quận Bình Tân</option>
   								 <option>148A Lac Long Quân Quận 11</option>
   								 </select>
				</div>
			</div>
      <?php 
        include "connect.php";
    $sql_lietke= "SELECT * FROM datmon ";
    $query_lietke= mysqli_query($mysqli,$sql_lietke);
    $soluong=0;
    $giatien=0;
while($row=mysqli_fetch_array($query_lietke))
{
$soluong+=$row['soluongmon'];
$giatien+=$row['giamon'];
      ?>
			<div class="thongke-order">
				  <div class="productorder">
            <div class="hinhanh-product">
         <img src="../../admincp/modules/quanlysanpham/hinhanh/<?php echo $row['hinhanhdatmon'] ?>">
            </div>
            <div class="thongtin-product">
               <div class="ten-product"> <?php echo $row['tenmon'] ?></div>
               <div class="topping-product">
                <?php echo $row['toppingmon'] ?>
               </div>
                <div class="gia-product"> <?php echo number_format($row['giagoc']); echo "đ  x  "; echo $row['soluongmon']; echo "  =  "; echo number_format($row['giamon']); echo "đ";  ?> </div>
            </div>
          </div>
			</div>
			<div>
        
<?php }?>
      <div  class="thongke-tien">
            <div class="thongke-gia">
                     Số lượng: <input type="text" name="soluong" id="soluong" value="<?php echo $soluong ?>" class="input-ship">
            </div>
              <div class="thongke-gia">
                     Chi phí ship: <input type="text" name="ship" id="ship" value="" class="input-ship">đ
         </div> 
           <div class="thongke-gia">
           Chi phí order: <input type="text" name="order" id="order" value="<?php echo $giatien ?>" class="input-ship">đ
            </div>
  <div class="thongke-gia">
            Tổng :  <input type="text" name="tongtien" id="tongtien" value="" class="input-ship">đ
            </div>    
      	</div>
        <div class="btn-end">
          <input type="button" name="submitend" id="submitend" value="Thanh toán">
          <input type="button" name="tieptucmua" id="tieptucmua" value="Tiếp tục order">
        </div>
			</div>
	</div> 	
	</div>

  </form>

<script>
  document.getElementById("submitend").addEventListener("click",end);
    function end(){
      
     var e= "<?php if(isset($_SESSION['hoten'])){ echo "oke";} else { echo "no";} ?>";
    var m ="<?php if(isset($_SESSION['hoten'])){echo $_SESSION['hoten'];} else { echo "no";} ?>";
      var ten=$('#tennguoinhan').val();
      var sdt =$('#sdtnguoinhan').val();
      var diachi=$('#geo2').val();
      var d = $('#dis').val();
      var text = $('#test').val();
      var toado= $('#geo1').val();
      if (toado=='10.77178731064382, 106.6020407541167'){
        var cuahang= '243 Mã Lò Quận Bình Tân';
      }
        else {var cuahang =' 148A Lạc Long Quân Quận 11';}
      var soluong= $('#soluong').val();
      var phiship= $('#ship').val();
      var order = $('#order').val();
      var tong= $('#tongtien').val();
      if (e=='no'){
        alert("Vui lòng đăng nhập!");
      }
      else if(ten=='' || sdt==''||diachi==''){
        alert("Vui lòng ghi đầy đủ!");
      }

      else {
        $.ajax({
          url: "endorder.php",
          method:"POST",
          data:{ten:ten,sdt:sdt,diachi:diachi,d:d,text:text,cuahang:cuahang,soluong:soluong,phiship:phiship,order:order,tong:tong,m:m},
          success:function(data){
            alert("Cám ơn quý khách!");
           window.location.assign("order.php");
          }
        });
}
    }
     document.getElementById("tieptucmua").addEventListener("click",end1);
     function end1(){
       window.location.assign("order.php");
     }
function myFunction() {
  var x = document.getElementById("mySelect");
  var i = x.selectedIndex;
  if(document.getElementById('geo2').value!=''){
    if(x.options[i].text=='243 Mã Lò Quận Bình Tân'){
        
        document.getElementById('geo1').value= 10.77178731064382+","+ 106.6020407541167;
        getDis();
      }
     else {
        
         document.getElementById('geo1').value= 10.759591095591956+","+ 106.64198972528021;
   getDis();
          
    }
    }
else {
  alert("Vui lòng điền địa chỉ!");
}}
</script>




  <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
  
  <script>
  function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
  function getDis() {
    var geo1 = $("#geo1").val().split(",");
    var geo2 = $("#geo2").val().split(",");
    var distance = distanceBetween(geo1[0], geo1[1], geo2[0], geo2[1], "K");
    console.log("geo dis: " + distance);
   document.getElementById("dis").value=distance.toFixed(2);
   if(distance<=2){
    var ship= 18000;
      document.getElementById("ship").value=parseInt(ship);
      var d= document.getElementById("order").value ;
      var tongtien = parseInt(d) + parseInt(ship);
      document.getElementById("tongtien").value=parseInt(tongtien);
   }
   else {
      var ship  = distance - 2;
      var ship1= ship.toFixed();
      var test = 18000;
      var a = test;
      var gia= parseInt(ship1*5000) + parseInt(a);
        var d= document.getElementById("order").value;
         document.getElementById("ship").value=parseInt(gia);
             document.getElementById("tongtien").value= parseInt(d) + parseInt(gia);
   }
  }
function get() {
  var d=  document.getElementById("tongtien").value;
  var s = 15000;
  document.getElementById("test").value= parseInt(s)+parseInt(d);
}
  function distanceBetween(lat1, lon1, lat2, lon2, unit) {
    var rlat1 = Math.PI * lat1 / 180
    var rlat2 = Math.PI * lat2 / 180
    var rlon1 = Math.PI * lon1 / 180
    var rlon2 = Math.PI * lon2 / 180
    var theta = lon1 - lon2
    var rtheta = Math.PI * theta / 180
    var dist = Math.sin(rlat1) * Math.sin(rlat2) + Math.cos(rlat1) * Math.cos(rlat2) * Math.cos(rtheta);
    dist = Math.acos(dist)
    dist = dist * 180 / Math.PI
    dist = dist * 60 * 1.1515
    if (unit == "K") {
      dist = dist * 1.609344
    }
    if (unit == "N") {
      dist = dist * 0.8684
    }
    return dist
  }

  //
  // Check if we can get geo location and show it on a map in case we can.
  //
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
      var status = document.getElementById("demo");
      status.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    var geoPoint = position.coords.latitude + "," + position.coords.longitude;
    var status = document.getElementById("demo");
   
    document.getElementById("geo2").value=  position.coords.latitude + " ,  " + position.coords.longitude;
    // Get a nice map tile from google maps
    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center=" +
      geoPoint + "&zoom=14&size=400x300&sensor=false";
      getDis();

  }

  // show our errors for debuging
  function showError(error) {
    var x = document.getElementById("demo");
    switch (error.code) {
      case error.PERMISSION_DENIED:
        x.innerHTML = "Denied the request for Geolocation. Maybe, ask the user in a more polite way?"
        break;
      case error.POSITION_UNAVAILABLE:
        x.innerHTML = "Location information is unavailable.";
        break;
      case error.TIMEOUT:
        x.innerHTML = "The request to get location timed out.";
        break;
      case error.UNKNOWN_ERROR:
        x.innerHTML = "An unknown error occurred :(";
        break;
    }
  }
  function dangxuat(){
      alert("TEATEAM tạm biệt quý khách");
  }
  </script>
</body>

</html>
</body>