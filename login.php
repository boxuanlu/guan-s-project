<?php
	session_start();


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

  	$sql = "SELECT * FROM login WHERE username= '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    		// output data of each row
        while($row = $result->fetch_assoc()) {
    		    $username= $row["username"];
            $hash = $row["hash"];

            if(password_verify ($password, $hash) ){
							$_SESSION['username'] = $username;
              header('Location: accountinfo.html');

            }
            else {
              echo "password incorrect!";
            }
    		}
    }
  	else {
  		echo "username does not exist";
  	}


  $conn->close();

 ?>
