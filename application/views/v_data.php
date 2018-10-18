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
    <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
                      <div class="col-md-10 col-sm-12 col-xs-12">

                        <div class="col-md-12 col-sm-11 col-xs-11">  
                          <h1><span class="img-circle img-responsive"><i class="fa fa-file"></i> <b>Data Inkubator<b> </span> </h1>
                          <h2>Menu data inkubator ini digunakan untuk melihat data dari sensor yang digunakan. Memungkinkan juga untuk mengunduhnya sesuai dengan tanggal dan waktu yang diplih</h2>
                        </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="x_context">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <h2><b>Tabel Inkubator</b></h2>
                    </div>
                  <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table  class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Waktu</th>
                          <th>Suhu</th>
                          <th>Kelembapan</th>
                          <th>Berat Badan</th>
                          
                        </tr>
                        </thead>
                        <tbody id = "tabeldata">
                            <?php 
                            $no = $this->uri->segment('4')+ 1;
                            foreach($babymonitoring2 as $bm){ 
                            ?>
                            
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $bm->waktu ?></td>
                              <td><?php echo $bm->suhu ?>°C</td>
                              <td><?php echo $bm->lembab ?>%</td>
                              <td><?php echo $bm->bb ?> gram</td>
                              
                            </tr>
                            
                            <?php } ?>
                          </tbody>
                    </table>
                      <?php 
                      echo $this->pagination->create_links();
                      ?>
                  </div>
                </div>
              </div>
           </div>

              
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <h2><b>Download Data Inkubator</b></h2>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <form class="form-group" method="get" action="<?php echo base_url('Data/unduhdata');?>" >
                        <div class='col-sm-5'>
                          <div class="form-group">
                          <label for="ex3">Pilih Inkubator</label>
                            <select name="inkubator" class="form-control" class="required">
                              <?php foreach ($getinkubator as $value) {?>
                                <option
                                  value="<?php echo $value->id_inkubator?>">
                                   <?php echo $value->nama_inkubator?></option>
                                     <?php }?>
                              </select>
                             
                          </div>
                      </div>
                      
                      <form class="form-horizontal form-label-left" method="get" action="<?php echo base_url('Data/unduhdata');?>" >
                        <div class='col-sm-5'>
                          <div class="form-group">
                          <label for="ex3">Masukan Waktu Awal</label>
                              <div name="waktu_awal"  class='input-group date' id='myDatepicker'>
                                  <input name="waktu_awal" required="required" type='text' class="form-control"  class="jsDate" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class='col-sm-5'>
                          <div class="form-group">
                          <label for="ex3">Masukan Waktu Akhir</label>
                              <div name="waktu_akhir" class='input-group date' id='myDatepicker2'>
                                  <input name="waktu_akhir" required="required" type='text' class="form-control" class="jsDate" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                          </div>
                      </div>
                      
                      <br />
                        <div class='col-sm-5'>
                        <br />
                          <button type="submit" class="btn btn-primary">Unduh Data</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /end download data -->

                        

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

     <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

    <!-- Initialize datetimepicker -->
      <script>
          $('.jsDate').datetimepicker({
            onSelect: function(dateText, inst) {
              var date = $val();

              if($("#myDatepicker").val()!="" && $("#myDatepicker2").val()!=""){
              var url = "<?=base_url('unduhdata');?>?start="+$("#myDatepicker").val()+'&end='+$("#myDatepicker2").val();
              alert(url);
              }
          }
           
          });
         
          </script>

      <script>
      $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
      });
      </script>

       <script>
      $('#myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
      });
      </script>

      <script>
      $(document).ready(function() {
          $('datatable').dataTable();
      } );
      </script>
      
  </body>
</html>