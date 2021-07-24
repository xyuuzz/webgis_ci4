<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>


<div class="card">
    <div class="card-header">
        Mendapatkan Koordinat Peta Dengan Leaflet
    </div>
    <div class="card-body">

        <form action="#" method="POST">
        <?= csrf_field() ?>
        
        <div class="form-group position-relative">
            <label for="latitude">Value Latitude</label> <!-- Latitude adalah garis lintang, yaitu garis yang sejajar dengan khatulistiwa. 90 derajat dengan kutub utara & selatan -->
            <input class="form-control col-lg-4" type="text" name="lat" id="latitude">
        </div>

        <div class="form-group">
            <label for="longitude">Value Longitude</label> <!-- Longitude adalah garis bujur, yaitu garis yang membentang dari utara ke selatan. Disebut juga garis meridian -->
            <input class="form-control col-lg-4" type="text" name="long" id="longitude">
        </div>

        <div class="form-group">
            <label for="popupDesc">Tambahkan Popup Marker</label> 
            <input class="form-control col-lg-4" type="text" name="popupDesc" id="popupDesc">
        </div>

        <button type="submit" class="btn btn-primary mb-4" >Masukan Koordinat ke Database</button>
        </form>

    <?= $this->include("get_coordinat/drag_marker/map") ?>
    </div>
</div>

<?= $this->endSection() ?>