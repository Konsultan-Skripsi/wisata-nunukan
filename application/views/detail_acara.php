<div class="row white-bg dashboard-header">
	<h3 style="margin-left: 15px;">Detail Laporan Acara</h3>
	<div>
		<div class="row col-md-12">
            <div class="col-md-10">
            <label>Nama Acara : <?= $acar ['nama_acara']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Tgl Acara : <?= $acar ['tgl_mulai']; ?> SD <?= $acar ['tgl_selesai']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Tgl Acara : <?= $acar ['jam_mulai']; ?> SD <?= $acar ['jam_selesai']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Keterangan : <?= $acar ['ket_acara']; ?></label>
            
            </div>
            <div class="col-md-10">
            <label>Tempat Acara : <?= $acar ['tempat_acara']; ?></label>
            <div id="googleMap" style="width:100%;height:350px;"></div>
            <input type="hidden" id="lang" name="latitude" value="<?= $acar ['latitude']; ?>">
            <input type="hidden" id="long" name="longitude" value="<?= $acar ['longitude']; ?>">
            
            </div>
            </div> 
             <br>
          
          	<div class="col-md-10">
             <!-- <a href=" https://maps.google.com/?ll= 4.0765003,117.7336898" target="_blank" class="btn btn-info">Rute</a> -->
              <a href="  https://www.google.com/maps/@4.0765003,117.7336898,12.25z" target="_blank" class="btn btn-info">Rute</a> 
          </div>
        </div>
    </div>

</div>

 <script src="https://maps.googleapis.com/maps/api/js"></script>
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