<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<title>.</title>
    <style type="text/css">
        table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
        table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
        h1 {color: #000033}
        h2 {color: #000055}
        h3 {color: #000077}
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
    </style>
</head>
<body onload="window.print();">
    <page backtop="14mm" backbottom="14mm" backleft="1mm" backright="10mm">
    <page_header>
        <!-- Setting Header -->
        <table class="page_header">
        <tr>
            <!-- <img style="img-align: left;    width: 10%" src="<?php echo base_url();?>assets/production/images/baby-incubators.png" class="img-responsive"> -->
             <!-- <td style="text-align: left;    width: 10%">LABORATORIUM BAYI</td> -->
            <td align="center"style="text-align: center; width: 70%"  >
            <font style="font-size: 25px"><b>LABORATORIUM INKUBATOR BAYI</b></font> <br />
            <font style="font-size: 18px"> <b>Rumah Sakit Sumber Waras Pemalang</b></font>
            <br />Jalan Jend Sudirman Timur No. 69, Pemalang | Telp: (0284) 367769</td>
        </tr>
        </table>
    </page_header>
    <br />
    <table>
        <tr>
            <td style="text-align: center;    width: 50%">LAPORAN MONITORING INKUBATOR BAYI</td>
            <!-- <td style="text-align: right;    width: 10%"><?php echo date('d/m/Y'); ?></td> -->
        </tr>
    </table>
    <br />
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
            <td style="text-align: center; width=75px;"><?php echo $row->bb; ?> Kg</td>
            
        </tr>
        <?php
        }
        ?>
    </table>
    <!-- Setting Footer -->
    <!-- <page_footer>
        <table class="page_footer">
        <tr>
            <td style="width: 50%; text-align: left">
            Dicetak oleh: Admin
            </td>
            <td style="width: 50%; text-align: right">
            Halaman [[page_cu]]/[[page_nb]]
            </td>
        </tr>
        </table>
    </page_footer> -->
    </page>
    <!-- //</body> -->