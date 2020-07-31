<?php 
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
session_start();
include 'db.php';
// echo 123;


print_r($_POST);





$sql = "UPDATE OC_SETTINGS SET issuer_name = '".$_POST["issuerName"]."', title = '".$_POST["certificateTitle"]."', dis = '".$_POST["description"]."'";
// echo $sql;

 $result = $conn->query($sql);

if($result)
{
    $msg ="SAVED SUCCESSFULLY";
    $_SESSION['setting']= $msg;
    header("Location:cert_settings.php");
}

//die;
// $arr = $result->fetch_assoc();
// echo "<pre/>";
// print_r($arr);
?>