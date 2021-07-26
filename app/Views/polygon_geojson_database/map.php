<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

const default_map = [[-6.1932337,106.8484909], 11];
var mymap = L.map('mapid').setView(default_map[0], default_map[1]);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);


// Menampilkan File GeoJSON yang datanya dari database
const func_map = async () => {
    let arr_kawasan = [];
    <?php foreach($list_geojson as $geojson) : ?>
        await $.getJSON("<?= base_url() . "/geojson/" . $geojson->geo_json ?>", data => {
            geoLayer = L.geoJson(data, {
                style: feature => {  // untuk style polygon pada leaflet
                    return {color: "<?= $geojson->warna ?>", fillColor: "<?= $geojson->warna ?>"} 
                } 
            }).addTo(mymap);
    
            geoLayer.eachLayer(layer => {
                // console.log(layer);
                arr_kawasan.push(layer);
                layer.bindPopup(`Kawasan: ${layer.feature.properties.name}<br>Kota: <?=  strtoupper(explode(".",$geojson->geo_json)[0]) ?>`);
            });
        });
    <?php endforeach; ?>

    return { layer: arr_kawasan };
};

$(".close").on("click", () => {
    $("#auto_com").addClass("d-none");
    $("#searchjkt").val("");
});

// [layer.feature.properties.name, [layer._renderer._center.lat, layer._renderer._center.lng]]
func_map().then( ( {layer} ) => {
    let urutan = -1,
        kawasan = layer.map(la => la.feature.properties.name);

    // marker untuk pencarian
    var marker = L.marker([0,0]);

    $("#searchjkt").on("keyup", e => {
        const query = $(e.target).val();

        marker.remove(); // hapus marker
        mymap.setView(default_map[0], default_map[1]);
        // 40 down, 38 up
        if(e.target.value === "")
        {
            $("#auto_com").html('');
        }
        else if(e.keyCode === 40 && $(".search-wrapper").hasClass("active")) // jika user down 
        {
            urutan++;
            $(`.list-group-item`).removeClass("border-primary bg-dark").addClass('bg-secondary');
            $($(`.list-group-item`)[urutan]).addClass("border-primary bg-dark");
            $("#searchjkt").val($($(`.list-group-item`)[urutan]).html());
        } 
        else if(e.keyCode === 38 && $(".search-wrapper").hasClass("active")) // jika user up
        {
            if(urutan <= 6)
            {
                urutan--;
            }
            $(`.list-group-item`).removeClass("border-primary bg-dark").addClass('bg-secondary');
            $($(`.list-group-item`)[urutan]).addClass("border-primary bg-dark");
            $("#searchjkt").val($($(`.list-group-item`)[urutan]).html());
        }
        else if(e.keyCode !== 13) // jika user menekan key selain enter
        {
            const result = kawasan.filter(key => {
                key = key.toLowerCase();
                return key.search(query) !== -1
            } );

            let el = '';
            result.forEach((key, index) => {
                if(index <= 6)
                {
                    el += `<li class="list-group-item p-2 bg-secondary text-light">${key}</li>`
                }
            });

            $("#auto_com").removeClass("d-none");
            $("#auto_com").html(el);
        }
        else if(e.keyCode === 13) // jika user enter
        { 
            $("#auto_com").addClass('d-none');
            let result = [];
            layer.forEach((la, i) => { // kita looping layer polygon tiap wilayah
                if( la.feature.properties.name === query) // jika name nya sama dengan query
                {
                    result.push(la.feature.properties.name, la.getCenter())
                }
            });
            // set lat,lng marker 
            marker.setLatLng(result[1]).bindPopup('Kawasan Ditemukan!<br>' + result[0]).addTo(mymap).openPopup();
            // set view pada map
            mymap.setView(result[1], 15);

            $("#searchjkt").val(""); // kosongkan pencarian
            $(".search-wrapper").removeClass("active"); // hapus active class pada search el
            urutan = -1;
        }

        if($("#auto_com").html() === "") // jika auto complete kosong
        {
            urutan = -1;
            $("#auto_com").html('<li class="list-group-item p-2 bg-secondary text-light">Tidak menemukan apapun</li>');
        } 

    });
});


</script>