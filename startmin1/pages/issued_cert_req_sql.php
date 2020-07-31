<?php 


include 'db.php';


$sql = "SELECT name,b.id,reg_no,branch,batch FROM `OC_REQUEST` a INNER JOIN OC_STUDENT b ON a.stud_id=b.id WHERE a.status='approved'";
//echo $sql;
$result = $conn->query($sql);

 $full_array = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre/>";
// print_r($full_array);
// die;
 
?>