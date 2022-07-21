<div class="row white-bg dashboard-header">
	<h2>Ubah Laporan</h2>
	<br>
	<div>
	<?= validation_errors(); ?>
	<div class="card col-md-6">
		<form  method="post" action="">
			<input type="hidden" name="id_laporan_acara" value="<?= $lap_acara['id_laporan_acara']; ?>">
			<div class="form-group"><label>Nama Acara</label> <input type="text" name="nama_acara" id="nama_acara" class="form-control" value="<?= $lap_acara['nama_acara']; ?>"></div>
			<div class="form-group"><label>Tanggal Mulai</label> <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="<?= $lap_acara['tgl_mulai']; ?>"></div>
			<div class="form-group"><label>Tanggal Selesai</label> <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" value="<?= $lap_acara['tgl_selesai']; ?>"></div>
			<div class="form-group"><label>Jam Mulai</label> <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" value="<?= $lap_acara['jam_mulai']; ?>"></div>
			<div class="form-group"><label>Jam Selesai</label> <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" value="<?= $lap_acara['jam_selesai']; ?>"></div>
			<div class="form-group"><label>Tempat Acara</label> <input type="text" name="tempat_acara" id="tempat_acara" class="form-control" value="<?= $lap_acara['tempat_acara']; ?>"></div>
			<div class="form-group"><label>Keterangan</label> <input type="textarea" name="keterangan" id="keterangan" class="form-control" value="<?= $lap_acara['ket_acara']; ?>"></div>
			<div class="form-group"><label>Verifikasi</label> <input type="text" name="verifikasi" id="verifikasi" class="form-control" value="<?= $lap_acara['verifikasi_acara']; ?>"></div>
			<div>
			<button class="btn btn-sm btn-primary pull-right" type="submit" name="ubah"><strong>Ubah</strong></button>
			</div>
		</form>
	</div>
	</div>
</div>

