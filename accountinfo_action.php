<?php
	include "sql.php";
	session_start();
	$username= $_SESSION['username'];
	$company = $_POST["company"];
	$email = $_POST["email"];


	$sql = "REPLACE INTO account_info(username,email,company) VALUES ('$username', '$email','$company')";

	if ($conn->query($sql) === TRUE) {
		header("refresh:2; url=http://tax123.ca/user_home.php" );
		echo "change successfully";
	}
	else{
		header("refresh:1; url=http://tax123.ca/accountinfo.php" );
		echo "unable to do";
	}
?>
