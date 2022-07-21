<div class="row white-bg dashboard-header">
	<h2>Detail Budaya</h2>
	<br>
	<div>
		<a class="btn btn-info" href=" <?= base_url(); ?>budaya">Kembali</a>
	</div>
	<br><br>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th>Nama Budaya</th>
		<th>Keterangan</th>
          <th>Foto</th>
		</tr>
	</thead>
		<tbody>
			<tr>
			<td> <?= $id_budaya['nama_budaya']; ?> </td>
			<td> <?= $id_budaya['keterangan']; ?> </td>
              <td> <img src="<?= base_url(); ?>./image/foto/<?= $id_budaya['foto_budaya']; ?>" style="max-width: 70px; max-height: 60px;"> </td>
			</tr>
			</tbody>
	</table>

</div>


