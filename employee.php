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
                     $id =$row["id"];
                    
                    
                    echo '<input type="checkbox" name="chkl[ ]" value="'.$id.'">'.$id.'. '.$fname.' '.$lname.'<br />' ; 

                    
                  }
                  echo '<br>  <input type="submit"  value="Delete Employees">';
                  echo '</from>';
                
               
              }
            }
            $conn->close();
           ?>
         </ul>
        </div>

    </body>
</html>
