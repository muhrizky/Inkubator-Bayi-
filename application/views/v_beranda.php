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
    <!-- bootstrap-daterangepicker -->
    <link  href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"><!-- bootstrap-daterangepicker -->
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
                
                  <?=$this->session->flashdata('Welcome')?>
                
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                        <h2><b>Tabel Data Bayi</b></h2>
                        <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                <div class="form-group text-left">
                <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
                  <a data-toggle="modal" data-target="#modaladd" class="btn btn-primary">Tambah Data Bayi</a>
                  <?php endif; ?>
		            </div>
                <!-- modal Tambah Bayi-->
                               
                <div class="modal fade bs-example-modal-sm" id="modaladd" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Tambah Data Bayi</h4>
                                        </div>
                                        <form class="form-horizontal" action="<?php echo base_url('beranda/tambah_bayi')?>" method="post" enctype="multipart/form-data" role="form">
                                          <div class="modal-body">
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Bayi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="namabayi" placeholder="Username tidak memuat tanda baca titik (.)" required="required" type="text">
                                            </div>
                                          </div>
                                                <div class="item form-group">
                                              <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required" name="jenis_kelamin">*</span></label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select name="jenis_kelamin" class="form-control col-md-7 col-xs-12" class="required">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                              </select>
                                              </div>
                                            </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Waktu Lahir<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div name="tanggallahir" class='input-group date' id='myDatepicker'>
                                                <input name="tanggallahir" required="required" type='text' class="form-control" class="jsDate" />
                                                <span class="input-group-addon" >
                                                  <span class="glyphicon glyphicon-calendar">
                                            </div>
                                            </div>
                                            </div>
                                            
                                            <div class="item form-group">
                                              <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Persalinan<span class="required">*</span></label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select name="persalinan" class="form-control col-md-7 col-xs-12" class="required">
                                                <option>Normal</option>
                                                <option>Caesar</option>
                                              </select>
                                              </div>
                                            </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Inkubator<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="inkubator" class="form-control" class="required">
                                            <?php foreach ($getinkubator as $value) {?>
                                                <option
                                                value="<?php echo $value->id_inkubator?>">
                                                <?php echo $value->nama_inkubator?></option>
                                                
                                              <?php }?>
                                              </select>
                                            </div>
                                          </div>
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Orang Tua<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="namaorangtua" required="required" type="text">
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
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Profil</th>
                          <th>Nama Bayi</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Persalinan</th>
                          <th>Inkubator</th>
                          <th>Nama Orang Tua</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                          
                          
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($databayi as $db){ 
                            ?>
                            
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><img style="height:50px" src="./assets/production/images/<?php echo $db->photo?>" alt="" srcset=""></td>
                              <td><?php echo $db->namabayi ?></td>
                              <td><?php echo $db->jenis_kelamin ?></td>
                              <td><?php echo $db->tanggallahir ?></td>
                              <td><?php echo $db->persalinan ?></td>
                              <td><?php echo $db->nama_inkubator ?></td>
                              <td><?php echo $db->namaorangtua ?></td>
                              <td><?php echo $db->alamat ?></td>
                              <td>
                                <a 
                                href="javascript:;"
                                data-id="<?php echo $db->id_bayi ?>"
                                data-namabayi="<?php echo $db->namabayi ?>"
                                data-jenis_kelamin="<?php echo $db->jenis_kelamin ?>"
                                data-tanggallahir="<?php echo $db->tanggallahir ?>"
                                data-persalinan="<?php echo $db->persalinan ?>"
                                data-inkubator="<?php echo $db->inkubator ?>"
                                data-namaorangtua="<?php echo $db->namaorangtua ?>"
                                data-alamat="<?php echo $db->alamat ?>"
                                data-toggle="modal" data-target="#edit-data">
                                <a href="<?php echo base_url();?>monitoring" class="btn btn-info btn-xs"><i class="fa fa-bar-chart-o"></i> Monitoring </a>
                                <a href="<?php echo base_url();?>data" class="btn btn-info btn-xs"><i class="fa fa-file"></i> Data </a>
                                <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
                                <a href="<?php echo base_url();?>kontrol" class="btn btn-info btn-xs"><i class="fa fa-wrench"></i> Kontrol </a>
                                <a data-toggle="modal" data-target="#modalupdate<?php echo $db->id_bayi ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                <a data-toggle="modal" data-target="#modaldelete<?php echo $db->id_bayi ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                                <?php endif; ?>
                              </td>
                              
                               <!-- modal Edit bayi-->
                               <?php foreach($databayi as $db){ ?>
                                <div class="modal fade bs-example-modal-sm" id="modalupdate<?php echo $db->id_bayi ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Update Data Bayi</h4>
                                        </div>
                                        <form class="form-horizontal" action="<?php echo base_url('beranda/ubah_bayi')?>" method="post" enctype="multipart/form-data" role="form">
                                          <div class="modal-body">
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Bayi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="hidden" id="id_bayi" name="id_bayi" value="<?php echo $db->id_bayi ?>">
                                              <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $db->namabayi ?>" data-validate-length-range="6" data-validate-words="2" name="namabayi" placeholder="Username tidak memuat tanda baca titik (.)" required="required" type="text">
                                            </div>
                                          </div>
                                          <br />
                                            <br />
                                                <div class="item form-group">
                                              <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required" name="jenis_kelamin">*</span></label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select required="required" name="jenis_kelamin" class="form-control col-md-7 col-xs-12" value="<?php echo $db->jenis_kelamin ?>" class="required">
                                                <option></option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                              </select>
                                              </div>
                                            </div>
                                            <br />
                                          <br />
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Waktu Lahir<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div name="tanggallahir" class='input-group date myDatepicker2' id='myDatepicker2'>
                                                <input  name="tanggallahir" required="required" value="<?php echo $db->tanggallahir ?>" type='text' class="form-control" class="jsDate" />
                                                <span class="input-group-addon" >
                                                  <span class="glyphicon glyphicon-calendar">
                                            </div>
                                            </div>
                                            </div>
                                            <br />
                                            <br />

                                            <div class="item form-group">
                                              <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Persalinan<span class="required">*</span></label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select  required="required" name="persalinan" class="form-control col-md-7 col-xs-12" value="<?php echo $db->persalinan ?>" class="required">
                                                <option></option>
                                                <option>Normal</option>
                                                <option>Caesar</option>
                                              </select>
                                              </div>
                                            </div>
                                            <br />
                                          <br />
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Inkubator<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="inkubator" class="form-control" class="required">
                                            <?php foreach ($getinkubator as $value) {?>
                                                <option
                                                value="<?php echo $value->id_inkubator?>"
                                                <?php echo ($db->inkubator == $value->id_inkubator)?"selected":""?>>
                                                <?php echo $value->nama_inkubator?></option>
                                                
                                              <?php }?>
                                              </select>
                                            </div>
                                          </div>
                                          <br />
                                          <br />
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Orang Tua<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="name" value="<?php echo $db->namaorangtua ?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="namaorangtua" required="required" type="text">
                                            </div>
                                          </div>
                                          <br />
                                          <br />
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="alamat" value="<?php echo $db->alamat ?>" required="required" name="alamat" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            </div>
                                            <br />
                                          <br />
                                            <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="file" name="userfile" size="20" /> <small>Maximumum Upload Foto Size:2 MB<br />Maximumum Dimmension Foto 1024x728 </small>
                                            </div>
                                            <br />
                                            <br />
                                          <br />
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
                                  <?php }?>
                              
                                 <!-- modal hapus -->
                                 <?php foreach($databayi as $db){ ?>
                                  <div class="modal fade"  id="modaldelete<?php echo $db->id_bayi ?>" role="dialog" >
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
                                              
                                              <a type="button" class="btn btn-success" <?php echo anchor('beranda/hapus_bayi/'.$db->id_bayi,"Konfirmasi");?> </a>
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
      $('#myDatepicker').datetimepicker({
        format: 'DD MMMM YYYY HH:mm:ss'
      });
      </script>

      <script>
      $('.myDatepicker2').datetimepicker({
        format: 'DD MMMM YYYY HH:mm:ss'
      });
      </script>
      <script>
       
      </script>



      

  </body>
</html>