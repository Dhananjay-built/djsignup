<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
		
	$sql=mysqli_query($conn,"SELECT * FROM `users`  WHERE Email='$Email'");
	if(mysqli_num_rows($sql)>0)
	{
		echo "Email Id Already Exists"; 
		exit;
	}

		if(!empty($first_name) && !empty($last_name)  && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO `users`( `user_id`, `first_name`, `last_name`, `Email`, `password`) VALUES ('$user_id','$first_name','$last_name','$Email','$password')";

			mysqli_query($con, $query);

			header("location: login.php");

		
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: teal;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
            <label for="">first name:</label>
			<input id="text" type="text" name="first_name" required><br><br>
			<label for="">last name </label>
			<input type="text" name="last_name" id="text" required><br><br>
			<label   for="">Email:</label>
			<input id="text" type="text" name="Email" id=""><br><br>
			<label for="">Password:</label>

			<input id="text" type="password" name="password" required><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>