<div class="row white-bg dashboard-header">
	<h3 style="margin-left: 15px;">Laporan Acara</h3>
	<?php foreach($join as $j): ?>
		<div class="row col-md-12">
            <div class="col-md-10">
            <a href="<?= base_url(); ?>aplikasi_mo/detail_acara/<?= $j['id_laporan_acara']; ?>">
            <label><?= $j ['nama_acara']; ?></label>
            </a>
            </div>
            </div>
        <?php endforeach; ?>
</div>