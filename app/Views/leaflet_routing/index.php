<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>


<div class="card">
    <div class="card-header">
        Tampilan Map dan Jalur dari Kantor BNI Merdeka ke Monas
    </div>
    <div class="card-body">
    <?= $this->include("leaflet_routing/map") ?>
    </div>
</div>

<?= $this->endSection() ?>