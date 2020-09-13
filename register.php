<?php

	$username = $_POST["name"];
	$password = $_POST["pass"];
	$servername = "sql5c10f.megasqlservers.com";
	$dbusername = "tax123ca73133291";
  $dbpassword = "Y20200101";
	$db = "Testing_tax123ca73133291";

  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $db);
  	if ($conn->connect_error) {
  		echo "Connection Error";
  	}

    $options = [
      'cost' => 12,
    ];
    $hash = password_hash($password, PASSWORD_BCRYPT, $options);

    $sql = "INSERT INTO login VALUES ('$username', '$hash')";

  	if ($conn->query($sql) === TRUE) {
			header( "refresh:2; url=http://tax123.ca/index.html" );
      echo "Your account is successfully created. You will be redirected in 2 second";


  	}
  	else {
      echo "Error: " . $sql . "<br>" . $conn->error;
			echo "Account already exist";
  	}

  $conn->close();

 ?>
