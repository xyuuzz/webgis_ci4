<div id="mapid" style="width: 100%; height: 600px;"></div>
<script>

    // ambil div dengan id mapid
    // set view berisi koordinat peta, dapat diambil di url google maps dengan angka yang ada di belakang @
	var mymap = L.map('mapid').setView([-6.1753871,106.8249588], 17);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(mymap);


    // Polyline adalah garis custom yang ada pada peta, dibawah ini adalah syntax membuat polyline
    // Membuat Polyline Multi Dimensi / terdapat lebih dari 1 baris,
    // https://leafletjs.com/reference-1.7.1.html#polyline

    var latlngs = [
        [
            [-6.1753603957670755, 106.82721717096503], // monas
            [-6.174063279650952, 106.82806158143931],
            [-6.172788618707938, 106.82906472758488],
            [-6.172756618802986, 106.82911300735286],
            [-6.171865954247769, 106.8292793043133],
            [-6.171721954450781, 106.82924711780596],
            [-6.171599287926172, 106.82914519386604],
            [-6.1715352879890215, 106.82903254109033],
            [-6.171508621346261, 106.82890915947884],
            [-6.171519288003526, 106.8272193678433],
            [-6.171748621082804, 106.82722473226117] //Taman monas
        ],
        [
            [-6.170521954578995, 106.82424211585392], // istana merdeka
            [-6.170564621287378, 106.82453715885],
            [-6.1711832881560085, 106.82456398093946],
            [-6.171188621487943, 106.82716572361646],
            [-6.171199288151644, 106.82860875202904],
            [-6.171417954710334, 106.82916128707177],
            [-6.171604621213426, 106.82940268587686],
            [-6.1723672865285435, 106.82952606748835],
            [-6.172420619726296, 106.82944560121997],
            [-6.172425953045775, 106.82935440611585],
            [-6.172393953128088, 106.82927930426537],
            [-6.1723459532479445, 106.82920956683279] // persimpangan Jl Medan Merdeka Utara
        ]
    ];
    var polyline = L.polyline(latlngs, {color: 'blue'}).bindPopup("<b>Mau ke Taman Monas</b>").addTo(mymap);

    // marker
    var marker1 = L.marker([-6.1718979541973376, 106.82723546109696]).addTo(mymap)
                .bindPopup('Tempat Tujuan: <br>Taman Monas')
                .openPopup(); 
    var marker2 = L.marker([-6.170521954578995, 106.82424211585392]).addTo(mymap)
                .bindPopup('Istana Merdeka');
    var marker3 = L.marker([-6.175375270560848, 106.82715499479309]).addTo(mymap)
                .bindPopup('Objek Monas');

    
</script>