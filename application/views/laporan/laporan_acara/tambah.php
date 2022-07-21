
        <div>
        <div class="wrapper-content">
            <h2>Data Acara Kebudayaan</h2>
            <?= validation_errors(); ?>
        <div class="card col-md-8">
              <form action="" method="post">
              <input type="hidden" name="verifikasi_acara" value="1">
              <div class="form-group"><label>Nama Pelapor</label> <input type="text" name="nama_user" id="nama_user" class="form-control input-lg m-b"></div>
              <div class="form-group"><label>No Tlp/WA</label> <input type="text" name="no_tlp" id="no_tlp" class="form-control input-lg m-b"></div>
              <div class="form-group"><label>Nama Acara</label> <input type="text" name="nama_acara" id="nama_acara" class="form-control input-lg m-b"></div>
                
              <div class="form-group"><label>Tanggal Acara</label> <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control input-lg m-b"><label>S/D</label><input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control input-lg m-b"></div>
              <div class="form-group"><label>Jam Acara</label> <input type="time" name="jam_mulai" id="jam_mulai" class="form-control input-lg m-b"><label>S/D</label><input type="time" name="jam_selesai" id="jam_selesai" class="form-control input-lg m-b"></div>
              <div class="form-group"><label>Keterangan</label> <textarea type="text" name="keterangan" id="keterangan" class="form-control" cols="10" rows="3"></textarea></div>
                <div class="form-group"><label>Tempat</label> <input type="text" name="tempat_acara" id="tempat_acara" class="form-control input-lg m-b">
                <input type="hidden" name="lang_acara" id="lang" class="form-control">
              <input type="hidden" name="long_acara" id="long" class="form-control">
              <div id="googleMap" style="width:90%;height:300px;"></div>
                </div>
                
              <div>
              <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="tambah"><strong>Tambah</strong></button>
              </div>
              <div>
              <button class="btn btn-sm btn-warning pull-left m-t-n-xs" type="reset" name="tambah"><strong>Batal</strong></button>
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