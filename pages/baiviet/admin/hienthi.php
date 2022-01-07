<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/styleF.css">
</head>
<?php
    include('../config/db.php');
    $sql = "SELECT * FROM baiviet, danhmucbv WHERE danhmucbv.id_dm = baiviet.id_danhmuc";
    $query = mysqli_query($mysqli, $sql);
?>
<body>
<div class="btn_thembv">
    <a href="add.php">  Them bai viet</a>
</div>
    <table style="width:100%" border="1px" cellspacing="0px">
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>description</th>
            <th>Content</th>
            <th>Category</th>
            <td>Action</td>
        </tr>
        
        <?php while ($row = mysqli_fetch_array($query)){ ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td> <img src="uploads/<?php echo $row['image']; ?> " width="200px" height="200px"></td>
            <td>
                <textarea style="resize : none"  rows="12" cols="47">
                    <?php echo $row['description']; ?>
                </textarea>
            </td>
            <td>
                <textarea style="resize : none" rows="12" cols="80">
                    <?php echo $row['content']; ?>
                </textarea>
            </td>
            <td><?php echo $row['tendanhmuc']; ?></td>

            <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a>||<a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>


</body>
</html>