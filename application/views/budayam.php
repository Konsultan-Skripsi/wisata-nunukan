        <div>
        <div class="row">
           
            <h3 style="margin-left: 20px;">Budaya Kabupaten Nunukan</h3>
        </div>
        <div class="row col-md-12">
            <?php foreach ($budaya as $b): ?>
                <div class="col-md-10">
            <a href="<?= base_url(); ?>aplikasi_mo/det_budaya/<?= $b['id_budaya']; ?>" style="width: 70px; height: 40px;">
            <!-- <label for="gambar"><i class="fa-pied-piper-alt"></i></label> -->
            <label for=""><?= $b['nama_budaya']; ?></label>
            </a>
            </div>
            <?php endforeach; ?>
        </div>

        
        </div>
        </div>
    </div>