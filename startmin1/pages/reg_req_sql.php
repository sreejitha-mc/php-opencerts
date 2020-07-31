<?php 


include 'db.php';


$sql = "SELECT * FROM OC_STUDENT WHERE status = 'pending'";
//echo $sql;
$result = $conn->query($sql);

 $full_array = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre/>";
// print_r($full_array);
// die;
 
?>