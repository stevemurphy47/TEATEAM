<?php
    include("config/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tuc</title>
    <link rel="stylesheet" href="css/styleNews.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/styleF.css?v=<?php echo time(); ?>">

</head> 
<body>
<div class="ctn">
    <div class="h">
        <?php include("modules/menu.php"); ?>
    </div>
    
    <div class="danhmucbv"> 
        <h2>Danh mục bài viết</h2>
        <a href="tintuc.php">Tất cả bài viết</a>

        <?php 
            $sql_danhmuc = "SELECT * FROM danhmucbv";
            $query_danhmuc= mysqli_query($mysqli, $sql_danhmuc);
            while($row_dm = mysqli_fetch_array($query_danhmuc)) {
        ?>
        
        <p> <a class="tdm" href="tintuc.php?id=<?php echo $row_dm['id_dm']?>"> <?php echo $row_dm['tendanhmuc'] ?> </a> </p>    

        <?php } ?>
    
   </div>


    <?php if(isset($_GET['id'])){ ?>
        <?php 
          $sql_tdm = "SELECT * FROM  danhmucbv WHERE danhmucbv.id_dm = '$_GET[id]'  LIMIT 1 ";// baiviet.id_danhmuc = danhmucbv.id_dm  AND baiviet,
          $query_tdm = mysqli_query($mysqli, $sql_tdm);
        

          if($query_tdm){
            $row_tdm = mysqli_fetch_array($query_tdm);
          }
          else{
            echo  "Hiển thị chưa có bài viết";
          }
         ?> 
        <div class="category-main-title">
            <?php echo $row_tdm['tendanhmuc']; ?>
        </div>
         
         
   
    <div class="containerBV"> 
        <ul class="list_product">                
            <?php
               $sql_pro = "SELECT * FROM baiviet, danhmucbv WHERE baiviet.id_danhmuc = danhmucbv.id_dm  AND baiviet.id_danhmuc = '$_GET[id]'";
               $query_pro = mysqli_query($mysqli, $sql_pro);
               
               
                while( $row = $query_pro->fetch_assoc()) {?>      
                <li>                   
                        <a>
                            <img class="img_tt" src="admin/uploads/<?php echo $row['image'] ?>" >  
                            <p class=""><?php echo $row['name']?></P>

                            
                            <p class="price_product"><?php echo $row['description']?></p>
                        </a> 
                        <div class="btn">

                            <a href="tintuc_chitiet.php?id=<?php echo $row['id']; ?>">Xem thêm</a>                  

                        </div>
                </li>
            <?php
                }
            ?>                       
        </ul>
    </div>
    <?php } else{ ?>
        <div class="containerBV"> 
        <ul class="list_product">                
            <?php
               $sql_pro = "SELECT * FROM baiviet, danhmucbv WHERE baiviet.id_danhmuc = danhmucbv.id_dm";
               $query_pro = mysqli_query($mysqli, $sql_pro);
                while($row = $query_pro->fetch_assoc()) {
            ?>        
                <li>                   
                        <a>
                            <img class="img_tt" src="admin/uploads/<?php echo $row['image'] ?>" >  
                            <p class=""><?php echo $row['name']?></P>

                            
                            <p class="price_product"><?php echo $row['description']?></p>
                        </a> 
                        <div class="btn">

                            <a href="tintuc_chitiet.php?id=<?php echo $row['id']; ?>">Xem thêm</a>                  

                        </div>
                </li>
            <?php
                }
            ?>                       
        </ul>
    </div>
    <?php } ?>

    <div class="f">
     <?php include('modules/footer.php'); ?>
   </div>
</div>
  
</body>
</html>

