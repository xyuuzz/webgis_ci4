<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-7.0364893,110.0217322], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

// peta indonesia geojson
// $.getJSON("<?= base_url() ?>/geojson/indonesia-edit.geojson", data => {
//     geoLayer = L.geoJson(data, {
//         style: feature => {  // untuk style polygon pada leaflet
//             return {color: "green", fillColor: "red"} 
//         } 
//     }).addTo(mymap);

//     geoLayer.eachLayer( layer => {
//         layer.bindPopup(`Provinsi: ${layer.feature.properties.state}`)
//     });
// });

// peta kecamatan provinsi Jawa Tengah Indonesia
$.getJSON("<?= base_url() ?>/geojson/kecamatan jateng geojson.json", data => {
    geoLayer = L.geoJson(data, {
        style: feature => {  // untuk style polygon pada leaflet
            return {color: "blue", fillColor: "red", opacity: 0.7, fillOpacity: 0.3} 
        } 
    }).addTo(mymap);

    geoLayer.eachLayer( layer => {
        layer.bindPopup(`Kecamatan: ${layer.feature.properties.kecamatan}<br>Kabupaten: ${layer.feature.properties.kabupaten}`);
    });
});

</script>