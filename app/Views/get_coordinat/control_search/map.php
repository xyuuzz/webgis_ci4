<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.9004659,107.6094256], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

// data untuk property marker, berisi lat, lng dan nama tps
var data = [
    <?php foreach($list_tps as $tps) : ?>
        {"loc":[<?= $tps->latitude ?>,<?= $tps->longitude ?>], "title":"<?= $tps->nama_tps ?>"},
    <?php endforeach; ?>
];

// el input search marker layer
var markersLayer = new L.LayerGroup().addTo(mymap);	// layer contain searched elements

// control/config search element
var controlSearch = new L.Control.Search({
    layer: markersLayer,
    zoom: 20,
    initial: false,
    collapsed: true,
    autoCollapse: true,
    firstTipSubmit: true
});

// tambahkan control/config nya ke dalam map kita
mymap.addControl( controlSearch );

// looping data untuk menampilkan marker ke map kita
for(i in data) {
    var title = data[i].title,	// value searched
        loc = data[i].loc,		// position found
        marker = new L.Marker(new L.latLng(loc), {title: title} ); //set property searched
    marker.bindPopup('TPS: '+ title );
    markersLayer.addLayer(marker);
}

$('#textsearch').on('keyup', e => {
    if(e.keyCode === 13) // jika yang ditekan adalah tombol enter : 
    {
        $(".search-button")[0].click(); // click tombol search button milik map
        $('#textsearch').val('');
        $('.search-wrapper.active').removeClass('active');
        $("#searchtext9,.search-button,.search-cancel").removeClass("d-none");
        $(".search-input:nth-child(2)").addClass("d-none");
    }
    else
    {
        controlSearch.searchText( e.target.value.toUpperCase() );
        $("#searchtext9,.search-button,.search-cancel").addClass("d-none");
        // setTimeout(() => {
        //     const arr_saran = [...$(".search-tooltip")[0].childNodes];
        //     let el = '';
        //     arr_saran.forEach(el => {
        //         el += el;
        //     });
        //     $(".search-wrapper").after(el);
        // }, 400);
    }
});


</script>