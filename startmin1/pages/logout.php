<?php
session_start();


session_unset();

// echo "<pre/>";
// print_r($_SESSION);
header("Location:login.php");