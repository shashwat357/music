<?php
	session_start();
	$n = $_REQUEST['n'];
	$p = $_REQUEST['p'];

	$con =mysqli_connect("localhost","root","","main_music");

	$q="select * from `login` where username='$n' and password='$p'";

	$r=mysqli_query($con,$q);

	if($row=mysqli_fetch_array($r))
	{
		$_SESSION['name']=$row['name'];
		$_SESSION['username']=$n;
		header('location:index.php');
	}
	else{
		echo "not matched";
	}
?>