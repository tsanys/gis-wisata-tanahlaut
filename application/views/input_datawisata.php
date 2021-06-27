<?php
  if (isset($error_upload)) {
    echo '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'. $error_upload .'</div>';
  }

  if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible show fade">';
    echo $this->session->flashdata('pesan');
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  }
?>

<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-5 col-12">
      <div class="card mt-3">
        <div class="card-content">
          <div class="card-body">
            <?php 
              echo validation_errors();
              echo form_open_multipart('wisata/input');
            ?>
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <label>Nama Wisata</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" value="<?= set_value('nama_wisata') ?>" required class="form-control"
                    name="nama_wisata" placeholder="Nama Wisata">
                </div>

                <div class="col-md-4">
                  <label>Deskripsi</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" value="<?= set_value('deskripsi') ?>" required class="form-control"
                    name="deskripsi" placeholder="Deskripsi">
                </div>

                <div class="col-md-4">
                  <label>Alamat</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" value="<?= set_value('alamat') ?>" required class="form-control" name="alamat"
                    placeholder="Alamat">
                </div>

                <div class="col-md-4">
                  <label>Kategori</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" value="<?= set_value('kategori') ?>" required class="form-control" name="kategori"
                    placeholder="Kategori">
                </div>

                <div class="col-md-4">
                  <label>Latitude</label>
                </div>
                <div class="col-md-8 form-group d-flex align-items-center">
                  <input class="form-check-input w-20 me-2" type="checkbox" id="CheckLat">
                  <input type="text w-80" id="Latitude" value="<?= set_value('latitude') ?>" class="form-control"
                    name="latitude" placeholder="Latitude">
                </div>

                <div class="col-md-4">
                  <label>Longitude</label>
                </div>
                <div class="col-md-8 form-group d-flex align-items-center">
                  <input class="form-check-input w-20 me-2" type="checkbox" id="CheckLong">
                  <input type="text w-80 " id="Longitude" value="<?= set_value('longitude') ?>" class="form-control"
                    name="longitude" placeholder="Longitude">
                </div>

                <div class="col-md-4">
                  <label>Gambar</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="file" required class="form-control" name="gambar">
                </div>

                <div class="col-sm-12 d-flex mt-5">
                  <button type="submit" class="w-50 btn btn-primary me-1 mb-1">Simpan</button>
                  <button type="reset" class="w-50 btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>

              </div>
            </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-12">
      <div class="card mt-3">
        <div class="card-content">
          <div class="card-body">
            <form class="form form-horizontal">
              <div class="form-body">
                <div class="row">
                  <div id="mapid" style="height: 400px;"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
var curLocation = [0, 0];
if (curLocation[0] == 0 && curLocation[1] == 0) {
  curLocation = [-3.8488556, 114.8122763];
}

var mymap = L.map('mapid').setView([-3.8488556, 114.8122763], 9);
L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
  subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
  draggable: 'true'
});

marker.on('dragend', function(event) {
  var position = marker.getLatLng();
  marker.setLatLng(position, {
    draggable: 'true'
  }).bindPopup(position).update();
  $("#Latitude").val(position.lat);
  $("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function() {
  var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
  marker.setLatLng(position, {
    draggable: 'true'
  }).bindPopup(position).update();
  mymap.panTo(position);
});
mymap.addLayer(marker);

$(document).ready(function() {
  $('#Latitude').prop('readOnly', true);
  $('#Longitude').prop('readOnly', true);

  $('#CheckLat').on('click', function() {
    if ($(this).prop('checked')) {
      $('#Latitude').prop('readOnly', false);
    } else {
      $('#Latitude').prop('readOnly', true);
    }
  });
  $('#CheckLong').on('click', function() {
    if ($(this).prop('checked')) {
      $('#Longitude').prop('readOnly', false);
    } else {
      $('#Longitude').prop('readOnly', true);
    }
  });
});
</script>