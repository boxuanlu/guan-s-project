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
    exit;
}

?>
