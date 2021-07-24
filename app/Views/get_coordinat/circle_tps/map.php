<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>
var mymap = L.map('mapid').setView([-6.9004659,107.6094256], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

<?php foreach($list_tps as $tps) : ?>
    L.circle([<?= $tps->latitude ?>,<?= $tps->longitude ?>], {
        color: 'blue',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 300 
    }).bindPopup("TPS: <?= $tps->nama_tps ?>").addTo(mymap);
<?php endforeach; ?>



</script>