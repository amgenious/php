<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<?php 
    $conn = mysqli_connect('localhost','root');
    mysqli_select_db($conn,'ecommerce');
    $sql = "SELECT * FROM products WHERE featured = 2";
    $featured = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="#"><img src="Untitled-yenbuy1.png" alt='Logo' class='logo'/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="dropdown">
        <a class="dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: gray;">
          Products
        </a>
        <ul class="dropdown-content" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="computers.php">Computers</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item" href="clothes.php">Clothes</a></li>
          <hr class="dropdown-divider">
          <a class="dropdown-item" href="shoes.php">Shoes</a>
        </ul>
     	 </li>
	  		<li class="nav-item">
        		<a class="nav-link" href="#">Hello, <?php echo $user_data['user_name']; ?></a>
      		</li>
      
    </ul>
  	</div>
</nav>  
<div class="container-fluid" id="con">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center;"> Top Products</h1>
            <?php 
                while($product = mysqli_fetch_assoc($featured)):
            ?>
            <div class="col-md-5" >
                <h4><?=$product['title']; ?></h4>
                <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" />
                <p class="price"><?=$product['price']; ?>&#8373;</p>
                <p class=""><?=$product['brandname']; ?></p>
                <p class="" style="text-align: center;"><?=$product['description']; ?></p>
                <a href="#">
                    <button type="#" class="btn btn-success" data-toggle="modal" data-target="#details-1">Add to Cart</button>
                 </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
    
</body>
</html>
<body>
    
</body>
</html>