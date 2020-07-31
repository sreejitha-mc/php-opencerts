<?php 
     session_start();
     include 'db.php';
     
     
     
     if(isset($_GET['stud_id'])){
     
     
    $sql = "INSERT INTO OC_REQUEST(stud_id, status, req_date) VALUES ('".$_GET["stud_id"]."','pending',CURRENT_TIMESTAMP)";


     }

  
     
     $result = $conn->query($sql);
     
         header("Location:home.php");
     

    //  die;
     // $arr = $result->fetch_assoc();
     // echo "<pre/>";
     // print_r($arr);


    // echo "<pre/>";

    // print_r($_SESSION);
?>