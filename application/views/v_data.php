<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pengendali Inkubator Bayi</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- bootstrap-daterangepicker -->
     <link  href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link  href="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url();?>index.php/beranda" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN PANEL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/production/images/img.jpg" alt="User Image" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>index.php/beranda">
                  <i class="fa fa-home"></i> Beranda </a>
                  </li>
                  <li><a href="<?php echo base_url();?>index.php/monitoring">
                  <i class="fa fa-bar-chart-o"></i> Monitoring </a>
                    
                  </li>
                  <li><a href="<?php echo base_url();?>index.php/simulasi">
                  <i class="fa fa-youtube-play"></i> Simulasi </a>
                   
                  </li>
                  <li><a href="<?php echo base_url();?>index.php/kontrol">
                  <i class="fa fa-wrench"></i> Kontrol </a>
                    
                  </li>
                  <li><a href="<?php echo base_url();?>index.php/data">
                  <i class="fa fa-file"></i> Data </a>
                    
                  </li>
                  <li><a href="<?php echo base_url();?>index.php/login">
                  <i class="fa fa-power-off"></i>Lagout </a>
                    
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        

        <div class="right_col" role="main">
          <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph x_panel">
                    
                    <div class="x_content">
                      <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="col-md-12 col-sm-11 col-xs-11">  
                          <h1><span class="img-circle img-responsive"><i class="fa fa-file"></i> <b>Data Inkubator<b> <h2>Menu data inkubator ini digunakan untuk melihat data raltime dari sensor yang digunakan. Memungkinkan juga untuk mengunduhnya sesaui dengan tanggal dan waktu yang dipilih </h2> </span> </h1>
                        </div>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="alert alert-warning alert-dismissible fade in" role="alert">
                  <div style= "color:white">
                    <h3>Petunjuk Pengisian</h3>
                    <h2>User harus mengisiskan semua form yang ada, dari inkubator yang dipilih dan rentang waktunya. Sejauh ini hanya inkubator satu yang dapat di download datanya.</h2>
                    </div>
                  </div>
                  </div>
                      

                  </div>
                </div>
              </div>


              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                        <h2><b>Unduh Data Inkubator</b></h2>
                        
                        <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                <h4><b> Pilih Inkubator yang akan diunduh</b> </h4> 
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" data-parsley-mincheck="2" required class="flat"> Inkubator 1
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" disabled="disabled" > Inkubator 2
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" disabled="disabled"> Inkubator 3
                        </label>
                      </div>
                    </div>   
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class='col-sm-11'>
                  <div style= "color:#5A738E" class="alert alert-success alert-dismissible fade in" role="alert">
                    <div  style= "color:white"> <h4><b> Masukan Tanggal dan waktu mulai</b> </h4> </div>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker'>  
                            <input  type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      <div  style= "color:white"> <h4><b> Masukan Tanggal dan waktu Selesai</b> </h4> </div>
                    <div class="form-group">      
                        <div class='input-group date' id='myDatepicker2'>
                            <input  type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <button  type="button" class="btn btn-default btn-sm">Unduh Data</button>
                      </div>
                      
                  </div>
                </div>
                
 
                
                  </div>



                        

                </div>
                    </div>
                  </div>
              </div>
              </div>

          
          </div>
          </div>
        </div>  
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          ©2018 Laboratorium Rumah Sakit Sumber Waras Pemalang</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url();?>assets/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

    <!-- Initialize datetimepicker -->
      <script>
          $('#myDatepicker').datetimepicker({
              format: 'd/MMMM/YYYY HH:mm:ss'
          });

          $('#myDatepicker2').datetimepicker({
            format: 'd/MMMM/YYYY HH:mm:ss'
          });
          
          
      </script>

  </body>
</html>