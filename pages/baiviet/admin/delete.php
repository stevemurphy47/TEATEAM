<?php
    include('../config/db.php');


  $id = $_GET['id'];
  $sql = "SELECT * FROM baiviet WHERE id = '$id' LIMIT 1";

  $query = mysqli_query($mysqli, $sql);

  while ($row = mysqli_fetch_array($query)){
      unlink('uploads/'.$row['image']);
  }
    $sql_xoa = "DELETE FROM baiviet WHERE id = '$id'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:index.php?action=qlbv');
?>