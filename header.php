<?php
  session_start();
  $username = $_SESSION['username'];

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
  body {
      font: 14px sans-serif;
  }
  .wrapper {
      width: 350px;
      padding: 20px;
  }

  .header {
    overflow: hidden;
    background-color: #AFF8FF;
    padding: 20px 10px;
  }

  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 20px;
    border-radius: 4px;
  }

  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }

  .header a:hover {
    background-color: #AFF4FA;
    color: black;
  }

  .header a.active {
    background-color: #111111;
    color: white;
  }

  .header-right {
    float: right;
  }

  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }

    .header-right {
      float: none;
    }
  }

</style>
</head>
<body>

<div class="header">
  <a href="user_home.php" class="logo"><?php echo $username?></a>
  <div class="header-right">
    <a href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

</html>
