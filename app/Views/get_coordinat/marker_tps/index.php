<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>


<div class="card">
    <div class="card-header">
        Pemetaan Tempat TPS Kota Bandung dengan Leaflet.js
    </div>
    <div class="card-body">

    <?= $this->include("get_coordinat/marker_tps/map") ?>
    </div>
</div>

<?= $this->endSection() ?>