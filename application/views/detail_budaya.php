	<div>
        <div class="row">
            <h3 style="margin-left: 15px;">Detail Budaya</h3>
        </div>
            <div class="row col-md-12">
           
            <div class="col-md-8">
            <label>Nama Budaya : <?= $budaya ['nama_budaya']; ?></label>
            </div>
            <div class="col-md-8">
            <label>Keterangan : <?= $budaya ['keterangan']; ?></label>
            </div>
              <div class="col-md-10">
            <label>gambar : </label>
                <img src="<?= base_url(); ?>image/foto/<?= $budaya['foto_budaya']; ?>" style="max-width: 110px; max-height: 80px;">
            </div>
            </div>
        
        </div>
        </div>
    </div>
