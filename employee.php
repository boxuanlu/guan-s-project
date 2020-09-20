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
              echo '<form action="employee_checkbox.php" method="post">';
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                     $fname= $row["First_Name"];
                     $lname=$row["Last_Name"];
                    //  $sql_1 = "SELECT id FROM Employee WHERE First_Name=$fname AND Last_Name=$lname";
                     $id =$row["id"];
                    //  echo "<li>$fname $lname</li>";
                    
                    echo '<input type="checkbox" name="chkl[ ]" value="$id">'.$fname.'<br />' ; 
                    
                  }
                  echo '</from>';
                
               
              }
            }
            $conn->close();
           ?>
         </ul>
        </div>
    </body>
</html>
