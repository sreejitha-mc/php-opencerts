
<style>
    .student-home {
        text-align: center;
        background: #6092d2;
        color: white;
        padding: 20px;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .student-home a {
        color: white;
    }
    
    .student-home img {
        border: 5px solid white;
        margin-left: 20px;
    }
</style>
<div class="student-home">
<?php 
     
     include_once 'db.php';
     
     
    
    //    echo "<pre/>";
    //  print_r($_SESSION);
    //  die;
     
    //  $sql = "SELECT * FROM OC_REQUEST WHERE stud_id = '".$_SESSION['login_user']['id']."'";

     $sql= "SELECT a.status,a.stud_id,b.name,b.reg_no FROM `OC_REQUEST` a INNER JOIN OC_STUDENT b ON a.stud_id=b.id WHERE a.stud_id = '".$_SESSION['login_user']['id']."'";
   
     $result = $conn->query($sql); 
     
     $full_array = $result->fetch_assoc();
     $reg_no = $full_array['reg_no'];
    //  print_r($full_array);
    //  die;
     $state ="Your request is in ";
     if($result->num_rows == 0)
     {
         ?>

            <a href="cert_req_insert.php?stud_id=<?php echo $_SESSION['login_user']['id'];?>">
                Request your certificate
            </a>

         <?php
     
     }
     else
     {
        // $arr = $result->fetch_assoc();
        if($full_array['status']== 'pending') 
        {
            echo $state.$full_array['status'];
        }  
        elseif($full_array['status']== 'rejected')
        {
            echo $state.$full_array['status'];
        }
        else
        {
            echo $state.$full_array['status'];
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "Click Here To Download Your Certificate";
            ?>
           
            <!-- <a href="http://localhost/image/logo.png" download target="new"> -->
                <a href="http://localhost/issued_certificates/<?php echo $reg_no;?>.json" download>
                    <img src="http://localhost/image/logo.png" width="104" height="142">
                </a>
            <?php
        }
     }

     
    //  $arr = $result->fetch_assoc();
    //  echo "<pre/>";
    //  print_r($arr);
    //  die;

    // echo "<pre/>";

    // print_r($_SESSION);
?>
</div>