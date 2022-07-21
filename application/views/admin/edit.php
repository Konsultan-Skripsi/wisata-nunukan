<div class="row white-bg dashboard-header">
	<h2>Form Udah Admin</h2>
	<br>
	<?= validation_errors(); ?>
		<div class="card col-md-6">
			<input type="hidden" name="id_admin" value="<?= $id_admin['id_admin']; ?>">
			<form action="" method="post">
			<div class="form-group"><label>Username</label> <input type="text" name="username" id="username" class="form-control" value="<?= $id_admin['username']; ?>"></div>
			<div class="form-group"><label>Password</label> <input type="password" name="password" id="password" class="form-control" value="<?= $id_admin['password']; ?>"></div>
			<div>
			<button class="btn btn-sm btn-primary pull-right" type="submit" name="ubah"><strong>Ubah</strong></button>
			</div>
			</form>
		</div>
</div>
