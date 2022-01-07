<?php 
    include('../../config/db.php');
    $tendanhmuc = $_POST['tendanhmuc'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO danhmucbv(tendanhmuc)   VALUE('".$tendanhmuc."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../index.php?action=qldmbv');
    }
            //*******************************sua*********************************************

    else if(isset($_POST['suadanhmuc'])){
        $sql_sua = "UPDATE danhmucbv SET tendanhmuc='".$tendanhmuc."' WHERE id_dm='$_GET[iddanhmuc]' ";
        mysqli_query($mysqli, $sql_sua); 
        header('Location:../index.php?action=qldmbv');

    }
            //*******************************xoa*********************************************/
    else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM danhmucbv WHERE id_dm='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../index.php?action=qldmbv');
    }
    
    
    
    
?>