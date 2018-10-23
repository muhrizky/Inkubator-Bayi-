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
                    
                  </li>
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
                    <div class="col-md-9 col-sm-12 col-xs-12">
                      <h1><b>Kontrol Inkubator<b></h1>
                      <p><h2>Menu kontrol dalam sistem ini digunakan ketika menginginkan kontrol secara manual pada inkubator bayi. Sensor yang dapat dikontrol adalah sensor suhu</h2></p>
                    </div>
                    <br />
                  <div class="col-md-3 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-cc"></i></span></h1>
                      <h4 class="text-center">Suhu</h4>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 col-xs-6"> 
                      <h1><span class="img-circle img-responsive text-center"><i class="fa fa-tint"></i></span></h1>
                      <h4 class="text-center">Kelembapan</h4>
                    </div> -->
                    <!-- <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="col-md-12 col-sm-11 col-xs-11">  
                          <h1><span class="img-circle img-responsive"><i class="fa fa-warning"></i> <b>Kontrol Inkubator<b> </span> </h1>
                          <h2>Menu kontrol dalam sistem ini digunakan ketika menginginkan kontrol secara manual pada inkubator bayi. Sensor yang dapat dikontrol adalah sensor suhu dan kelembapan.</h2>
                        </div> -->
                      <!-- <div class="col-md-2 col-sm-3 col-xs-12"  > 
                        <img class="img-responsive text-center" src="<?php echo base_url();?>assets/production/images/attention.png" class="img-responsive avatar-view">
                        
                        </div>
                      <div class="col-md-10 col-sm-9 col-xs-12">
                        <h1><b>Kontrol Inkubator<b></h1>
                        <p><h2>Menu kontrol dalam sistem ini digunakan ketika menginginkan kontrol secara manual pada inkubator bayi. Sensor yang dapat dikontrol adalah sensor suhu dan kelembapan.</h2></p>
                      </div> -->

                  </div>
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                        <h2><b>Kontrol Inkubator</b></h2>
                        
                        <div class="clearfix"></div>
                  </div>
                  <?=$this->session->flashdata('notif')?>
                <div class="x_content">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          
                            <div class="title">
                              <h3 style= "color:white"><b>Kontrol Suhu</b></h3>
                              <h2  style= "color:white"><b>Suhu Saat</b></h2>
                              <h2 id="nilai-waktu" style= "color:white"></h2>
                              <h1 id="nilai-suhu" style="color:white"></h1>
                            </div>
                            
                            <form method="post" action="<?php echo base_url('Kontrol/updatesvsuhu2');?>" >
                            <div class="input-group">
                              <input name="nilai" placeholder="Suhu Tujuan dalam °C" required="required" type="number" size="2" min="1" max="99" class="form-control" 
                              >
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary" >Set Tujuan</button>
                                </span>
                            </div>
                            </form>

                          </div>
                   </div>

                  

                   
                  <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                          
                            <div class="title">
                              <h3 style= "color:white"><b>Setpoint Sensor Suhu</b></h3>
                              <h2 style= "color:white"><b>Setpoint saat</b></h2>
                              <h2 id="nilai-waktu2" style="color:white"></h2>
                              <h1 id="nilai_kelembapan_sementara" style= "color:white"></h1>
                            </div>
                            
                            <form method="post" action="<?php echo base_url('Kontrol/updatesvlembab2');?>" >
                            <div class="input-group">
                              <input name="nilai" placeholder="Kelembapan Tujuan dalam %" required="required" size="2" min="1" max="99" type="number" class="form-control">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary" >Set Tujuan</button>
                                </span>
                            </div>
                            </form>
                            </div>
                          </div>
                        </div>
                     </div>
                   </div> -->

                <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Tabel Setpoin Sensor</b></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis Sensor</th>
                          <th>Nilai</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                            $no = 1;
                            foreach($pastibisa2 as $pb){ 
                            ?>
                            
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $pb->nama ?></td>
                              <td><?php echo $pb->nilai ?></td>
                        </tr>
                        <?php } ?>
                            </tbody>
                            </tr>
                    </table>
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
    <!-- Parsley -->
    <script src="<?php echo base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
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
                $('#nilai-suhu').text(val.suhu+"°C");
                $('#nilai-waktu').text(val.waktu);
                $('#nilai-waktu2').text(val.waktu);
                $('#nilai_kelembapan_sementara').text(val.lembab+"%");
                
            }); 
            // console.log(url);
          }, 1000);
      });
    </script>

    <script>
   $(document).ready(
     function (){$('.ui-pnotify').remove();}
     );
    </script>

    <script>
    $(document).ready(function() {
    (new PNotify({
        title: 'Regular Notice',
        text: 'Check me out! I\'m a notice.',
        type: 'info',
        styling: 'bootstrap3'
    }));
});
</script>
    


    
  </body>
</html>