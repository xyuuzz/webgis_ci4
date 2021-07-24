<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.1753871,106.8249588], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);


// routing
// adalah sebuah fitur pada map, berfungsi menunjukan jalur tercepat untuk mencapai tujuan kita
// http://www.liedman.net/leaflet-routing-machine/tutorials/basic-usage/
    L.Routing.control({
        waypoints: [
            L.latLng(-6.179567219796954, 106.82050848097326), // koordinat Kantor BNI Menara Merdeka / berangkat
            L.latLng(-6.175343270854476, 106.82716035919901) // koordinat Monas / tujuan
        ],
        routeWhileDragging: true
        }).addTo(mymap);
</script>