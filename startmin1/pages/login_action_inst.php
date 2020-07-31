<?php 
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
session_start();

// echo 123;


print_r($_POST);

// die;
$username = $_POST["username"];
$pwd = $_POST["password"];


if($username == "admin" and $pwd == "admin")
{
    $_SESSION['login_user'] = $username;
    header("Location:issued_cert_req.php");

}
else
{
    $error = "Username or Password is invalid";
    header("Location:login.php");
}

//die;
// $arr = $result->fetch_assoc();
// echo "<pre/>";
// print_r($arr);
?>