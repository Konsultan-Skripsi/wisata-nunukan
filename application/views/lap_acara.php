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
        <div class="wrapper-content">
            <h2>Data Acara Kebudayaan</h2>
            <br>
            <?= validation_errors(); ?>
        <div class="card col-md-6">
              <form action="" method="post">
              <div class="form-group"><label>Nama Pelapor</label> <input type="text" name="nama_user" id="nama_user" class="form-control"></div>
              <div class="form-group"><label>No Tlp/WA</label> <input type="text" name="no_tlp" id="no_tlp" class="form-control"></div>
              <div class="form-group"><label>Nama Acara</label> <input type="text" name="nama_acara" id="nama_acara" class="form-control"></div>
              <div class="form-group"><label>Tempat</label> <input type="text" name="tempat_acara" id="tempat_acara" class="form-control"></div>
              <div class="form-group"><label>Tanggal Acara</label> <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"><label>S/D</label><input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"></div>
              <div class="form-group"><label>Jam Acara</label> <input type="time" name="jam_mulai" id="jam_mulai" class="form-control"><label>S/D</label><input type="time" name="jam_selesai" id="jam_selesai" class="form-control"></div>
              <div class="form-group"><label>Keterangan</label> <input type="text" name="ket_acara" id="ket_acara" class="form-control"></div>
              <div>
              <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="tambah"><strong>Tambah</strong></button>
              </div>
              <div>
              <button class="btn btn-sm btn-warning pull-left m-t-n-xs" type="submit" name="tambah"><strong>Batal</strong></button>
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

</body>
</html>
