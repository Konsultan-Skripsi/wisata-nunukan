<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Halaman Budaya</title>

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
        <div id="page-wrapper" class="white-bg dashbard-1">
        <div class="row border-bottom">
        </div>
        <div>
        <div class="wrapper-content white-bg">
            <h2>Data Wisata Baru</h2>
            <br>
            <?= validation_errors(); ?>
        <div class="card col-md-6">
              <form action="" method="post">
              <div class="form-group"><label>Nama Pelapor</label> <input type="text" name="username" id="username" class="form-control"></div>
              <div class="form-group"><label>No Tlp/WA</label> <input type="text" name="no_tlp" id="no_tlp" class="form-control"></div>
              <div class="form-group"><label>Nama Wisata</label> <input type="text" name="nama_wisata" id="nama_wisata" class="form-control"></div>
              <div class="form-group"><label>Lokasi Wisata</label> <input type="text" name="lokasi_wisata" id="lokasi_wisata" class="form-control"></div>
              <div class="form-group"><label>Foto Wisata</label> <input type="file" name="foto_wisata" id="foto_wisata" class="form-control"></div>
              <div class="form-group"><label>Keterangan</label> <input type="text" name="ket_acara" id="ket_acara" class="form-control"></div>
              <div>
              <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="tambah"><strong>Tambah</strong></button>
              </div>
              <div>
              <button class="btn btn-sm btn-warning pull-left m-t-n-xs" type="submit" name="kembali"><strong>Batal</strong></button>
              </div>
              </form>
        </div>
        </div>   
    </div>

            </div>
        </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>


    <!-- Custom and plugin javascript -->
    <script src="<?= base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

</body>
</html>
