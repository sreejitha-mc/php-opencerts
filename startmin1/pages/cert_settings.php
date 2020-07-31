<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
    <head>


         <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/regstyle.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
        <!-- web font -->
        <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
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

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
    .settings-content {
        width: 650px;
        padding: 65px;
        margin: 0 auto;
    }

    .settings-content input, .settings-content textarea {
        border: 1px solid #7b727296;
        color: #000000ad;
    }

    .settings-content textarea {
        width: 94%;
        padding: 9px;
        height: 150px;
    }

    .settings-content input[type=submit] {
        width: 94%;
        background: #4d6ea1;
        color: white;
    }

    .settings-content label {
        color: #0000009c;
    }

    .success-msg {
        text-align: center;
        font-size: 15px;
        margin-bottom: 14px;
        color: green;
        font-weight: bold;
    }

    </style>
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
                session_start();
                include 'inst_sidebar.php';
                include 'db.php';
               
                $sql = "SELECT * FROM OC_SETTINGS";
               
                
                $result = $conn->query($sql);
                $arr = $result->fetch_assoc();
                 
                
                ?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div class="main-w3layouts wrapper">
                                            <h1>SETTINGS</h1>
                                            <div class="settings-content">
                                                <?php
                                                    if(isset($_SESSION['setting']))
                                                            {
                                                                $msg = $_SESSION['setting'];
                                                                session_unset();
                                                                ?>
                                                                <div class="success-msg"><?php echo $msg; ?></div>
                                                            
                                                            <?php
                                                            }
                                                ?>
                                            <form action="setting_action.php" method="post">
                                                <label for="issuerName">Issuer Name</label>
                                                <input  type="text" name="issuerName" placeholder="name" required="" value="<?php echo $arr['issuer_name']; ?>"></br>
                                                <label for="issuerName">Certificate Title</label>
                                                <input  type="text" name="certificateTitle" placeholder="title" required="" value="<?php echo $arr['title']; ?>"></br>
                                                <label for="issuerName">Certificate Description</label>
                                                <textarea  type="text" name="description" row="6" cols="50" required=""><?php echo $arr['dis']; ?></textarea>
                                                </br>
                                                <input type="submit" value="Submit">
                                            </form>
                                            </div>
                                            
                                                
                                            </div>
                                                                                
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                    <!-- /.row -->
                    
                    <!-- /.row -->
                    
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>