<?php
    include('../config/db.php');
    $sql = "SELECT * FROM baiviet WHERE id = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
?>
<title>Update</title>
<table style="width:100%" border="1px" cellspacing="0px">
  
    <form method="post" enctype="multipart/form-data">
        <tr>
            <th>Title</th>
            <th width="20% ">chon</th>
            <th>IMG</th>
            <th>description</th>
            <th>Content</th>
            <th>Category</th>


        </tr>
        
        <?php   while( $row=mysqli_fetch_array($query)){ ?>
        <tr>
            <td> <input type="text" name="name" value="<?php echo $row['name']?>" required > </td>
            <td><input type="file" name="image"  ></td>
            <td><img src="uploads/<?php echo $row['image']?>" width="200px" height="200px"></td>

            
            <td>
                <textarea name="description"rows="12" cols="47" style="resize : none" required="required"> <?php echo $row['description'] ?></textarea>
               
            </td>
          
            <td>
                <textarea name="content" id="input" class="form-control" style="resize : none" rows="12"cols="50"  required="required"><?php echo $row['content']?></textarea>
            </td>
            <td>
                <select name="danhmuc">
                <?php
                    $sql_danhmuc = "SELECT * FROM danhmucbv ";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    if($row_danhmuc['id_dm'] == $row['id_danhmuc'] ){
                    
                ?>
                    <option selected value="<?php echo $row_danhmuc['id_dm'] ?>"> <?php echo $row_danhmuc['tendanhmuc'] ?></option>

                    <?php
                    }else{
                    ?>
                    <option  value="<?php echo $row_danhmuc['id_dm'] ?>"> <?php echo $row_danhmuc['tendanhmuc'] ?></option>

                <?php
                    }
                    }
                ?>

                </select>
            </td>

        </tr>
        <?php } ?>
       
    </table>
        <td><input type="submit" name="sbm_update" value="Update"> </td>

    </form>
<?php
    include('../config/db.php');


    if(isset($_POST['sbm_update'])){
        
        $n = $_POST['name'];

        $i = $_FILES['image']['name'];
        $i_tmp= $_FILES['image']['tmp_name'];

        $c =$_POST['content'];
        $d= $_POST['description'];
        $dm = $_POST['danhmuc'];
        if($i != ''){
            move_uploaded_file($i_tmp, 'uploads/'.$i);
            $sql = "SELECT * FROM baiviet WHERE id = '$_GET[id]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['image']);
            }
            $sql_u = "UPDATE baiviet SET name = '$n', image = '$i', description = '$d', content = '$c', id_danhmuc = $dm WHERE id = '$_GET[id]'";
            
        }else{
            $sql_u = "UPDATE baiviet SET name = '$n', description = '$d', content = '$c', id_danhmuc = $dm  WHERE id = '$_GET[id]'";
        }
             $query1 = mysqli_query($mysqli, $sql_u);

             if($query1){
                 echo 'tc';
             }else{
                 echo 'error';
             }
            //header('location: index.php?action=qlbv');
    }       
    
?>