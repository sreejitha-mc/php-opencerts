<!DOCTYPE html>
<html lang="en">
    <head>


    <style>
	.response-style {
		margin: 20px 0px;
		width: fit-content;
		padding: 5px;
		/* background-color: #218c21e0; */
		color: white;
		display: none;
	}

    .issue-style {
		margin: 20px 0px;
		width: fit-content;
		padding: 5px;
		background-color: #218c21e0;
		color: white;
		display: none;
	}

    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Open Certs</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                

                
                

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> INSTITUTION <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            
                            
                        <li><a href="logout_inst.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <?php
                include 'inst_sidebar.php';
                include 'cert_des.php';


                $stud_id= $_GET["id"];
                $sname= $_GET["name"];
                $reg_no= $_GET["regno"];
                $batch= $_GET["batch"];

                //echo "<pre/>";
                // print_r($full_array);
                //die;
                
                $issue_name = $full_array[0]['issuer_name'];
                $cert_title = $full_array[0]['title'];
                $cert_des = $full_array[0]['dis'];
                                
                ?>
                
            </nav>

            <div id="page-wrapper" style="margin-top: 100px;">
            <div class="col-md-12">
						<div class="mu-about-area">
					

                        <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5786da;
  color: white;
}

.create-template-btn {
    margin-top: 35px;
    background: white;
    color: #143cd8;
    padding: 11px;
    border: 1px solid blanchedalmond;
    box-shadow: 0px 0px 5px 0px black;
    text-transform: uppercase;
}

td:nth-child(1) {  
  width: 40%;
}

.loading {
    display: none;
    height: 80px;
    margin: 57px 173px;
}
</style>

<table id="customers">
  <tr>
    <th colspan="2">Certificate Template Details</th>
  </tr>
  <tr>
    <td>Req. ID</td>
    <td><?php echo $_GET['id']; ?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $_GET['name']; ?></td>
  </tr>
  <tr>
    <td>Reg. NO</td>
    <td><?php echo $_GET['regno']; ?></td>
  </tr>
  <tr>
    <td>Batch. NO</td>
    <td><?php echo $_GET['batch']; ?></td>
  </tr>
</table>












						<button onclick="createCertTemplate('<?php echo $stud_id;?>','<?php echo $sname;?>','<?php echo $reg_no;?>','<?php echo $batch; ?>','<?php echo $issue_name; ?>','<?php echo $cert_title; ?>','<?php echo $cert_des; ?>')" class="create-template-btn">
							Issue certificate
                        </button>
                        <img src="./images/loading.gif" alt="" class="loading">
						<div class="response-style">
							<!-- Certificate template created successfully!! -->
                                <!-- <button onclick="issueCert('<?php echo $reg_no; ?>','<?php echo $stud_id;?>')">
                                Issue Certificate
                                </button> -->
                                
                                <div class="issue-style">
                                    Certificate Issued successfully!!
                                </div>
						</div>
							
						</div>
					</div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
    <footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="appjs/root.js"></script>
  </footer>
</html>
