<?php
  session_start();
  include "sql.php";

  $username = $_SESSION['username'];
  #if username not set will relocate
  if(!isset($_SESSION['username'])){
    session_destroy();
    header("Location: login.html");
    exit;
  }
  ####  CODE FOR LOG OUT ####
  if(isset($_GET['log']) && ($_GET['log']=='out')){
    //if the user logged out, delete any SESSION variables
    $conn->close();
    session_destroy();
    //then redirect to login page
    header('location:login.html');
  }
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="css/myheaderstyle.css">
</head>

<body>
<?php
  $sql = "SELECT * FROM account_info WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
    $row = $result->fetch_assoc();
    $displayname= $row["company"];
  }
  else{
    $displayname=$username;
  }
?>

<div class="header">
  <a href="user_home.php" class="logo"><?php echo $displayname?></a>
  <div class="header-right">
    <a href="?log=out" class="button">Logout</a>
  </div>
</div>

</html>
