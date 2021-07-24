<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.903363,107.6080523], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

<?php foreach($list_tps as $tps) : ?>
    L.marker([<?= $tps->latitude ?>,<?= $tps->longitude ?>])
        .addTo(mymap)
        .bindPopup('<b>TPS <?= $tps->nama_tps ?></b><br>Kec: <?= $tps->kecamatan ?>');
<?php endforeach; ?>

</script>


