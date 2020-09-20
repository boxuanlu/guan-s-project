<?php
  include 'header.php';
  include 'sql.php';
?>

<html>
    <head>
      <title>employee management</title>
    </head>
    <body>
        <div class="wrapper">
            <h2>employee management</h2>
            <h3>   </h3>
        </div>

        <div>
          <ul>
           <?php
           if (strcmp($_SESSION['username'], "aaa") == 0){
             $sql = "SELECT * FROM Employee";
             $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                     $fname= $row["First_Name"];
                     $lname=$row["Last_Name"];
                     echo "<li>$fname $lname</li>";
                  }
              }
            }
            $conn->close();
           ?>
         </ul>
        </div>
    </body>
</html>
