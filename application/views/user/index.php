<div class="row white-bg dashboard-header">
		<h2>Data User</h2>

		<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Username</th>
				<th>No.Tlp</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($user as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $d['nama_user']; ?> </td>
					<td> <?= $d['no_tlp']; ?> </td>
					<td>
						<a href=" <?= base_url(); ?>user/edit/<?= $d['id_user'] ?> " class="btn btn-warning">edit</a>
						<a href=" <?= base_url(); ?>user/hapus/<?= $d['id_user'] ?> " onclick="return confirm('yakin data mau dihapus?');" class="btn btn-danger">hapus</a>
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>

</div>

	