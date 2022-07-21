<div>
<div class="row">
	<h3 style="margin-left: 15px;">Data Pelaporan Wisata</h3>
</div>

<?php 
        foreach ($data as $d): ?> 
            <div class="row col-md-12">
            <div class="col-md-10">
            <a href="<?= base_url(); ?>aplikasi_mo/detail_wisata/<?= $d['id_laporan_wisata']; ?>">
            <img src="<?= base_url(); ?>image/foto/<?= $d['foto_wisata']; ?>" style="width: 100px; height: 100px;">
            <label><?= $d ['nama_wisata']; ?></label>
            </a>
            </div>
            </div> 
        <?php endforeach; ?> 

        
        </div>
        </div>
    </div>