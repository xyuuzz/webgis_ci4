<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.9840669,110.4545122], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

// Polygon
// Polygon adalah fitur yang ada pada leaflet.js yang berfungsi untuk membuat ruang/bagian untuk membedakan satu wilayah dengan wilayah lainya.

var latings1 = [
    [-6.98414723488452, 110.45363712733167], // ujung jl raya tambak boyo lor
    [-6.983849056458804, 110.45239258238105],// ujung tol tambak boyo lor
    [-6.984562554517836, 110.45316505855729] // gang delta
];
var rt8 = L.polygon(latings1, {color: 'red'}).bindPopup("Wilayah RT08") .addTo(mymap).openPopup();

var latings2 = [
    [-6.983849056458804, 110.45239258238105], // ujung tol tambak boyo lor
    [-6.984562554517836, 110.45316505855729], // gang delta
    [-6.984863792624572, 110.45214934378814]  // paling atas / griya mahkota arteri baru
];
var rt10 = L.polygon(latings2, {color: 'blue'}).bindPopup("Wilayah RT10").addTo(mymap);

var latings3 = [
    [-6.984562554517836, 110.45316505855729], // gang delta
    [-6.984863792624572, 110.45214934378814], // griya mahkota arteri baru
    [-6.985481262749736, 110.4526462551192],  // tambak boyo raya
];
var rt11 = L.polygon(latings3, {color: 'orange'}).bindPopup("Wilayah RT 11").addTo(mymap);

var latings4 = [
    [-6.98414723488452, 110.45363712733167], // ujung jl raya tambak boyo lor
    [-6.985224263723204, 110.4535187872009], // masjid baitul muslimin
    [-6.985481262749736, 110.4526462551192],  // tambak boyo raya
    [-6.984562554517836, 110.45316505855729], // gang delta
];
var rt13 = L.polygon(latings4, {color: 'green'}).bindPopup("Wilayah RT 13").addTo(mymap);



</script>