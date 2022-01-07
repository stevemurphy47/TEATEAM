<th>Them danh muc bai viet</th>
<?php     include('../../config/db.php'); ?>

<table border="1px solid" width="50%" style="border-collapse: collapse">
  <form method="POST" action="xuly.php">

    <tr>
      <td>Ten danh muc</td>
      <td><input type="text" required name="tendanhmuc" width="100%"></td>
    </tr>
    
   

    
    </table>
    <td  colspan="2" ><input type="submit" name="themdanhmuc" value="Them danh muc san pham" ></td>

  </form>

  <style>
    input[type="text"] {
    width: 100%;
}
input[type="submit"] {
    margin-top: 5px;
}
  </style>