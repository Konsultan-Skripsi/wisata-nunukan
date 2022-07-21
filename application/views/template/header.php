<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Halaman</title>

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <!-- <link href="<?= base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet"> -->

    <!-- Gritter -->
    <!-- <link href="<?= base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet"> -->

    <!-- <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet"> -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>
<body style="margin: 0px; background-color: white;">
        <div id="wrapper" class="white-bg dashbard-1" style="max-height: 100%; max-width: 100%;">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="background-color: gray; margin-bottom: 0">
            <ul class="nav navbar-top-links gray-bg">
              
                <li>
                    <a href="<?= base_url(); ?>aplikasi_mo/">
                        <i class="fa fa-home col-sm-3"></i>
                    </a>
                </li>
              
                 <li>
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ul col-sm-3"></i><span class=""></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="<?= base_url(); ?>aplikasi_mo/hal_wisata">Wisata</a></li>
                            <li><a href="<?= base_url(); ?>aplikasi_mo/hal_budaya">Budaya</a></li>
                            <li><a href="<?= base_url(); ?>laporan/laporan_wisata/tambah">Pelaporan Wisata</a></li>
                            <li><a href="<?= base_url(); ?>laporan/laporan_acara/tambah">Pelaporan Acara</a></li>
                        </ul>
                    </li>
              
                
                 <li>
                    <a href="<?= base_url(); ?>aplikasi_mo/info">
                        <i class="fa fa-info col-sm-3"></i>
                    </a>
                </li>

            </ul>
        </nav>
        </div>