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

   <!-- modal notifikasi -->
   <div class="modal fade"  id="modalnotif" role="dialog" >
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"> Peringatan !!</h4>
                        </div>
                        
                        <?php if($this->session->userdata('jabatan') == 'Operator'): ?>
                        <div class="modal-body">
                          <p>Inkubator mengalami <b>High Temperature</b>, Segera turunkan Suhu, Pilih konfirmasi untuk melihat riwayat detail sensor ke menu kontrol</p>
                        </div>
                        <div class="modal-footer">
                         <a href="<?php echo base_url();?>kontrol" type="button" class="btn btn-primary">Konfirmasi</a>
                        </div>
                        
                        <?php else: ?>
                        <div class="modal-body">
                          <p>Inkubator mengalami <b>High Temperature</b>, Segera turunkan Suhu, Pilih konfirmasi untuk melihat riwayat detail sensor ke menu data</p>
                        </div>
                        <div class="modal-footer">
                         <a href="<?php echo base_url();?>data" type="button" class="btn btn-primary">Konfirmasi</a>
                        </div>
                        <?php endif; ?>
                        
                      
                      </div>
                    </div>
                  </div>
              <!-- end modal logout -->





    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.js"></script>


<script>
      $(document).ready(function(){
          setInterval(function(){ 
            var url = "<?=base_url('get-data-monitoring');?>";
            $.get(url, function( data ) {
                var val = JSON.parse(data);
                $('#nilai-suhu').text(val.suhu+"°C");
                if(val.suhu>=40){
                  $('#modalnotif').modal('show');
                }
                
            }); 
            // console.log(url);
          }, 500);
      });
</script>



