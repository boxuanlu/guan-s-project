<?php
  include 'header.php';
?>

<html>
    <head>
      <title>Home</title>
    </head>
    <body>
        <div class="wrapper">
            <h2>Welcome!</h2>
            <h3><?php echo $username; ?> </h3>
            <ul>
              <a href="time.php"><li>time sheet</li></a>
              <a href="employee.php"><li>Employee management</li></a>
              <a href="accountinfo.php"><li>Account info</li></a>
            </ul>
    </body>

</html>
