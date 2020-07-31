<!DOCTYPE html>
<html lang="en">
    <head>
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
                
                ?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">REGISTRATION AUTHORIZATION</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <?php
                                    include 'reg_req_sql.php';
                                ?>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>BATCH</th>
                                                    <th>BRANCH</th>
                                                    <th>UNIVERSITY REGISTER NUMBER</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($full_array as $row){
                                                    $name = stripslashes($row['name']);
                                                    $batch = stripslashes($row['batch']);
                                                    $branch = stripslashes($row['branch']);
                                                    $reg_no = stripslashes($row['reg_no']);
                                                    $id = stripslashes($row['id']);
                                                    $mail = stripslashes($row['email']);
                                                    
                                                    // $name = stripslashes($row['name']);
                                                    ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $name;?></td>
                                                    <td><?php echo $batch;?></td>
                                                    <td><?php echo $branch;?></td>
                                                    <td class="center"><?php echo $reg_no;?></td>
                                                    <td class="center">
                                                        <a href="reg_update_action.php?status=active&id=<?php echo $id; ?>&mail=<?php echo $mail?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use check">&#xf00c</i></a>
                                                        <a href="reg_update_action.php?status=rejected&id=<?php echo $id; ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use close">&#xf00d</i></a>
                                                    </td>
                                                </tr>
                                                <?php

                                                    }
                                                
                                                
                                                ?>
                                                
                                               
                                            </tbody>
                                        </table>
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
