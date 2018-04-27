<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Petfinder's Administrator</title>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.css">
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url(); ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url(); ?>/assets//css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>/assets//css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>/assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url(); ?>/assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url(); ?>/assets/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>/assets/css/stylee.css" rel="stylesheet" type="text/css" />


    <style type="text/css">

    </style>
    </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url() ?>index.php/admin/index" class="logo">
                Administrator
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $_SESSION['username']; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                    <li>
                                            <a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                
        <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                           
                            <?php
                                $this->load->view('include/header');
                            ?>
                            
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Petfinder's Member List</b>
                                </header>

                                <!-- </div> -->
                 <table id="example2" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                          <th><center><span>Picture</span></center></th>
                          <th><center><span>Name</span></center></th>
                          <th><center><span>Birthday</span></center></th>
                          <th><center><span>Gender</span></center></th>
                          <th><center><span>Address</span></center></th>
                          <th><center><span>Email</span></center></th>
                          <th><center><span>Phone</span></center></th>
                          <th><center><span>Username</span></center></th>
                          <th><center><span>Action</span></center></th>
                      </tr>
                  </thead>
			 
                    <tbody>
                    <?php
                foreach ($member as $value) {
                      
                      $id_user=$value->id_user;
                      $nama=$value->nama;
                      $tgl_lahir=$value->tgl_lahir;
                      $gender=$value->gender;
                      $alamat=$value->alamat;
                      $email=$value->email;
                      $telp=$value->telp;
                      $username=$value->username;
                      $gambar=$value->gambar;
              ?>
                    <tr>
                    <td><center><img src="<?php echo base_url("images/user/$gambar") ?>" style="max-width: 50px; max-height: 80px;"></center></td>
                    <td><center><?php echo "$nama"; ?></center></td>
                    <td><center><?php echo "$tgl_lahir"; ?></center></td>
                    <td><center><?php echo "$gender"; ?></center></td>
                    <td><center><?php echo "$alamat"; ?></center></td>
                    <td><center><?php echo "$email"; ?></center></td>
                    <td><center><?php echo "$telp"; ?></center></td>
                    <td><center><?php echo "$username"; ?></center></td>
                    <td>
                    <center>
                    <div id="thanks"> 
                    <a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Delete" href="<?php echo base_url(); ?>/index.php/admin/delete_member?id_user=<?php echo $id_user; ?>"><span class="glyphicon glyphicon-trash">
                    </a>
                    </center>
                   	</td>
                   	</tr>
                 	</div>
            <?php
            }
            ?>
                   </tbody>
                   </table>
                    <script src="<?php echo base_url(); ?>/assets/datatables/jquery.dataTables.min.js"></script>
                    <script src="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.min.js"></script>               
                
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>/assets/js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="<?php echo base_url(); ?>/assets/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="<?php echo base_url(); ?>/assets/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>/assets/js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script>
          $(function () {
            $('#example2').DataTable();
          });
        </script>
        <script src="<?php echo base_url(); ?>/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>