

<?php
    $sql_list_danhmuc = "SELECT * FROM danhmucbv ";
    $query_dmbv = mysqli_query($mysqli, $sql_list_danhmuc);
?>


<style>


.btn_thembv a:hover {
    color:white;
}
.btn_thembv a {
    text-decoration: none;
    font-size: 25px;
}
.btn_thembv {
    border: 1px solid;
    width: 17%;
    background:#f08080;
    float: right;
    margin-right: 10px;
    margin-top: 5px;

}
</style>



<table style="width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Id</th>
    <th>Ten danh muc</th>
    <th>Quan ly</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_dmbv)){
        $i++;
  ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td> <?php echo $row['tendanhmuc'] ?></td>

       <td>
         <a href="danhmuc/xuly.php?iddanhmuc=<?php echo $row['id_dm']?>" >Xoa</a>||
        <a href="danhmuc/sua.php?iddanhmuc=<?php echo $row['id_dm'] ?>">Sua </a>
      </td> 
    </tr>

  <?php
    }
  ?>
</table>
<div class="btn_thembv">
  <a href="danhmuc/them.php">Them danh muc bai viet</a>
</div>