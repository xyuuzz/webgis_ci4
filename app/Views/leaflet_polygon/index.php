<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>


<div class="card">
    <div class="card-header">
        Tampilan Map dan Fitur Poligon pada Leaflet.js
    </div>
    <div class="card-body">
    <?= $this->include("leaflet_polygon/map") ?>
    </div>
</div>

<?= $this->endSection() ?>