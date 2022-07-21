<div class="row white-bg dashboard-header">
	<h2>Detail Laporan Wisata</h2>
	<br>
	<div>
		<a class="btn btn-info" href=" <?= base_url(); ?>laporan/laporan_wisata/index">Kembali</a>
	</div>
	<br>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>Nama Pelapor</th>
				<th>No Tlp</th>
				<th>Nama Wisata</th>
				<th>Lokasi Wisata</th>
				<th>Keterangan</th>
				<th>Foto Wisata</th>
				<th>Verifikasi</th>
				</tr>
			</thead>
			<tbody>
					<tr>
					<td> <?= $id_laporan ['nama_user']; ?></td>
					<td> <?= $id_laporan ['no_tlp']; ?></td>
					<td> <?= $id_laporan['nama_wisata']; ?> </td>
					<td> <?= $id_laporan['lokasi_wisata']; ?> </td>
					<td> <?= $id_laporan['ket_wisata']; ?> </td>
					<td> <img src="<?= base_url(); ?>./image/foto/<?= $id_laporan['foto_wisata']; ?>" style="max-width: 70px; max-height: 60px;" > </td>
					<td> <?= $id_laporan['verifikasi_wisata']; ?> </td>
					</tr>
			</tbody>
		</table>
</div>