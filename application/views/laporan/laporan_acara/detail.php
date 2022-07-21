	
<div class="row white-bg dashboard-header">
	<h2>Laporan Acara</h2>
	<br>
	<div>
		<a href=" <?= base_url(); ?>laporan/laporan_acara" class="btn btn-info">Kembali</a>
	</div>
	<br>
	<table class="table table-bordered">
			<thead>
				<tr>
				<th>Nama Pelapor</th>
				<th>No.Tlp</th>
				<th>Nama acara</th>
				<th>Tanggal acara</th>
				<th>Jam acra</th>
				<th>Tempat acara</th>
				<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
					<tr>
					<td> <?= $lap_acara['nama_user']; ?> </td>
					<td> <?= $lap_acara['no_tlp']; ?> </td>
					<td> <?= $lap_acara['nama_acara']; ?> </td>
					<td> <?= $lap_acara['tgl_mulai']; ?> </td>
					<td> <?= $lap_acara['jam_mulai']; ?></td>
					<td><?= $lap_acara['tempat_acara']; ?></td>
					<td><?= $lap_acara['ket_acara']; ?></td>
					</tr>
			</tbody>
		</table>
</div>