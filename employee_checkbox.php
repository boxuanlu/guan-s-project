
<?php
  
  include 'sql.php';
  


  $checkbox1 = $_POST['chkl'] ;  
  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="DELETE FROM Employee WHERE ID = '".$checkbox1[$i]. "'"; 
$conn->query($query);


echo "<h2><strong>Employee " .$checkbox1[$i]." has been deleted.</strong></h2> <br>";



// echo '<script type="text/JavaScript">  
//      Alert("Employee '.$checkbox1[$i].' has been deleted"); 
//      </script>' ;
} 

 
?>

