<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url();?>assets/production/images/icon-title-bar.ico" type="image/ico" />

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
    <!-- bootstrap-datetimepicker -->
    <link  href="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
     <!-- Custom modal dialog -->
     <link rel="stylesheet" href="<?php echo base_url('assets/custome/style.css'); ?>">
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
              <img src="<?php echo base_url();?>assets/production/images/<?php echo $getPhoto?>" alt="User Image" class="img-circle profile_img">
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
              <ul class="nav side-menu">
              <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
              <li><a><i class="fa fa-users"></i> Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo base_url();?>lista">List Admin</a>
                        
                        <li><a href="<?php echo base_url();?>groupa">Group Admin</a>
                        <li><a href="<?php echo base_url();?>inkubator">List Inkubator</a>
                        <p> </p>
                        </li>
                    </ul>
                  </li>
                  <?php endif; ?>
                  </ul>
                  <h3>General</h3>
                  <p> </p>
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
                   
                  
                  <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
                    <li><a href="<?php echo base_url();?>kontrol">
                    <i class="fa fa-wrench"></i> Kontrol </a></li>
                    </li>
                    <?php endif; ?>
                    
                  <li><a href="<?php echo base_url();?>data">
                  <i class="fa fa-file"></i> Data </a>
                    
                  </li>
                  <li><a data-toggle="modal" data-target="#modallogout">
                  <i class="fa fa-power-off"></i>Lagout </a>
                  
                  </li>
              </div>
              <!-- modal logout -->
               <div class="modal fade"  id="modallogout" role="dialog" >
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Apakah anda ingin keluar?</h4>
                        </div>
                        <div class="modal-body">
                          <p>Anda akan melepaskan semua pekerjaan yang belum disimpan, tekan 'Batal' untuk kembali ke halaman atau 'Konfirmasi' untuk keluar.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          
                          <a href="<?php echo base_url();?>login/logout" type="button" class="btn btn-primary">Konfirmasi</a>
                        </div>

                      </div>
                    </div>
                  </div>
              <!-- end modal logout -->
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
                    <h3><b>Monitoring Inkubator</b></h3>*Periode data masuk terakhir : <b id ="nilai-waktu"></b>
                    
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
              <div class="row x_title">
              <div class="col-md-10 col-sm-12 col-xs-12">
                      <h3><b>Sensor Suhu</b></h3><small>*Pilih tangggal terlebih dahulu</small>
                    </div>
                    <div class="col-sm-2">
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class="x_content">
                  <canvas id="lineChart2"></canvas>
                  <?php
                  if (count($database) > 0) {
                      foreach($database as $database){
                          $waktu[] = $database->waktu;
                          $suhu[] = (float) $database->suhu;
                      }
                    }
                    else {
                      $waktu[] = '';
                      $suhu[] = 0;
                    }
                  ?>
                    <div class="x_content">
                  <h2><b>Grafik Data Suhu</b></h2>
                    <div>
                      <div class="starrr stars"></div>
                      <h4>Grafik ini menunjukan aktifitas suhu bayi terhadap waktu pada inkubator bayi berdasarkan tanggal yang dipilih.</h4>
                    </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="dashboard_graph x_panel">
              <div class="x_title">
                    <h4><b>Sensor Kelembapan</b></h4>
                    
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
                      
                      <p><h4>Presentase Kelembapan</h4> </p>
                      <div class="divider"></div>
                      <p><h4>Chart ini menunjukan presentase kelembapan pada inkubator bayi pada saat ini.</h4> </p>

                      
                    </div>  

                      

                  </div>
                </div>
              </div>

              
              <div class="col-md-9 col-sm-6 col-xs-12">
              <div class="dashboard_graph x_panel">
              <div class="row x_title">
              <div class="col-md-9 col-sm-12 col-xs-12">
                      <h3><b>Sensor Berat</b></h3><small>*Pilih tangggal terlebih dahulu</small>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class="x_content">
                  <canvas id="mybarChart2"></canvas>
                  <?php
                   if(count($database2) > 0){
                      foreach($database2 as $database){
                          $waktu2[] = $database->waktu;
                          $bb[] = (float) $database->bb;
                      }
                    }
                    else{
                      $waktu2[] = '';
                      $bb[] = 0;
                    }
                  ?>
                    <div class="x_content">
                  <h2><b>Grafik Data Berat Badan</b></h2>
                    <div>
                      <div class="starrr stars"></div>
                      <h4>Grafik ini menunjukan aktifitas berat badan bayi terhadap waktu pada inkubator bayi berdasarkan tanggal yang dipilih</h4>
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
          ©2018 Laboratorium Teknik Kontrol Otomat Departemen Teknik Elektro Universitas Diponegoro</a>
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
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url();?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.js"></script>
    
    <!-- Java Script nilai sensor realtime JSon -->
    <script>
      $(document).ready(function(){
          setInterval(function(){ 
            var url = "<?=base_url('get-data-monitoring');?>";
            $.get(url, function( data ) {
                var val = JSON.parse(data);
                $('#nilai-suhu').text(val.suhu+"°C");
                $('#nilai-kelembaban').text(+val.lembab+"%");
                $('#nilai-bb').text(val.bb+" gram");
                $('#nilai-bb2').text(val.bb+" gram");
                $('#nilai-waktu').text(val.waktu);
                
            }); 
            // console.log(url);
          }, 500);
      });
    </script>

  <!-- /java script bset chart kelembapan -->
    <script>
    var value = <?php echo $nilai->lembab; ?>;
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
            label: "Suhu Inkubator dalam modulo 3 menit (°C)",
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
				  labels:
           <?php echo json_encode($waktu);?>,
				  datasets: [{
					label: 'Berat Badan dalam modulo 3 menit (*gram)',
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
<!-- js untuk sorting tgl di suhu -->
<script>
    var val;
    var update;
          $('#myDatepicker1').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent : true
          }).on('dp.change', function(e){
            update = e;
            updatechart();
          });

          $(document).ready(function(){
          setInterval(function(){ 
            updatechart();
          }, 15000);
          
      });
      function updatechart() {
          if(update==null)return;
          console.log("updatesuhu");
            var tanggal = update.date.format('YYYY-MM-DD');
            var url = "<?=base_url('Monitoring/getDataSuhu');?>/"+tanggal;
            $.get(url, function( data ) {
                val = JSON.parse(data);
                lineChart2.data.datasets[0].data = val.map(x => parseFloat(x.suhu));
                lineChart2.data.labels = val.map(x => x.waktu);
                lineChart2.update();
                
            });
          }
      </script>

    <!-- js untuk sorting tgl di berat -->
      <script>
         var val;
         var update2;
         $('#myDatepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
          }).on('dp.change', function(l){
            update2 = l;
            updatechart2();
          });
          $(document).ready(function(){
          setInterval(function(){ 
            updatechart2();
          }, 15000);
          
      });
      function updatechart2(){
        if(update2==null)return;
        console.log("updatebb");
            var tanggal = update2.date.format('YYYY-MM-DD');
            var url = "<?=base_url('Monitoring/getDatabb');?>/"+tanggal;
            $.get(url, function( data ) {
                val = JSON.parse(data);
                mybarChart.data.datasets[0].data = val.map(x => parseFloat(x.bb));
                mybarChart.data.labels = val.map(x => x.waktu);
                mybarChart.update();
                
            }); 
          }
          
      </script>


     
     


  </body>
</html>