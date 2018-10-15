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
                    
                    <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
                        <li><a href="<?php echo base_url();?>kontrol">
                        <i class="fa fa-wrench"></i> Kontrol </a></li>
                        </li>
                    <?php endif; ?>
                    
                  <li><a href="<?php echo base_url();?>data">
                  <i class="fa fa-file"></i> Data </a>

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
                  <div class="x_title">
                        <h2><b>List Inkubator</b></h2>
                        
                        <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                <div class="form-group text-left">
                  <a data-toggle="modal" data-target="#modaladd" class="btn btn-primary"> Tambah Inkubator </a>
		            </div>
                    <?=$this->session->flashdata('notif')?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Inkubator</th>
                          <th>Action</th>
                          
                         

                          
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($datainkubator as $di){ 
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $di->nama_inkubator ?></td>
                                <td>
                                <a 
                                href="javascript:;"
                                data-idinkubator="<?php echo $di->id_inkubator ?>"
                                data-inkubator="<?php echo $di->nama_inkubator ?>"
                                
                                data-toggle="modal" data-target="#edit-data">
                                <a data-toggle="modal" data-target="#modalupdate<?php echo $di->id_inkubator ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Update </a>
                                </a>
                                <a data-toggle="modal" data-target="#modaldelete<?php echo $di->id_inkubator ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                                <!-- modal Tambah  Groupa Admin-->
                               
                                <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel"> Tambah Inkubator</h4>
                                        </div>
                                        <form class="form-horizontal" action="<?php echo base_url('inkubator/tambah_inkubator')?>" method="post" enctype="multipart/form-data" role="form">
                                        <div class="modal-body">
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Inkubator<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nama_inkubator" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="2" name="nama_inkubator" placeholder="Isikan Nama Inkubator" required="required" type="text">
                                          </div>
                                        </div>
                                          <br />
                                          <br />

                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                          <button  type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                <!-- end modal Tambah  -->
                                <!-- modal Edit-->
                                <?php foreach($datainkubator as $di){ ?>
                                 <div class="modal fade bs-example-modal-lg" id="modalupdate<?php echo $di->id_inkubator ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Update Data</h4>
                                        </div>
                                        <form class="form-horizontal" action="<?php echo base_url('inkubator/ubah_inkubator')?>" method="post" enctype="multipart/form-data" role="form">
                                        <div class="modal-body">
                                        <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Inkubator<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="id_inkubator" name="id_inkubator" value="<?php echo $di->id_inkubator ?>">
                                            <input value="<?php echo $di->nama_inkubator ?>" id="nama_inkubator" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_inkubator" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                          </div>
                                        </div>
                                          <br />
                                          <br />

                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button  id="send" type="submit" class="btn btn-success">Save changes</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <?php }?>
                                <!-- end modal Edit -->
                                 <!-- modal hapus -->
                                 <?php foreach($datainkubator as $di){ ?>
                                  <div class="modal fade"  id="modaldelete<?php echo $di->id_inkubator ?>" role="dialog" >
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">

                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                              </button>
                                              <h4 class="modal-title" id="myModalLabel2">Apakah anda yakin untuk menghapus</h4>
                                            </div>
                                            <div class="modal-body">
                                              <p>Anda akan menghapus data ini, tekan 'Batal' untuk kembali ke halaman atau 'Konfirmasi' untuk keluar.</p>
                                            </div>
                                            <div class="modal-footer">
                                              <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                              
                                              <a type="button" class="btn btn-default" <?php echo anchor('inkubator/hapus_inkubator/'.$di->id_inkubator,"Konfirmasi");?> </a>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <?php }?>
                                  <!-- end modal logout -->
                        
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
    
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
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
    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#idlevel').attr("value",div.data('id_level'));
            modal.find('#level').attr("value",div.data('level'));
          });
    });
</script>


    
  </body>
</html>