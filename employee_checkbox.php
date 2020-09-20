
<?php
  
  include 'sql.php';
  


  $checkbox1 = $_POST['chkl'] ;  
// if ($_POST["Submit" ]=="Submit")  
// {  
    echo $checkbox1[0];
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="DELETE FROM Employee WHERE ID = '".$checkbox1[$i]. "'"; 

$conn->query($query);
} 
echo "Employee has been deleted.";
// }  
?>

