<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<div id="box">
		
		<form method="post">
			<div class="box1">
			<div style="font-size: 50px;margin: 10px;color: white;">Login</div>
			<div>
			<input id="text" type="text" name="user_name" placeholder="username"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>
			</div>
			<div>
			<input id="button" type="submit" value="Login"><br><br>
			</div>
			<div>
			<a href="signup.php" style="text-decoration: none; color: black;">Click to Signup</a><br><br>
			</div>
			</div>
		</form>
	</div>
</body>
</html>