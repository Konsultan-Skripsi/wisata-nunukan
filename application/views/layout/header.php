<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SKRIPSI</title>

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?= base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?= base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Jo</strong>
                             </span> <span class="text-muted text-xs block">Admin</span> </span> </a>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>admin"><i class="fa fa-user"></i> <span class="nav-label">Admin</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>user"><i class="fa fa-user"></i> <span class="nav-label">User</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>budaya"><i class="fa fa-diamond"></i> <span class="nav-label">Budaya</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>wisata"><i class="fa fa-picture-o"></i> <span class="nav-label">Wisata</span></a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>laporan/laporan_wisata"><i class="fa fa-diamond"></i> <span class="nav-label">Laporan Wisata</span></a>
                    </li>
                     <li>
                        <a href="<?= base_url(); ?>laporan/laporan_acara"><i class="fa fa-diamond"></i> <span class="nav-label">Laporan Acara</span></a>
                    </li>
                    <!-- <li>
                        <a href="<?= base_url(); ?>aplikasi_mo">apk mo</a>
                    </li> -->
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?= base_url(); ?>login">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>