
<div class="row white-bg dashboard-header">
	<h2>Form Tambah Admin</h2>
	<br>
	<?= validation_errors(); ?>
		<div class="card col-md-6">
			<form action="" method="post">
			<div class="form-group"><label>Username</label> <input type="text" name="username" id="username" class="form-control"></div>
			<div class="form-group"><label>Password</label> <input type="password" name="password" id="password" class="form-control"></div>
			<div>
			<button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="tambah"><strong>Tambah</strong></button>
			</div>
			</form>
		</div>
</div>
 