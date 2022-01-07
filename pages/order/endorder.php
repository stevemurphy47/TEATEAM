<?php
	include "connect.php";
	$m='';
	$sql_lietke= "SELECT * FROM datmon ";
	 $query_lietke= mysqli_query($mysqli,$sql_lietke);
    while($row=mysqli_fetch_array($query_lietke)){
       $m.=$row['tenmon'];
        $m.=', ';
        $m.=$row['loaimon'];
        $m.=$row['toppingmon'];
        $m.= 'Số lượng : ';
        $m.=$row['soluongmon'];
          $m.=', Giá: ';
        $m.= number_format($row['giamon']);
        $m.='đ';
     $m.="<br>";
    
    }
    $mydate=getdate(date("U"));
$s = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date("H:i:s"); 
$time=$today;
    $ten= $_POST['ten'];
    $sdt= $_POST['sdt'];
    $diachi= $_POST['diachi'];
    $d= $_POST['d'];
    $d.='km';
    $text= $_POST['text'];
    $cuahang= $_POST['cuahang'];
    $cuahang.=',Date:';
    $cuahang.=$s;
    $cuahang.=',Time:';
    $cuahang.=$time;
    $soluong= $_POST['soluong'];
    $phiship= $_POST['phiship'];
    $order= $_POST['order'];
    $tong= $_POST['tong'];
    $taikhoan=$_POST['m'];
    $a="Đợi xác nhận";

    $sql = "INSERT INTO `hoadon` (`idhoadon`, `tennguoinhan`, `sdtnguoinhan`, `diachinguoinhan`, `quangduong`, `ghichu`, `cuahang`, `soluong`, `listorder`, `phiship`, `phiorder`, `tong`, `taikhoanhoadon`, `status`) VALUES (NULL, '".$ten."', '".$sdt."', '".$diachi."', '".$d."', '".$text."', '".$cuahang."', '".$soluong."', '".$m."', '".$phiship."', '".$order."', '".$tong."', '".$taikhoan."', '".$a."')";
  if(mysqli_query($mysqli,$sql)){
  	$sql_xoa="DELETE from datmon";
  	mysqli_query($mysqli,$sql_xoa);
  }
?>