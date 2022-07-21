<div class="row white-bg dashboard-header">
	<h3>Tambah Data Budaya</h3>
	<br>
		<?= validation_errors(); ?>
		<div class="card col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id_katagori_info" value="1">
			</div>
			<div class="form-group"><label>Nama Budaya</label> <input type="text" name="budaya" id="budaya" class="form-control" ></div>
          	<div class="form-group"><label>Foto Budaya</label> <input type="file" name="foto_budaya" id="foto_budaya" class="form-control" ></div>
			<div class="form-group"><label>Keterangan</label> <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea></div>
              
			<div>
				<input class="btn btn-sm btn-primary pull-right" type="submit" name="tambah" value="Tambah">
			</div>
		</form>
		</div>
</div
