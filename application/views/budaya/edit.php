<div class="row white-bg dashboard-header">
	<h3>Ubah Data Budaya</h3>
	<br>
		<?= validation_errors(); ?>
		<div class="card col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id_katagori_info" value="1">
              <input type="hidden" name="old_foto" value="<?= $id_budaya['foto_budaya']; ?>">
			</div>
			<div class="form-group"><label>Nama Budaya</label> <input type="text" name="budaya" id="budaya" class="form-control" value="<?= $id_budaya['nama_budaya']; ?>"></div>
          	<div class="form-group"><label>Foto Budaya</label> <input type="file" name="foto_budaya" id="foto_budaya" class="form-control" value="<?= $id_budaya['foto_budaya']; ?>"></div>
			<div class="form-group"><label>Keterangan</label> <textarea type="text" name="keterangan" id="keterangan" class="form-control"><?= $id_budaya['keterangan']; ?></textarea></div>
			<div>
				<input class="btn btn-sm btn-primary pull-right" type="submit" name="ubah" value="Ubah">
			</div>
		</form>
		</div>
</div>

