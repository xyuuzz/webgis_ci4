<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>

<div class="card">
    <div class="card-header ">
        <div class="search-wrapper">
            <div class="input-holder">
                <input id="searchjkt" type="text" class="search-input" placeholder="Kawasan di Jakarta">
                <button class="search-icon"><span></span></button>
            </div>
            <button class="close"></button>
        </div>
    </div>
    <ul class="list-group ml-3 col-lg-4 mt-1 d-none" id="auto_com"></ul>
    <div class="card-body">

    <?= $this->include("polygon_geojson_database/map") ?>
    </div>
</div>

<?= $this->endSection() ?>