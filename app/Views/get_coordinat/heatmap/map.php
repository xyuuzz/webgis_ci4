<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.9004659,107.6094256], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

// membuat heatmap
var heat = L.heatLayer([
    <?php foreach($list_tps as $tps) : ?>
        [ <?= $tps->latitude ?>, <?= $tps->longitude ?>, 50], // lat, lng, intensity
    <?php endforeach; ?>
], {radius: 25}).addTo(mymap);



</script>