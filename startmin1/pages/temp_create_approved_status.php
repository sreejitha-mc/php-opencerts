<?php


include 'db.php';
$id = $_GET['id'];

$qry = "UPDATE OC_REQUEST SET status = 'approved' WHERE stud_id = $id";

echo $result = $conn->query($qry);

// $arr = $result->fetch_assoc();
// echo "<pre/>";
// print_r($arr);
// echo $qry;


?>