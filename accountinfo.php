<?php
  include 'header.php';
?>

<html>
  <head>
    <link rel="stylesheet" href="css/myformstyle.css">
  </head>

  <body>
      <div class="form">
          <h2>Account Info</h2>
          <form action="accountinfo_action.php" method="post">

              <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" required>
              </div>

              <div class="form-group">
                  <label>Company</label>
                  <input type="text" name="company" class="form-control" required>
              </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Update">
              </div>
          </form>
        </div>
  </body>
</html>
