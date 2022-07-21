<div class="row white-bg dashboard-header">
	<h2>Detail Laporan Wisata</h2>
	<div>
            <div class="row col-md-12">
            <div class="col-md-10">
            <label>Nama Objek Wisata : <?= $wisata ['nama_wisata']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Foto Wisata : <img src="<?= base_url(); ?>image/foto/<?= $wisata ['foto_wisata']; ?>" style="max-width: 110px; max-height: 80px;"></label>
            
            </div>
            <div class="col-md-10">
            <label>Keterangan : <?= $wisata ['ket_wisata']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Alamat : <?= $wisata ['lokasi_wisata']; ?></label>
            </div>
              
            <div id="googleMap" style="width:90%;height:300px;"></div>
            <input type="hidden" id="lang" name="latitude" value="<?= $wisata ['latitude']; ?>">
            <input type="hidden" id="long" name="longitude" value="<?= $wisata ['longitude']; ?>">
           
            </div> 
        
        </div>
        </div>
	
</div>

<script src="https://maps.google.com/maps/api/js"></script>
<script>
 
  mylang = document.getElementById("lang");
    mylong = document.getElementById("long");
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(4.05529,117.6651),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(mylang['value'],mylong['value']),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>