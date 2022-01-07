
<?php 
    include('../config/db.php');
    $sql = "SELECT * FROM danhmucbv";
    $query = mysqli_query($mysqli, $sql);
?>
<table style="width:100%" border="1px" cellspacing="0px">
  
    <form method="post" enctype="multipart/form-data">
        <tr>
            <th  width="%">Title</th>
            <th  width="%">Image</th>
            <th width="%">Description</th>

            <th  width="%">Content</th>
            <th  width="">Danh muc</th>

        </tr>
        
        <tr>
            <td><input type="text" name="name" autocomplete="off" required></td>
            <td><input type="file" name="image" autocomplete="off" required></td>
            
            <td>
                <textarea name="description" style="resize : none" id="input" class="form-control" rows="5" cols="30"  width="100%"  required="required"></textarea>
            </td>
           
            <td>
                <textarea name="content" style="resize : none" id="input" class="form-control" rows="5"cols="60"  required="required"></textarea>
            </td>
            <td>
                <select name="danhmuc">
                <?php while ($row = mysqli_fetch_array($query)){?>

                        <option value="<?php echo $row['id_dm']?>">
                            <?php echo $row['tendanhmuc'] ?>
                        </option>
                        <?php } ?>

                </select>
            </td>

        </tr>
       
    </table>
        <td><input type="submit" name="sbm_add" value="Submit"> </td>

    </form>
    <style>

        textarea#input {
            width: 100%;
        }
    </style>
<?php

    include('../config/db.php');
    if(isset($_POST['sbm_add'])){
        
        $n = $_POST['name'];

        $i = $_FILES['image']['name'];
        $i_tmp= $_FILES['image']['tmp_name'];

        $c =$_POST['content'];
        $d =$_POST['description'];
        $dm = $_POST['danhmuc'];

        if($n == ''){
            echo 'nhap vao n';
        }else if($i == ''){
            echo 'chon hinh ';
        }else if($c == ''){
            echo 'nhap vao c';
        }else{
            move_uploaded_file($i_tmp, 'uploads/'.$i);
            $sql = "INSERT INTO  baiviet(name, image,description, content, id_danhmuc) VALUES ('$n', '$i','$d', '$c','$dm')";
            $query = mysqli_query($mysqli, $sql);
            header('location: index.php?action=qlbv');
        }    
    }
?>

