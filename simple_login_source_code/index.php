<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>y3nbuy</title>
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
        <a class="dropbtn" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: gray;">
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
<div id="home">
            <div class='container-fluid' id="con">
                <div class='row'>
                    <div class='col-md-12'>
                        <h1 class='fir'>Welcome to <span><img src="Untitled-yenbuy1.png" alt='Logo' class='Logo'/></span></h1>
                <p class='ses'><i>Here at y3nbuy we deal with all kinds of
                         goods such as clothes, earphones,
                         chargers, and all electrical gadgets.
                </i></p>
                </div>
                </div>      
            </div>
            <div class='container-fluid' id="con">
                <div class='row'>
                    <div class='col-md-12 sec2' id="cd">
                        <div>
                        <h2>Clothes</h2>
                        <div class='card' id="clothes">
                        <a href="clothes.php" ><p class='kl'>Click</p></a>
                        </div>  
                        </div>
                        <div>
                         <h2>Computers</h2>   
                        <div class='card' id="computers">
                            <a href="computers.php" ><p class='kl'>Click</p></a>
                        </div>       
                        </div>
                        <div>
                         <h2>Shoes</h2>   
                        <div class='card' id="shoes">
                        <a href="shoes.php" ><p class='kl'>Click</p></a>
                        </div>        
                        </div>
                    </div>
                </div>

            </div>
            <div class='container-fluid' id="con">
                <div class='row'>
                    <div class='col-md-12 sec3'>
                            <div class='text'>
                                <p><h1><u>Address</u></h1></p>
                                <p> y3nbuy Limited, Ghana </p>
			                    <p> (+233 500 164 618 / +233 248 459 053)</p>
                            </div>
                            <div className='imglinks'>
                                <img src="./Images/fb.png" alt='fb'/>
                                <img src="./Images/tw.png" alt='tw'/>
                                <img src="./Images/ig.png" alt='ig'/>
                                <img src="./Images/info.png" alt='info'/>
                            </div>
                            <div class='textlinks'>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="product.php">Product</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                </ul>

                            </div>
                    </div>
                </div>
            </div>
            <div class='container-fluid bg-dark' id='#con1'>
                <div class='row'>
                    <div class='col-md-12 sec4'>
                            <p><i>2022 © Copyright. All Rights Reserved.</i></p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>