<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SKRIPSI | Login</title>

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>
<body class="gray-bg">

	<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Silahkan LOGIN</h3>
            <?= $this->session->flashdata('message');  ?>
            <?= validation_errors(); ?>
            <form method="post" action=" <?= base_url('login'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="login">Login</button>
            </form>
        </div>
    </div>
	
	<script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>