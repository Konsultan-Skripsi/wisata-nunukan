<div class="row white-bg dashboard-header">
	<h2>Laporan Acara</h2>
	<br>
	<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Nama Pelapor</th>
				<th>No.Tlp</th>
				<th>Nama acara</th>
				<th>Tanggal acara</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($lap_acara as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td><?= $d['nama_user'];  ?></td>
					<td><?= $d['no_tlp'];  ?></td>
					<td> <?= $d['nama_acara']; ?> </td>
					<td> <?= $d['tgl_mulai']; ?> </td>
					<td>
						<?php if ($d['verifikasi_acara']== 'menunggu') { ?>
						<a href=" <?= base_url(); ?>laporan/laporan_acara/detail/<?= $d['id_laporan_acara'] ?> " class="btn btn-success">Detail</a>
						<a href=" <?= base_url(); ?>laporan/laporan_acara/edit/<?= $d['id_laporan_acara'] ?>" class="btn btn-primary" onclick="return confirm('laporan telah diterima');">terima laporan</a>
						<a href=" <?= base_url(); ?>laporan/laporan_acara/hapus/<?= $d['id_laporan_acara'] ?>" class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
						<?php } else { ?> 
							<a href=" <?= base_url(); ?>laporan/laporan_acara/detail/<?= $d['id_laporan_acara'] ?> " class="btn btn-success">Detail</a>
							<a href=" <?= base_url(); ?>laporan/laporan_acara/hapus/<?= $d['id_laporan_acara'] ?>" class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
						<?php } ?>
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
</div>