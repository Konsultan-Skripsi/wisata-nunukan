        <div>
        <div class="wrapper-content white-bg">
            <h2>Data Wisata Baru</h2>
            <br>
            <?= validation_errors(); ?>
        <div class="card col-md-6">
              <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group"><label>Nama Pelapor</label> <input type="text" name="username" id="username" class="form-control"></div>
              <div class="form-group"><label>No Tlp/WA</label> <input type="text" name="no_tlp" id="no_tlp" class="form-control"></div>
              <div class="form-group"><label>Nama Wisata</label> <input type="text" name="nama_wisata" id="nama_wisata" class="form-control"></div>
              <div class="form-group"><label>Foto Wisata</label> <input type="file" name="foto_wisata" id="foto_wisata" class="form-control"></div>
              <div class="form-group"><label>Lokasi Wisata</label> <input type="text" name="lokasi_wisata" id="lokasi_wisata" class="form-control">
                <br>
              <input type="hidden" name="lang_wisata" id="lang" class="form-control">
              <input type="hidden" name="long_wisata" id="long" class="form-control">
              <div id="googleMap" style="width:90%;height:300px;"></div>
                </div>
              <div class="form-group"><label>Keterangan</label> <textarea name="keterangan" id="ket_acara" cols="10" rows="3" class="form-control"></textarea></div>
              <div>
              <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="tambah"><strong>Tambah</strong></button>
              </div>
              <div>
              <button class="btn btn-sm btn-warning pull-left m-t-n-xs" type="reset" name="batal"><strong>Batal</strong></button>
              </div>
              </form>
        </div>
        </div>   
    </div>

            </div>
        </div>
        </div>
    </div>

<script src="https://maps.google.com/maps/api/js"></script>
<script>

// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lang").value = posisiTitik.lat();
    document.getElementById("long").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(4.05529,117.6651),
    zoom:11,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);

</script>