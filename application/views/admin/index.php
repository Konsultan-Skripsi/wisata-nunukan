<div class="row white-bg dashboard-header">
	<h2>Data admin</h2>
	<br>
	<a href=" <?= base_url(); ?>admin/tambah " class="btn btn-primary" >Tambah Data</a>
	<br><br>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				 foreach ($username as $d): ?>
					<tr>
					<td> <?= $no; ?> </td>
					<td> <?= $d['username']; ?> </td>
					<td> <?= $d['password']; ?> </td>
					<td>
						<a href=" <?= base_url(); ?>admin/edit/<?= $d['id_admin'] ?> " class="btn btn-warning">edit</a>
						<a href=" <?= base_url(); ?>admin/hapus/<?= $d['id_admin'] ?> " onclick="return confirm('data akan dihapus');" class="btn btn-danger">hapus</a>
					</td>
					</tr>
				<?php $no++; endforeach; ?>
			</tbody>
		</table>
</div>