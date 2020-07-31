<?php 
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
session_start();
include 'db.php';
// echo 123;


print_r($_POST);




$sql = "INSERT INTO OC_STUDENT (name, reg_no, branch, batch, address, dob, email, reg_date, status) VALUES ('".$_POST["Name"]."', '".$_POST["University_regno"]."', '".$_POST["Branch"]."', '".$_POST["Batch"]."', '".$_POST["adr"]."', '".$_POST["dob"]."', '".$_POST["email"]."', CURRENT_TIMESTAMP, 'pending')";
echo $sql;

 $result = $conn->query($sql);


if($result)
{
    $_SESSION['login_user'] = $arr;
    header("Location:reg_success.php");

}
else
{
    $error = "Username or Password is invalid";
    header("Location:reg_action.php");
}

die;
// $arr = $result->fetch_assoc();
// echo "<pre/>";
// print_r($arr);
?>