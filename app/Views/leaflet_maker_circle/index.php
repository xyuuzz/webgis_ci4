<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>



<div class="card">
    <div class="card-header">
        Tampilan Map
    </div>
    <div class="card-body">
    <?= $this->include("leaflet_maker_circle/map") ?>
    </div>
</div>

<?= $this->endSection() ?>