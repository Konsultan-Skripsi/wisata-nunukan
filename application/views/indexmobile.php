<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Halaman Wisata</title>

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
     <link href="<?= base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet"> 

    <!-- Gritter -->
    <link href="<?= base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body style="margin: 0px; background-color: white;">
    <div id="wrapper" style="max-height: 100%; max-width: 100%; \">
       
        <div class="white-bg">
        <div>
        <div class="row col-md-12">
            <div class="row col-md-6">
                <img src="<?= base_url(); ?>/image/foto/background.jpg" style="max-width: 100%;">
            </div>
            <!-- <div class="row col-md-6">
            <h2 style="margin-left: 10px;">Budaya dan Wisata Kabupaten Nunukan</h2>
            </div> -->
        </div>
        
        <div class="row">
            <div class="col-md-5">
                <div class="ibox">
                    <div class="ibox-content">
                        <div>
                             <a href="<?= base_url(); ?>aplikasi_mo/hal_wisata"><img src="<?= base_url(); ?>/image/wisata.png" style="width: 50px; height: 50px;">Wisata</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="ibox">
                    <div class="ibox-content">
                        <div>
                             <a href="<?= base_url(); ?>aplikasi_mo/hal_budaya"><img src="<?= base_url(); ?>/image/budaya.png" style="width: 50px; height: 50px;">Budaya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="ibox">
                    <div class="ibox-content">
                        <div>
                             <a href="<?= base_url(); ?>laporan/laporan_wisata/tambah"><img src="<?= base_url(); ?>/image/lap_wisata.png" style="width: 50px; height: 50px;">Pelaporan Wisata</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="ibox">
                    <div class="ibox-content">
                        <div>
                             <a href="<?= base_url(); ?>laporan/laporan_acara/tambah"><img src="<?= base_url(); ?>/image/lap_acara.png" style="width: 50px; height: 50px;">Pelaporan Acara</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
   	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!--<script src="<?= base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

</body>
</html>