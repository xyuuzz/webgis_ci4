<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>

<div class="card">
    <div class="card-header ">
        Berikut adalah Base Map
    </div>
    <div class="card-body">

    <?= $this->include("base_map/map") ?>
    </div>
</div>

<?= $this->endSection() ?>