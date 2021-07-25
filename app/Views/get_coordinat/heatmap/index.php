<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>

<style>
    #map { width: 800px; height: 600px; }
    body { font: 16px/1.4 "Helvetica Neue", Arial, sans-serif; }
    .ghbtns { position: relative; top: 4px; margin-left: 5px; }
    a { color: #0077ff; }
</style>

<div class="card">
    <div class="card-header">
        Tampilan HeatMap TPS Kota Bandung
    </div>
    <div class="card-body">
    <?= $this->include("get_coordinat/heatmap/map") ?>
    </div>
</div>

<?= $this->endSection() ?>