<div class="row white-bg dashboard-header">
	<h2>Ubah Data User</h2>
	<div><br>
		<?= validation_errors(); ?>
		<div class="card col-md-6">
			<input type="hidden" name="id_user" value="<?= $id_user['id_user']; ?>">
			<form action="" method="post">
			
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control" value="<?= $id_user['nama_user']; ?>">
			</div>
			<div class="form-group">
				<label for="notlp">No.Tlp</label>
				<input type="text" name="notlp" id="notlp" class="form-control" value=" <?= $id_user['no_tlp']; ?> ">
			</div>
			<div>
			<button class="btn btn-sm btn-primary pull-right" type="submit" name="ubah"><strong>Ubah</strong></button>
			</div>
		</form>

	</div>
</div>
