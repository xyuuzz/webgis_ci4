<div id="mapid" style="width: 100%; height: 600px;"></div>
<script>

    // ambil div dengan id mapid
    // set view berisi koordinat peta, dapat diambil di url google maps dengan angka yang ada di belakang @
	var mymap = L.map('mapid').setView([-6.9841543,110.4536335], 70);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(mymap);


    var marker_bpd = L.icon({
        iconUrl : "<?= base_url("/leaflet/images/stie_bpd.jpeg") ?>", // format gambar yg digunakan wajib png
        shadowSize : [50, 64],
        iconSize : [25, 25],
        iconAnchor : [10, 10],
        popUpAnchor : [-3, -10]
    });
    // membuat lingkaran/circle, argumen circle berisi koordinat peta
    var circle_bpd = L.circle([-6.983991964693624, 110.4541950854914], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 15 // radius lingkaran
    }).addTo(mymap);
    var bpd_marker = L.marker([-6.983991964693624, 110.4541950854914], {icon: marker_bpd}).bindPopup("Area Kampus STIE BPD Jateng").addTo(mymap);

    // konfigurasi untuk custom icon marker
    var conf_icon = L.icon({
        iconUrl : "<?= base_url("/leaflet/images/lipai.jpg") ?>", // format gambar yg digunakan wajib png
        shadowSize : [50, 64],
        iconSize : [38, 38],
    });

    // membuat marker / penanda pada peta, argumen marker berisi koordinat
    var marker1 = L.marker([-6.9841543,110.4536335]).addTo(mymap)
                .bindPopup('Kost Putri Pak Kaji'); // untuk menambahkan info/pop op jika marker ditekan
    
    var marker2 = L.marker([-6.983942131529892, 110.45381541539444], {icon: conf_icon}).addTo(mymap)
                .bindPopup('Bengkel Magic Putra Blitar') 
                .openPopup();
                
    var marker3 = L.marker([-6.985182054910602, 110.45349413195340]).addTo(mymap)
                .bindPopup('Masjid Baitul Muslimin') 
</script>