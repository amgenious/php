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
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="about">
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
            <div class="container-fluid" id='con'>
                <div class="row" id="we">
                    <div class="col-md-12 sec7">
                        <div  class="part1">
                            <h1 style="text-align: center;">About Us</h1>
                            <p class=''> AmGenious Technologies is a privately
                                held software company based in Ghana. 
                                It was founded by a passionate team of developers
                                with solid understanding of realtime technology.
                                Our vision is to be able to provide the best online-shopping
                                experience that has never existed.
                            </p>
                            <p class=''>With that philosophy in mind, we created y3nbuy, 
                                an online shopping platform. 
                            </p>
                            <br>
                            <div class='contact'>
                                <h1 style="text-align: center;">Get in Contact</h1>
                                <p style="text-align: center;"><b>Email</b></p>
                                <p style="text-align: center;">henrytweneboah956@gmail.com</p>
                                <p style="text-align: center;"><b>Call</b></p>
                                <p style="text-align: center;">(+233 500 164 618 / +233 248 459 053)</p>
                                <p style="text-align: center;"><b>Address</b></p>
                                <p style="text-align: center;">P.O. Box FNT 111,
                                    Kumasi </p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                        <div class="part1" style="text-align: center;">
                            <h1 style="text-align: center;">Leave us a message</h1>
                            <div style="text-align: center;">
                             <div >   
                            <input placeholder='name' id="text">
                            </input><br>
                            <input placeholder='email' id="text">
                            </input>
                            </div>
                            <br>
                            <p>Type comments here</p>
                            <textarea  style="width: 450px; height: 250px; border: 1px solid blue; background-color: rgba(255, 255, 255, 0.705);
                               border-radius: 20px;">
                            </textarea>
                        </div>
                            <input type="submit" id="button"></input>
                            <p class=''>Thanks for messaging us</p>
                        </div>
                        </div>
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
</body>
</html>