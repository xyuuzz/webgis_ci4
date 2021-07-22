<?= $this->extend("template/app") ?>

<?= $this->section("content") ?>

<form class="needs-validation addKecamatanForm" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="nama_kecamatan">Nama Kecamatan</label>
        <input name="nama_kecamatan" type="text" id="nama_kecamatan" placeholder="Nama Kecamatan"
        class="form-control" 
        aria-describedby="validationTooltipName" required>

        <?php if(session("error")) : ?>
            <?php if(isset(session("error")["nama_kecamatan"])) : ?>
                <div class="invalid-tooltip">
                    <?= session("error")["nama_kecamatan"] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="kode">Kode</label>
        <input type="number" id="kode" placeholder="Kode Kecamatan" name="kode" required
        class="form-control <?= session("error") ? ( isset(session("error")["kode"]) ? "is-invalid" : "") : "" ?>">

        <?php if(session("error")) : ?>
            <?php if(isset(session("error")["kode"])) : ?>
                <div class="invalid-tooltip">
                    <?= session("error")["kode"] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="color">Warna</label>
        <input type="color" class="form-control col-lg-4" id="color" name="color" required
        class="form-control <?= session("error") ? ( isset(session("error")["color"]) ? "is-invalid" : "") : "" ?>">

        <?php if(session("error")) : ?>
            <?php if(isset(session("error")["color"])) : ?>
                <div class="invalid-tooltip">
                    <?= session("error")["color"] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="geo_json">GEO JSON</label>
        <input type="file" class="form-control col-lg-4" id="geo_json" name="geo_json" required
        class="form-control <?= session("error") ? ( isset(session("error")["geo_json"]) ? "is-invalid" : "") : "" ?>">

        <?php if(session("error")) : ?>
            <?php if(isset(session("error")["geo_json"])) : ?>
                <div class="invalid-tooltip">
                    <?= session("error")["geo_json"] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <button class="btn btn-primary addKecamatan" type="submit">Submit form</button>
</form>


<?= $this->endSection() ?>