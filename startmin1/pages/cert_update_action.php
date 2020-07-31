<?php 

include 'db.php';
// echo 123;

print_r($_GET);


if(isset($_GET['id']) and isset($_GET['status'])){
    $id= $_GET["id"];
    $status= $_GET["status"];
    
        $qry = "UPDATE OC_REQUEST SET status = 'rejected' WHERE stud_id = $id";
       

        $sql = $conn->query($qry);
        //echo $sql;  

    


}



    
    header("Location:list_req.php");


?>