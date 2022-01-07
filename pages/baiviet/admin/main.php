<?php
    if(isset($_GET['action'])){
      $tmp =   $_GET['action'];
    }else{
        $tmp = '';
    }

    if($tmp == 'qldmbv'){
        include('danhmuc/lietke.php');
    }
    else if($tmp == 'qlbv'){
        include('hienthi.php');
    }
    else{
        include('danhmuc/lietke.php');
    }
?>