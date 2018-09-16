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
    <!-- bootstrap-daterangepicker -->
    <link  href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"><!-- bootstrap-daterangepicker -->
     <!-- bootstrap-datetimepicker -->
    <link  href="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- PNotify -->
     <link href="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
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
                    </li>
                      
                    <!--  Tab layout monitoring
                    li><a href="?php echo base_url();?>monitoring">
                    <i class="fa fa-bar-chart-o"></i> Monitoring </a>
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
                          
                          <a  href="<?php echo base_url();?>login/logout" type="button" class="btn btn-primary">Konfirmasi</a>
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

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Selamat Datang ! </h1>
                      <p>Selamat datang di Portal Sistem Pengendali Inkubator Bayi Laboratorium Teknik Kontrol Otomat Departemen Teknik Elektro Universitas Diponegoro.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>

               <!-- <div class="modal fade bs-example-modal-lg" id="modalupdate" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Update Data</h4>
                      </div>
                      <form class="form-horizontal" action="<?php echo base_url('lista/ubah_admin')?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="hidden" id="id" name="id" value="<?php echo $admin[0]->id ?>">
                              <input type="hidden" id="jabatan" name="jabatan" value="<?php echo $admin[0]->jabatan ?>">
                              <input id="UserName" class="form-control col-md-7 col-xs-12" value="<?php echo $admin[0]->User_Name ?>" data-validate-length-range="6" data-validate-words="2" name="User_Name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                            </div>
                          </div>
                         
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="tel" id="nohp" name="no_hp" value="<?php echo $admin[0]->no_hp ?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                         
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="alamat" required="required" name="alamat" value="<?php echo $admin[0]->alamat ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          
                        </div>
                            
                        <div class="modal-footer">
                        <?php $this->session->set_flashdata('redirect', base_url('beranda'))?>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button	 type="submit" class="btn btn-success">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> -->
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2><b>Profile Admin</b></h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
                      <li class="pull-right">
                        <a data-toggle="modal" data-target="#modalupdate" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                    <div class="center col-xs-7">
                      <h2><?php echo $getNama?></h2>
                      <p><strong>About: </strong><?php echo $admin[0]->level ?></p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"><strong> Alamat: </strong></i> <?php echo $admin[0]->alamat ?>  </li>
                          <li><i class="fa fa-phone"><strong> No.Hp : </strong></i> <?php echo $admin[0]->no_hp?></li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="<?php echo base_url();?>assets/production/images/<?php echo $getPhoto?>" alt="User Image" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                            
                      <div class="col-xs-12 col-sm-6 emphasis">
                            
                      </div>
                    </div>
                  </div>
                </div>
                  

              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2><b>Monitoring Inkubator</b></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-calendar"></i></span></h1>
                      <h4 class="text-center" id="nilai-waktu"></h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-child"></i></span></h1>
                      <h4 class="text-center" id="nilai-bb"></h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-tint"></i></span></h1>
                      <h4 class="text-center" id="nilai-kelembaban"></h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-cc"></i></span></h1>
                      <h4 class="text-center" id="nilai-suhu"></h4>
                    </div>
                    
                    
                    
                    

                  </div>
                </div>
              </div>

              
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                  <h2><b>Data Inkubator</b></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div style="text-align: center; margin-bottom: 17px; margin-top: 17px">
                  <a href="<?php echo base_url();?>data"><span class="btn btn-app"> <i class="fa fa-file"> </i> Data </span> </a>
                            </div>

                            <h2 class="name_title">Data Inkubator</h2>
                            <div class="divider"> </div>
                            <p>Menu data inkubator ini digunakan untuk melihat data dari sensor yang digunakan. Memungkinkan juga untuk mengunduhnya sesuai dengan tanggal yang diplih</p>

                            
                        </div>
                      </div>
                  </div>
              
              
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="row x_title">
                  <div class="col-md-10 col-sm-12 col-xs-12">
                      <h3><b>Sensor Suhu</b><br /></h3><small>*Pilih tangggal terlebih dahulu</small>
                    </div>
                    <div class="col-sm-2">
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" id="tanggal"/>
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
                    if(count($database) > 0){
                      foreach($database as $database){
                          $waktu[] = $database->waktu;
                          $suhu[] = (float) $database->Suhu;
                      }
                    }
                    else{
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
          ©2018 Laboratorium Teknik Kontrol Otomat Departemen Teknik Elektro Universitas Diponegoro </a>
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
    <!-- PNotify -->
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
    
    

    <script>
      $(document).ready(function(){
          setInterval(function(){ 
            var url = "<?=base_url('get-data-monitoring');?>";
            $.get(url, function( data ) { 
                var val = JSON.parse(data);
                $('#nilai-waktu').text(val.waktu);
                $('#nilai-suhu').text("Suhu: "+val.suhu+"°C"); // table lain : val.suhu_sementara
                $('#nilai-kelembaban').text("Kelembaban: "+val.lembab+"%"); // table lain : val.kelembapan_semetara
                $('#nilai-bb').text("Berat Badan: "+val.bb+" Kg");
                
                
            }); 
            // console.log(url);
          }, 500);
      });

      </script>
     
     
     <script>  
          var ctx = document.getElementById("lineChart2",);
          var lineChart2 = new Chart(ctx, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($waktu);?>,
            datasets: [{
            label: "Suhu Inkubator dalam waktu 4 detik (°C)",
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
      $(document).ready(function (){
        $('.ui-pnotify').remove();
        
        // $('#modallogout').on('shown.bs.modal', function(){
        //   console.log('modal open');
        //     $('.modal-backdrop').css("z-index", "1000 !important");
        // });

      });
    </script>
    <script>
    var val;
    var update;
          $('#myDatepicker2').datetimepicker({
            format: 'YYYY-MM-DD',
            // useCurrent : true
          }).on('dp.change', function(e){
            update = e;
            updatechart();
          });

          $(document).ready(function(){
          setInterval(function(){ 
            updatechart();
          }, 600);
          
      });
      function updatechart() {
          if(update==null)return;
          console.log("updatesuhu");
            var tanggal = update.date.format('YYYY-MM-DD');
            var url = "<?=base_url('get-data-suhu');?>/"+tanggal;
            $.ajax({
              url: url,
              cache: true,
              method:'GET',
              success: function(data) {
                val = JSON.parse(data);
                lineChart2.data.datasets[0].data = val.map(x => parseFloat(x.Suhu));
                lineChart2.data.labels = val.map(x => x.waktu);
                lineChart2.update();
                
            }
          });
      }
      </script>

      

  </body>
</html>