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
               <form action="employee_checkbox.php" method="post">;
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                     $fname= $row["First_Name"];
                     $lname=$row["Last_Name"];
                     $sql_1 = "SELECT id FROM Employee WHERE First_Name='$fname' AND Last_Name='$lname'";
                     $id = $connect->query($sql_1);
                    //  echo "<li>$fname $lname</li>";
                     echo "<input type="checkbox" name="chkl[ ]" value="$id">'$fname $lname'<br />  "
                  }
                <button type="submit" name="Add New Employee" value="Add New Employee">;
                // echo "<button type="submit" name="Add New Employee" value="Add New Employee">";
              }
            }
            $conn->close();
           ?>
         </ul>
        </div>
    </body>
</html>
