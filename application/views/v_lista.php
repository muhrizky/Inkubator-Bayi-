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
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
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
            <div class="x_context">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                        <h2><b>List Admin</b></h2>
                        <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                <div class="form-group text-left">
                  <a data-toggle="modal" data-target="#modaladd" class="btn btn-primary">Tambah List Admin</a>
		            </div>
                <!-- modal Tambah Admin-->
                               
                <div class="modal fade bs-example-modal-sm" id="modaladd" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Tambah Admin</h4>
                                        </div>
                                        <form class="form-horizontal" action="<?php echo base_url('lista/tambah_admin')?>" method="post" enctype="multipart/form-data" role="form">
                                          <div class="modal-body">
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="User_Name" placeholder="Username tidak memuat tanda baca titik (.)" required="required" type="text">
                                            </div>
                                          </div>
                                                <div class="item form-group">
                                              <label for="password" class="control-label col-md-3">Password<span class="required">*</span></label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="Password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                              </div>
                                            </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="nama_lengkap" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_lengkap" placeholder="Nama Lengkap User" required="required" type="text">
                                            </div>
                                          </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Group Admin<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select name="jabatan" class="form-control" class="required">
                                                
                                              <?php foreach ($getgroup as $value) {?>
                                                <option
                                                value="<?php echo $value->id_level?>">
                                                <?php echo $value->level?></option>
                                                
                                              <?php }?>
                                              </select>
                                            </div>
                                          </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">No. Handphone <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="tel" id="telephone" name="no_hp" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                            </div>
                                          </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <textarea id="textarea" required="required" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                            </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="file" name="userfile" size="20" /> <small>Maximumum Upload Foto Size:2 MB<br />Maximumum Dimmension Foto 1024x728 </small>
                                            </div>
                                            
                                          </div>
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
                    <?=$this->session->flashdata('notif')?>
                    <!-- <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?> -->

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Profil</th>
                          <th>Nama Lengkap</th>
                          <th>Group</th>
                          <th>No.Hp</th>
                          <th>Alamat</th>
                          <th>Aksi</th>

                          
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($admin as $ad){ 
                            ?>
                            
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $ad->User_Name ?></td>
                              <td><img style="height:50px" src="./assets/production/images/<?php echo $ad->photo?>" alt="" srcset=""></td>
                              <td><?php echo $ad->nama_lengkap ?></td>
                              <td><?php echo $ad->level ?></td>
                              <td><?php echo $ad->no_hp ?></td>
                              <td><?php echo $ad->alamat ?></td>
                              <td>
                                <a 
                                href="javascript:;"
                                data-id="<?php echo $ad->id ?>"
                                data-UserName="<?php echo $ad->User_Name ?>"
                                data-Password="<?php echo $ad->Password ?>"
                                data-Nama_lengkap="<?php echo $ad->nama_lengkap ?>"
                                data-jabatan="<?php echo $ad->jabatan ?>"
                                data-nohp="<?php echo $ad->no_hp ?>"
                                data-alamat="<?php echo $ad->alamat ?>"
                                data-toggle="modal" data-target="#edit-data">
                                <a data-toggle="modal" data-target="#modalupdate<?php echo $ad->id ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                </a>
                                <a data-toggle="modal" data-target="#modalupdatepassword<?php echo $ad->id ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Ubah Password </a>
                                </a>
                                <a data-toggle="modal" data-target="#modaldelete<?php echo $ad->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                              </td>
                              
                               <!-- modal Edit-->
                               <?php foreach($admin as $ad){ ?>
                                  <div class="modal fade bs-example-modal-lg" id="modalupdate<?php echo $ad->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <input type="hidden" id="id" name="id" value="<?php echo $ad->id ?>">
                                            <input id="UserName" class="form-control col-md-7 col-xs-12" value="<?php echo $ad->User_Name ?>" data-validate-length-range="6" data-validate-words="2" name="User_Name" placeholder="Username tidak memuat tanda baca titik (.)" required="required" type="text">
                                          </div>
                                        </div>
                                          <br />
                                          <br />
                                          <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nama_lengkap" class="form-control col-md-7 col-xs-12" value="<?php echo $ad->nama_lengkap ?>" data-validate-length-range="6" data-validate-words="2" name="nama_lengkap" placeholder="Nama Lengkap dari User" required="required" type="text">
                                          </div>
                                        </div>
                                          <br />
                                          <br />
                                            <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Group Admin<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12"  >
                                            <select  required="required" class="form-control" value="<?php echo $ad->jabatan ?>" id="jabatan" name="jabatan">
                                              <option ></option>
                                              <?php foreach ($getgroup as $value) {?>
                                                <option
                                                value="<?php echo $value->id_level?>"
                                                <?php echo ($ad->jabatan == $value->id_level)?"selected":""?>>
                                                <?php echo $value->level?></option>
                                                
                                              <?php }?>
                                            </select>
                                          </div>
                                        </div>
                                          <br />
                                          <br />
                                          <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">No. Handphone <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="tel" id="nohp" name="no_hp" value="<?php echo $ad->no_hp ?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                          </div>
                                        </div>
                                          <br />
                                          <br />
                                          <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="alamat" required="required" name="alamat" value="<?php echo $ad->alamat ?>" class="form-control col-md-7 col-xs-12">
                                          </div>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="file" name="userfile"  > <small>Maximumum Upload Foto Size:2 MB<br />Maximumum Dimmension Foto 1024x728 </small>
                                            </div>
                                            <br />
                                            <br />
                                          <br />
                                          </div>
                                          <br />
                                          <br />
                                          </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button	 type="submit" class="btn btn-success">Simpan Perubahan</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                               <?php }?>
                                <!-- end modal Edit -->
                                <!-- modal Update Password -->
                                <?php foreach($admin as $ad){ ?>
                                  <div class="modal fade"  id="modalupdatepassword<?php echo $ad->id ?>" role="dialog" >
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">

                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                              </button>
                                              <h4 class="modal-title" id="myModalLabel2">Update Password</h4>
                                            </div>

                                            <form class="form-horizontal" action="<?php echo base_url('lista/updatepassword')?>" method="post" enctype="multipart/form-data" role="form">
                                            <div class="modal-body">
                                              <div class="item form-group">
                                                <label for="password" class="control-label col-md-12">Password Baru<span class="required">*</span></label>
                                                  <div class="col-md-12 col-sm-6 col-xs-12">
                                                  <input type="hidden" id="id" name="id" value="<?php echo $ad->id ?>">
                                                   <input id="Password" type="password" name="Password"  data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                              </div>
                                          </div>
                                          <br />
                                          <br />
                                        <br />
                                            </div>
                                            <div class="modal-footer">
                                              <a type="button" class="btn btn-default" data-dismiss="modal" >Batal</a>
                                              
                                              <button	 type="submit" class="btn btn-success">Simpan Perubahan</button>
                                            </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                      <?php }?>
                                  <!-- end modal update Password -->
                                 <!-- modal hapus -->
                                 <?php foreach($admin as $adm){ ?>
                                  <div class="modal fade"  id="modaldelete<?php echo $adm->id ?>" role="dialog" >
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
                                              <a type="button" class="btn btn-default" data-dismiss="modal" >Batal</a>
                                              
                                              <a type="button" class="btn btn-success" <?php echo anchor('lista/hapus_admin/'.$adm->id,"Konfirmasi");?> </a>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <?php }?>
                                  <!-- end modal hpaus -->
                        
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
    <!-- PNotify -->
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
     <!-- Parsley -->
     <script src="<?php echo base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
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
    
    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#UserName').attr("value",div.data('User_Name'));
            modal.find('#Password').html(div.data('Password'));
            modal.find('#jabatan').attr("value",div.data('jabatan'));
            modal.find('#nohp').attr("value",div.data('no_hp'));
            modal.find('#alamat').attr("value",div.data('alamat'));
        });
    });
</script>
    


    
  </body>
</html>