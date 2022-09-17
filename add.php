<?php
	//get values from form
	$a = $_REQUEST['artist_name'];
	$t = $_FILES['thumbnail']['name'];
	$tmp = $_FILES['thumbnail']['tmp_name'];
	
	

	//database (hostname,username,password,db name)
	$con = mysqli_connect("localhost","root","","login_sample_db");

	//table with query
	$query = "insert into `artists`(`artist_name`,`thumbnail`)values('$a','$t')";

	//combine database and table
	$result = mysqli_query($con,$query);
	if($result>0)
	{
		//echo "inserted";
		move_uploaded_file($tmp,"upload/".$t);
		header("location:add_artists.php");
	}
	else
		//echo "not";
		echo mysqli_error($con);

?>