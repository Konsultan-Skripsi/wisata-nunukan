	
<div class="row white-bg dashboard-header">
	<h2>Detail Wisata</h2>
	<br>
	<div>
		<a class="btn btn-info" href=" <?= base_url(); ?>wisata">Kembali</a>
	</div>
	<br>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>Foto Wisata</th>
				<th>Nama Wisata</th>
				<th>Lokasi Wisata</th>
				<th>Keterangan</th>
				<th>Latitude</th>
				<th>Longitude</th>
				</tr>
			</thead>
			<tbody>
					<tr>
					<td> <img src="<?= base_url(); ?>./image/foto/<?= $wisata['foto_wisata']; ?>" style="max-width: 70px; max-height: 60px;"> </td>
					<td> <?= $wisata['nama_wisata']; ?> </td>
					<td> <?= $wisata['lokasi_wisata']; ?> </td>
					<td> <?= $wisata['keterangan']; ?> </td>
					<td> <?= $wisata['latitude']; ?> </td>
					<td> <?= $wisata['longitude']; ?> </td>
					</tr>
			</tbody>
		</table>

</div>