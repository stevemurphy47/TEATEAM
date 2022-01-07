<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="css/styleNews.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/styleF.css?v=<?php echo time(); ?>">


</head>
<body>

<?php
    include("config/db.php");
    $sql_pro = "SELECT * FROM baiviet WHERE id = '$_GET[id]' ";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>

            <div class="d_h">
                <?php include('modules/header_detail_tt.php'); ?>
            </div>


                <div class="detail_wrp">
                    <?php
                        while($row = $query_pro->fetch_assoc()) {
                    ?>        
                            <p class="title_product1"><?php echo $row['name']?></P>
                                        
                            <img class="img_de" src="admin/uploads/<?php echo $row['image'] ?>" >  
                            <p ><?php echo $row['content']?></p> 
                       
                    <?php
                        }
                    ?>                       
                </div>

            
    <div class="d_f">
        <?php include('modules/footer.php'); ?>
    </div>
</body>
</html>