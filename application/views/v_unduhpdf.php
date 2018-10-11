<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<title>.</title>
      <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <style type="text/css">
        table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
        table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
        h1 {color: #000033}
        h2 {color: #000055}
        h3 {color: #000077}

        body{
        font-size:11px;    
        }
        .tandatangan{
        text-align:center; width:325px;float:left;
        }
        .tandatangan2{
        text-align:center; margin-left:345px;
        }  
          
    </style>
    <!-- Setting CSS Tabel data yang akan ditampilkan -->
    <style type="text/css">
        #tabel2 {
            
            border-collapse: collapse;
            width: 100%;
        }
        #tabel2 th, #tabel2 td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #tabel2 tr:nth-child(even){background-color: #f2f2f2;}
        #tabel2 tr:hover {background-color: #ddd;}
        #tabel2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #DDDDFF;
        }
    }
    </style>
</head>
<body onload="window.print();">
    <page backtop="14mm" backbottom="14mm" backleft="1mm" backright="10mm">
    <page_header>
        <!-- Setting Header -->
        <table class="page_header">
        <tr>
            <td align="center" style="text-align: center; width: 70%"  >
            <font style="font-size: 25px"><b> LABORATORIUM TEKNIK KONTROL OTOMAT</b></font> <br />
            <font style="font-size: 18px">Departemen Teknik Elektro Universitas Diponegoro</font>
            <br />Jalan Prof. H. Soedarto, Tembalang, Kota Semarang, Jawa Tengah 50275</td>
        </tr>
        </table>
    </page_header>
    <br />
    <table>
        <tr>
            <td style="text-align: center;    width: 50%"><b>LAPORAN MONITORING INKUBATOR BAYI</b></td>
            <!-- <td style="text-align: right;    width: 10%"><?php echo date('d/m/Y'); ?></td> -->
        </tr>
    </table>
    <br />
    <br />
    <div class="row justify-content-center">
    <div  class="col-md-6 col-sm-6 col-xs-6"> 
    <?php 
    foreach ($inkubatorresult -> result() as $row)
    {
        ?>
    
        <h5 >Nama Bayi       : <?php echo $row->namabayi; ?> </h5>
        <h5 >Jenis Kelamin   : <?php echo $row->jenis_kelamin; ?></h5>
        <h5 >Tanggal Lahir   : <?php echo $row->tanggallahir; ?></h5>
        <h5  >Nama Orang Tua : <?php echo $row->namaorangtua; ?></h5>
        <br />
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6"> 
        <h5>Persalinan     : <?php echo $row->persalinan; ?></h5>
        <h5>Inkubator      : <?php echo $row->nama_inkubator; ?></h5>
        <h5 >Alamat        : <?php echo $row->alamat; ?></h5>
        <br />
    </div>
    <?php
        }
        ?>
        </div>
    <table id="tabel2">
        <tr>
            <th><b>No.</b></th>
            <th><b>Tanggal dan Waktu</b></th>
            <th><b>Suhu</b></th>
            <th><b>Kelembapan</b></th>
            <th><b>Berat Badan</b></th>
            

        </tr>
        <?php 
        $no=1;
        foreach ($babymonitoring2 -> result() as $row)
        {
        ?>
        <tr>
            <td style="text-align: center; width=50px;"><?php echo $no++ ?></td>
            <td style="text-align: center; width=100px;"><?php echo $row->waktu; ?></td>
            <td style="text-align: center; width=100px;"><?php echo $row->suhu; ?>°C</td>
            <td style="text-align: center; width=87px;"><?php echo $row->lembab; ?>%</td>
            <td style="text-align: center; width=75px;"><?php echo $row->bb; ?> gram</td>
            
        </tr>
        <?php
        }
        ?>
    </table>
 
    <br>
    <br>
    <br>
    <h5 class="tandatangan" >
<br/>
    Mengetahui<br/>
    Kepala Laboratorium Rumah Sakit<br/>
  <br/><br/><br/><br/><hr/>
  DR. dr. Nita Ratna Dewanti, Sp.   
</h5>
<h5 class="tandatangan2">
    <br/>
    Semarang, 
    <?php echo date('d F Y'); ?><br/>
  Petugas<br/>
  <br/><br/>
  <br />
<br/><hr/>
<!-- Dokter Yayayn -->
<?php echo $getNama?>  
</h5>
    </body>