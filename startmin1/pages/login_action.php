<?php 
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
session_start();
include 'db.php';
// echo 123;


print_r($_POST);


$username = $_POST["username"];
$pwd = $_POST["password"];

$sql = "SELECT * FROM OC_STUDENT WHERE name ='".$username."' AND pwd='".$pwd."' AND status='active'";
// echo $sql;
// die;
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $arr = $result->fetch_assoc();
    $_SESSION['login_user'] = $arr;
    header("Location:home.php");

}
else
{
    $error = "Username or Password is invalid";
    header("Location:login.php");
}

die;
// $arr = $result->fetch_assoc();
// echo "<pre/>";
// print_r($arr);
?>