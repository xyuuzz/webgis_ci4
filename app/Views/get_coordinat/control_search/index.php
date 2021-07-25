<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>

<div class="card">
    <div class="card-header">
        <div class="search-wrapper float-right">
            <div class="input-holder">
                <input id="textsearch"type="text" class="search-input" placeholder="Cari TPS">
                <button class="search-icon"><span></span></button>
            </div>
            <button class="close"></button>
        </div>
        <ul class="search-tooltip custom">

        </ul>
    </div>
    <div class="card-body">
    <?= $this->include("get_coordinat/control_search/map") ?>
    </div>
</div>

<?= $this->endSection() ?>