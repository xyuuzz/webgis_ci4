<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>

<div class="card">
    <div class="card-header">
        Mengelompokan Wilayah dengan data GeoJSON
    </div>
    <div class="card-body">
    <?= $this->include("polygon_geojson/map") ?>
    </div>
</div>

<?= $this->endSection() ?>