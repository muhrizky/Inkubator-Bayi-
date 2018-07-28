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
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <h1><b>Monitoring Inkubator<b></h1>
                      <p><h2>Menu Monitoring memuat kondisi dari Inkubator Bayi yang terdiri dari beberapa sensor didalamnya. Berikut sensor-sensor yang digunakan</h2></p>
                    </div>
                  <div class="col-md-3 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-cc"></i></span></h1>
                      <h4 class="text-center">Suhu</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-tint"></i></span></h1>
                      <h4 class="text-center">Kelembapan</h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-child"></i></span></h1>
                      <h4 class="text-center">Berat Badan </h4>
                    </div>
                    
                    

                </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Monitoring Inkubator 1</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="row">
 
                      <div class="col-md-12" >

                        <!-- price element -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                          
                            <div class="title" style="color:white;">
                              <h2>Suhu</h2>
                              <h1 id="nilai-suhu" ></h1>
                            </div>
                            
                            
                          </div>
                          
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                          
                            <div class="title" style="color:white;">
                              <h2>Kelembapan</h2>
                              <h1 id="nilai-kelembaban" ></h1>
                            </div>
                            
                            
                          </div>
                          
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          
                            <div class="title"  style="color:white;" >
                              <h2>Berat Badan</h2>
                              <h1 id="nilai-bb" ></h1>
                            </div>
                            
                            
                          </div>
                          
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                       
                          

                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="dashboard_graph x_panel">
              <div class="x_title">
                    <h2><b>Sensor Suhu</b></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <canvas id="lineChart2"></canvas>
                  <?php
                      foreach($database as $database){
                          $waktu[] = $database->waktu;
                          $suhu[] = (float) $database->Suhu;
                      }
                  ?>
                    <div class="x_content">
                  <h2><b>Grafik Data Suhu Inkubator 1</b></h2>
                    <div>
                      <div class="starrr stars"></div>
                      <h4> Grafik ini menunjukan semua aktifitas dari suhu baik Peningkatan  atau penurunan suhu dalam inkubator bayi  semuanya termonitor dengan baik disini </h4>
                    </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="dashboard_graph x_panel">
              <div class="x_title">
                    <h4><b>Sensor Kelembapan</b></h>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div style="text-align: center; margin-bottom: 17px">
                        <span id="chart" class="chart" data-percent="100">
                                            <span class="percent"></span>
                        </span>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      
                      <p><h4>Inkubator Bayi</h4> </p>
                      <div class="divider"></div>
                      <p><h4>Grafik ini menunjukan semua aktifitas dari suhu baik Peningkatan atau penurunan Kadar Oksigen dalam inkubator bayi semuanya termonitor dengan baik disini</h4> </p>

                      
                    </div>  

                      

                  </div>
                </div>
              </div>

              
              <div class="col-md-10 col-sm-6 col-xs-12">
              <div class="dashboard_graph x_panel">
              <div class="x_title">
                    <h2><b>Sensor Berat Badan</b></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <canvas id="mybarChart2"></canvas>
                  <?php
                      foreach($database2 as $database2){
                          $waktu2[] = $database2->waktu;
                          $bb[] = (float) $database2->Berat_Badan;
                      }
                  ?>
                    <div class="x_content">
                  <h2><b>Grafik Data Kadar Oksigen Inkubator 1</b></h2>
                    <div>
                      <div class="starrr stars"></div>
                      <h4> Grafik ini menunjukan semua aktifitas dari suhu baik Peningkatan  atau penurunan Kadar Oksigen dalam inkubator bayi  semuanya termonitor dengan baik disini </h4>
                    </div>

                    </div>
                  </div>
                </div>
              

              


              

             
            

            <!-- /set chart kelembapan -->
              <?php
                $nilai  = $this->m_monitoring->monitoring();
              ?>
              <!-- / end set chart kelembapan -->
                    
                  
                    

                    

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
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
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
    <script src="<?php echo base_url();?>assets/build/js/custom.js"></script>
    
    <!-- Java Script nilai sensor realtime JSon -->
    <script>
      $(document).ready(function(){
          setInterval(function(){ 
            var url = "<?=base_url('get-data-monitoring');?>";
            $.get(url, function( data ) {
                var val = JSON.parse(data);
                $('#nilai-suhu').text(val.suhu_sementara+"°C");
                $('#nilai-kelembaban').text(+val.kelembapan_sementara+"%");
                $('#nilai-bb').text(val.bb+" Kg");
                $('#nilai-bb2').text(val.bb+" Kg");
                
            }); 
            // console.log(url);
          }, 500);
      });
    </script>

  <!-- /java script bset chart kelembapan -->
    <script>
    var value = <?php echo $nilai->kelembapan_sementara; ?>;
      $("#chart").attr("data-percent", value.toString());
     </script>

     <!-- /java script  chart data suhu-->
     <script>  
          var ctx = document.getElementById("lineChart2",);
          var lineChart2 = new Chart(ctx, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($waktu);?>,
            datasets: [{
            label: "Sensor Suhu Inkubator 1",
            backgroundColor: "rgba(38, 185, 154, 0.31)",
            borderColor: "rgba(38, 185, 154, 0.7)",
            pointBorderColor: "rgba(38, 185, 154, 0.7)",
            pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointBorderWidth: 1,
            data: <?php echo json_encode($suhu);?>
            
            },]
          },
          });
      </script>
      <script>
       var ctx = document.getElementById("mybarChart2");
			  var mybarChart = new Chart(ctx, {
				type: 'bar',
				data: {
				  labels: <?php echo json_encode($waktu2);?>,
				  datasets: [{
					label: 'Berat Badan Bayi Inkubator 1',
					backgroundColor: "#26B99A",
					data: <?php echo json_encode($bb);?>
				  },]
				},

				options: {
				  scales: {
					yAxes: [{
					  ticks: {
						beginAtZero: true
					  }
					}]
				  }
				}
			  });
      </script>

     
     


  </body>
</html>