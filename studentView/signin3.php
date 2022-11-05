<?php
// first of all, we need to connect to the database
session_start();
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) ){
	// write the query to check if this username and password exists in our database
	$u = $_POST['fname'];
	$sql = "SELECT * FROM `exam` WHERE c_code= '$u'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		//echo "LET HIM ENTER";
		
		$user=$u;
		header("Location: exam.php?user=".$user);
		exit();
	}
	else{
		echo "Username or Password is wrong";
		header("Location: examred.php");
	}
	
}


?>
