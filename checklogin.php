<?php
    session_start();
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    include("config.php");
    $query = "SELECT * from `users` where `password`='$password' and `email`='$email'";
    $result = mysqli_query($conn,$query);
    $data=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0)
    {
		
		$_SESSION['email']=$data['email'];
		$_SESSION['user']='Users';
        echo "<script>window.location.assign('index.php?msg=Login Successfully')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('login.php?msg=Try again')</script>";
    }

?>