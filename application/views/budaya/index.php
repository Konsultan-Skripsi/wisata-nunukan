<div class="row white-bg dashboard-header">
		<h2>Data Budaya</h2>
		<br>
		<div>
			<a href=" <?= base_url(); ?>budaya/tambah" class="btn btn-primary">Tambah Data</a>
		</div> <br>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Nama Budaya</th>
				<th>Keterangan</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($budaya as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $d['nama_budaya']; ?> </td>
					<td> <?= $d['keterangan']; ?> </td>
					<td>
						<a href=" <?= base_url(); ?>budaya/detail/<?= $d['id_budaya'] ?> " class="btn btn-info" >Detail</a>
						<a href=" <?= base_url(); ?>budaya/edit/<?= $d['id_budaya'] ?> "class="btn btn-primary">Edit</a>
						<a href=" <?= base_url(); ?>budaya/hapus/<?= $d['id_budaya'] ?> " class="btn btn-danger" onclick="return confirm('yakin data mau dihapus?');">Hapus</a>
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>

	</div>
	
