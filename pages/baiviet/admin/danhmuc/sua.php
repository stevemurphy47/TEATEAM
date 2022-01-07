<?php     include('../../config/db.php'); ?>


<?php
    $sql_sua_danhmuc = "SELECT * FROM danhmucbv WHERE id_dm ='$_GET[iddanhmuc]' LIMIT 1 ";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmuc);
?>

<th>Sua danh muc san pham</th>

<table border="1" width="50%" style="border-collapse: collapse">
  <form method="POST" action="xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
        while($row = mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
        <tr>
        <td>Ten danh muc</td>
        <td><input type="text" value="<?php echo $row['tendanhmuc'] ?>" name="tendanhmuc" width="100%"></td>
        </tr>
        

        <tr>    
        <td  colspan="2" ><input type="submit" name="suadanhmuc" value="Sua danh muc san pham" ></td>
        </tr>
    <?php
        }
    ?>

  </form>
</table>