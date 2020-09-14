<?php
  include 'header.php';
?>

<html>
    <body>
        <div class="wrapper">
            <h2>Account Info</h2>
            <form action="accountinfo.php" method="post">

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Change Password</label>
                    <input type="password" name="pass" class="form-control" required>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Renter Password</label>
                    <input type="password" name="pass1" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>

            </form>
    </body>

</html>
