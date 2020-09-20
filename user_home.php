<?php
  include 'header.php';

  $sql = "SELECT email FROM account_info WHERE username='$username'";
  $result = $conn->query($sql);
  $displayemail="no email on file";

  if ($result->num_rows > 0) {
      // output data of each row
    $row = $result->fetch_assoc();
    $displayemail= $row["email"];
  }

?>

<html>
    <head>
      <title>Home</title>
    </head>
    <body>
        <div class="wrapper">
            <h2>Welcome!</h2>
            <h3><?php echo $username; ?> </h3>
            <h6>Email: <?php echo $displayemail?></h6>
            <ul>
              <a href="time_sheet.php"><li>time sheet</li></a>
              <a href="employee.php"><li>Employee management</li></a>
              <a href="accountinfo.php"><li>Account info</li></a>
            </ul>
    </body>

</html>
