<div class="row white-bg dashboard-header">
		<h2>Data Wisata</h2>
		<br>
		<div>
			<a href=" <?= base_url(); ?>wisata/tambah "class="btn btn-primary">Tambah Data</a>
		</div><br>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Nama Wisata</th>
				<th>Keterangan</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($wisata as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $d['nama_wisata']; ?> </td>
					<td> <?= $d['keterangan']; ?> </td>
					<td>
						<a href=" <?= base_url(); ?>wisata/detail/<?= $d['id_wisata'] ?> " class="btn btn-success">Detail</a>
						<a href=" <?= base_url(); ?>wisata/edit/<?= $d['id_wisata'] ?> " class="btn btn-warning">Edit</a>
						<a href=" <?= base_url(); ?>wisata/hapus/<?= $d['id_wisata'] ?> " class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>

	</div>
	