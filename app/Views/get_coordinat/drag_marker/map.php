<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>
var curlLocation = [-6.984, 110.452809];
if(curlLocation[0] === 0 && curlLocation[1] === 0)
{
    curlLocation = [-6.9840669,110.4545122];
}

var mymap = L.map('mapid').setView([-6.9840669,110.4545122], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);

var marker = new L.marker(curlLocation, {
    draggable : 'true'
});

marker.on('dragend', e => {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
        draggable : 'true'
    }).bindPopup(`${ position.lat }, ${ position.lng }`).openPopup();

    $("#latitude").val(position.lat);
    $("#longitude").val(position.lng).keyup();
});

$("#latitude,#longitude").change( () => {
    var position = [parseInt( $("#latitude").val() ), parseInt( $("#longitude").val() )];
    marker.setLatLng(position, {
        draggable : 'true'
    }).bindPopup(position).update();

    mymap.panTo(position);
} );

mymap.addLayer(marker);

</script>