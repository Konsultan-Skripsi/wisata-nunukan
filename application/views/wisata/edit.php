<div class="row white-bg dashboard-header">
	<h2>Ubah Data Wisata</h2>
	<br>
	<div>
		<?= validation_errors(); ?>
		<div class="card col-md-6">
		<form  method="post" action="" enctype="multipart/form-data">
			<div>
				<input type="hidden" name="foto_lama" value="<?= $id_wisata['foto_wisata']; ?>">
			</div>
			<div>
				<input type="hidden" name="id_katagori_info" value="2">
			</div>
			<div class="form-group"><label>Nama Wisata</label> <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="<?= $id_wisata['nama_wisata']; ?>"></div>
			<div class="form-group"><label>Lokasi Wisata</label> <input type="text" name="lokasi_wisata" id="lokasi_wisata" class="form-control" value="<?= $id_wisata['lokasi_wisata']; ?>"></div>
			<div class="form-group"><label>Foto Wisata</label> <input type="file" name="foto_wisata" id="foto_wisata" class="form-control" value="<?= $id_wisata['foto_wisata']; ?>"></div>
			<div class="form-group"><label>Keterangan</label> <textarea type="text" rows="5" cols="60" name="keterangan" id="keterangan" class="form-control" ><?= $id_wisata['keterangan']; ?></textarea></div>
			<div class="form-group"><label>Latitude</label> <input type="text" name="latitude" id="latitude" class="form-control" value="<?= $id_wisata['latitude']; ?>"></div>
			<div class="form-group"><label>Longitude</label> <input type="text" name="longitude" id="longitude" class="form-control" value="<?= $id_wisata['longitude']; ?>"></div>
			<div>
			<button class="btn btn-sm btn-primary pull-right" type="submit" name="ubah"><strong>Ubah</strong></button>
			</div>
		</form>
		</div>
	</div>
</div>

