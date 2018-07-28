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
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url();?>beranda" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN PANEL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/production/images/img.jpg" alt="User Image" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $getNama?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>beranda">
                  <i class="fa fa-home"></i> Beranda </a>
                  </li>
                  <li><a href="<?php echo base_url();?>monitoring">
                  <i class="fa fa-bar-chart-o"></i> Monitoring </a>
                    
                <!-- </li>
                  <li><a href=<"?php echo base_url();?>simulasi">
                  <i class="fa fa-youtube-play"></i> Simulasi </a> </li>
                  -->
                   
                 
                  <li><a href="<?php echo base_url();?>kontrol">
                  <i class="fa fa-wrench"></i> Kontrol </a>
                    
                  </li>
                  <li><a href="<?php echo base_url();?>data">
                  <i class="fa fa-file"></i> Data </a>
                    
                  </li>
                  <li><a href="<?php echo base_url();?>login">
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
                      <div class="col-md-2 col-sm-3 col-xs-12"  > 
                        <img <span class="img-responsive text-center" src="<?php echo base_url();?>assets/production/images/attention.png" class="img-responsive avatar-view">
                        
                        </div>
                      <div class="col-md-10 col-sm-9 col-xs-12">
                        <h1><b>Kontrol Inkubator<b></h1>
                        <p><h2>Peringatan, menu kontrol dalam sistem ini hanya digunakan dalam ujicoba. dalam prakteknya menu kontrol ini belum bisa digunakan</h2></p>
                      </div>

                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                        <h2><b>Kontrol Inkubator 1</b></h2>
                        
                        <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          
                            <div class="title">
                              <h3 style= "color:white"><b>Kontrol Suhu</b></h3>
                              <h2 style= "color:white">Suhu Saat ini</h2>
                              <h1 id="nilai-suhu" style="color:white"></h1>
                            </div>
                            
                            <div class="input-group" action="<?php echo base_url('Kontrol/updatesuhu') ?>">
                              <input name="sensor1" placeholder="Suhu Tujuan dalam °C" type="text" class="form-control">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-primary">Set Suhu Tujuan</button>
                                </span>
                            </div>

                          </div>
                   </div>

                  

                   
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                          
                            <div class="title">
                              <h3 style= "color:white"><b>Kontrol Kelembapan</b></h3>
                              <h2 style= "color:white">Kelembapan Saat ini</h2>
                              <h1 id="nilai_kelembapan_sementara" style= "color:white"></h1>
                            </div>
                            
                            <div class="input-group">
                              <input placeholder="Kelembapan Tujuan dalam %" type="text" class="form-control">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-primary">Set Suhu Tujuan</button>
                                </span>
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

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
    <script>
      $(document).ready(function(){
          setInterval(function(){ 
            var url = "<?=base_url('get-data-monitoring');?>";
            $.get(url, function( data ) {
                var val = JSON.parse(data);
                $('#nilai-suhu').text(+val.suhu_sementara+"°C");
                $('#nilai_kelembapan_sementara').text(+val.kelembapan_sementara+"%");
                
            }); 
            // console.log(url);
          }, 1000);
      });
    </script>

    
  </body>
</html>