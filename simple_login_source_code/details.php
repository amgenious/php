<?php 
    $conn = mysqli_connect('localhost','root');
    mysqli_select_db($conn,'ecommerce');
    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" id="con">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;"> Product Details</h1>
            <?php 
                while($product = mysqli_fetch_assoc($featured)):
            ?>
            <div class="pro1">
            <div class="col-md-5 box3" >
                <h4><?=$product['title']; ?></h4>
                <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" />
                <p class="price"><?=$product['price']; ?>ghcedis</p>
                <p class=""><?=$product['brandname']; ?></p>
                <p class="" style="text-align: center;"><?=$product['description']; ?></p>
                <a href="#">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add to Cart</button>
                 </a>
            </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div> 
    
</body>
</html>