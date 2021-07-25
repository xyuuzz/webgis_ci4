<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>


<div class="card">
    <div class="card-header">
        Tampilan Map Cluster TPS Kota Bandung
    </div>
    <div class="card-body">
    <?= $this->include("get_coordinat/cluster_marker/map") ?>
    </div>
</div>

<?= $this->endSection() ?>