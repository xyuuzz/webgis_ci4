<div id="mapid" style="width: 100%; height: 600px;"></div>

<script>

var mymap = L.map('mapid').setView([-6.1932337,106.8484909], 11);

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
                arr_kawasan.push([layer.feature.properties.name, [layer._renderer._center.lat, layer._renderer._center.lng]]);
                layer.bindPopup(`Kawasan: ${layer.feature.properties.name}<br>Kota: <?=  strtoupper(explode(".",$geojson->geo_json)[0]) ?>`);
            });
        });
    <?php endforeach; ?>

    return { kawasan: arr_kawasan.map(v => v[0]), koordinat: arr_kawasan.map(v => v[1]) };
};

$(".close").on("click", () => {
    $("#auto_com").addClass("d-none");
    $("#searchjkt").val("");
});


func_map().then( ({kawasan, koordinat}) => {
    let urutan = -1;

    $("#searchjkt").on("keyup", e => {
        // 40 down, 38 up
        if(e.keyCode === 40 && $(".search-wrapper").hasClass("active")) // jika user down 
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
        else if(e.keyCode !== 13) // jika user enter
        {
            const query = $(e.target).val();
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

        if($("#auto_com").html() === "") // jika auto complete kosong
        {
            urutan = -1;
            $("#auto_com").html('<li class="list-group-item p-2 bg-secondary text-light">Tidak menemukan apapun</li>');
        } 

    });
});


</script>