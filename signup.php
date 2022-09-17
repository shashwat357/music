
<?php 
session_start();

	// include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email=$_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: index.php");
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
	<title>Registration </title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="main">
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" >


	<div class="input-group">
		<label>Username</label>
		<input type="text" name="user_name" value=" ">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value=" ">
        </div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="Signup">Register</button>
	</div>
	<p>
		Already a member? <a href="logind.php">Login in</a>
	</p>
</form>
</div>
</body>
</html>