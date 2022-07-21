<div class="row white-bg dashboard-header">
	<h2>Ubah Laporan Wisata</h2>
	<br>
	<div class="card col-md-6">
		<?= validation_errors(); ?>
		<form  method="post" action="" enctype="multipart/form-data">
			<div>
				<input type="hidden" name="foto_lama" value="<?= $id_laporan ['foto_wisata']; ?>">
			</div>
			<div>
				<input type="hidden" name="id_user" value="<?= $id_laporan ['id_user']; ?>">
			</div>
			<div class="form-group"><label>Nama Wisata</label> <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="<?= $id_laporan ['nama_wisata']; ?>"></div>
			<div class="form-group"><label>Lokasi Wisata</label> <input type="text" name="lokasi_wisata" id="lokasi_wisata" class="form-control" value="<?= $id_laporan ['lokasi_wisata']; ?>"></div>
			<div class="form-group"><label>Keterangan</label> <input type="textarea" name="keterangan" id="keterangan" class="form-control" value="<?= $id_laporan ['ket_wisata']; ?>"></div>
			<div class="form-group"><label>Foto Wisata</label> <input type="file" name="foto_wisata" id="foto_wisata" class="form-control" value="<?= $id_laporan ['foto_wisata']; ?>"></div>
			<div class="form-group"><label>Verifikasi</label> <input type="text" name="verifikasi" id="verifikasi" class="form-control" value="<?= $id_laporan ['verifikasi_wisata']; ?>"></div>
			<div>
			<button class="btn btn-sm btn-primary pull-right" type="submit" name="ubah"><strong>Ubah</strong></button>
			</div>
		</form>
	</div>
</div>