   <div>
        <div class="row">
            <!-- <img src="" alt=""> -->
            <h3 style="margin-left: 20px;">Wisata Kabupaten Nunukan</h3>
        </div>
        <?php 
        foreach ($wisata as $d): ?> 
            <div class="row col-md-12">
            <div class="col-md-10">
            <a href="<?= base_url(); ?>aplikasi_mo/det_wis/<?= $d['id_wisata']; ?>">
            <img src="<?= base_url(); ?>image/foto/<?= $d['foto_wisata']; ?>" style="width: 100px; height: 100px;">
            <label><?= $d ['nama_wisata']; ?></label>
            </a>
            </div>
            </div> 
        <?php endforeach; ?> 
        </div>
            
        </div>
        </div>
    </div>