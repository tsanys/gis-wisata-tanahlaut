<div id="mapid" style="height: 500px;"></div>

<script>
var mymap = L.map('mapid').setView([-3.8838001, 114.7444269], 9.5);

L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
  subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
}).addTo(mymap);

var redIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

<?php 
    foreach ($wisata as $key => $value) { ?>
L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
  icon: redIcon
}).addTo(mymap).bindPopup(
  "<img class='mb-2' src='<?= base_url('gambar/'.$value->gambar) ?>' width='100%'>" +
  "<b><?= $value->nama_wisata ?></b><br />" +
  "<?= $value->kategori ?><br />" +
  "<a href='<?= base_url('wisata/detail/'.$value->id_wisata) ?>' class='btn btn-outline-primary d-block btn-sm mt-1'>Details</a>", {
    minWidth: 300
  }
);
<?php } ?>
</script>