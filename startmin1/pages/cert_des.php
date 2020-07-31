<?php

include 'db.php';


$sql = "SELECT * FROM OC_SETTINGS";

$result = $conn->query($sql);

$full_array = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre/>";
// print_r($full_array);
// die;
 

?>