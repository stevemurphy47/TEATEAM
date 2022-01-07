<!DOCTYPE html>
<html>
<body>

<p>Choose an option in the drop-down list and display that option.</p>

<form>
  <select id="mySelect" onchange="myFunction()">
    <option>Apple</option>
    <option>Orange a</option>
    <option>Pineapple</option>
    <option>Banana</option>
  </select>
  <div id="a" onclick="on()">
  </div>
</form>

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
    echo $m;
  
  
?>
<script type="text/javascript">
    function format2(n, currency) {
  return currency + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
}
function on(){
  var ship = 1800
 document.getElementById("a").value=format2(parseInt(ship) + parseInt(d),'vnd';
}
</script>

</body>
</html>
