<div class="row white-bg dashboard-header">
	<h2>Laporan Wisata</h2>
	<br>
	<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Nama Pelapor</th>
				<th>No.Tlp</th>
				<th>Nama Wisata</th>
				<th>Lokasi Wisata</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($data as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $d['nama_user']; ?> </td>
					<td> <?= $d['no_tlp']; ?> </td>
					<td> <?= $d['nama_wisata']; ?> </td>
					<td> <?= $d['lokasi_wisata']; ?> </td>
					<td>
						<?php if ($d['verifikasi_wisata']== 'menunggu') { ?>
						<a href=" <?= base_url(); ?>laporan/laporan_wisata/detail/<?= $d['id_laporan_wisata'] ?> " class="btn btn-success">Detail</a>
						<a href=" <?= base_url(); ?>laporan/laporan_wisata/edit/<?= $d['id_laporan_wisata'] ?>" class="btn btn-primary" onclick="return confirm('laporan telah diterima');">terima laporan</a>
						<a href=" <?= base_url(); ?>laporan/laporan_wisata/hapus/<?= $d['id_laporan_wisata'] ?>" class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
						<?php } else { ?> 
							<a href=" <?= base_url(); ?>laporan/laporan_wisata/detail/<?= $d['id_laporan_wisata'] ?> " class="btn btn-success">Detail</a>
							<a href=" <?= base_url(); ?>laporan/laporan_wisata/hapus/<?= $d['id_laporan_wisata'] ?>" class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
						<?php } ?> 
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
</div>
	