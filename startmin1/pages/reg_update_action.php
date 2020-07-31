<?php 

include 'db.php';
// echo 123;

print_r($_GET);


if(isset($_GET['status']) and isset($_GET['status'])){
    $id= $_GET["id"];
    $status= $_GET["status"];
    if($status == "active"){
    
    $pwd = randomPassword();
    //studmail($_GET["mail"],$pwd);
    

    $qry = "UPDATE OC_STUDENT SET status = 'active',pwd = '$pwd' WHERE id = $id";
    
    $sql = $conn->query($qry);
    
    
    }
    else{

        $qry = "UPDATE OC_STUDENT SET status = 'rejected' WHERE id = $id";
        $sql = $conn->query($qry);
        //echo $sql;  

    }


}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
} 

/* function studmail($to,$password){

   
    $subject = 'Mail verification compleated';
    $message = 'Verification completed and your password is'.$password;
    $headers = 'From: sreejitha.mc19@gmail.com' . "\r\n" .
        'Reply-To: sreejitha.mc19@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers); 

} */


    
    header("Location:reg_req.php");


?>