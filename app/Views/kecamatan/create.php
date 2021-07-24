<?= $this->extend("template/app") ?>

<?= $this->section("content") ?>

<form class="needs-validation addKecamatanForm" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <?php if(isset($kecamatan)) : ?>
        <input type="hidden" name="_method" value="PATCH">
    <?php endif; ?>

    <div class="form-group">
        <label for="nama_kecamatan">Nama Kecamatan</label>
        <input name="nama_kecamatan" type="text" id="nama_kecamatan" placeholder="Nama Kecamatan"
        class="form-control" 
        aria-describedby="validationTooltipName" required value="<?= isset($kecamatan) ? $kecamatan["nama_kecamatan"] : "" ?>">

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
        class="form-control <?= session("error") ? ( isset(session("error")["kode"]) ? "is-invalid" : "") : "" ?>" value="<?= isset($kecamatan) ? $kecamatan["kode"] : "" ?>">

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
        class="form-control <?= session("error") ? ( isset(session("error")["color"]) ? "is-invalid" : "") : "" ?>" value="<?= isset($kecamatan) ? $kecamatan["warna"] : "" ?>">

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
        <input type="file" class="form-control col-lg-4" id="geo_json" name="geo_json"
        class="form-control <?= session("error") ? ( isset(session("error")["geo_json"]) ? "is-invalid" : "") : "" ?>" >
        
        <?php if(isset($kecamatan)) : ?>
            <a target="_BLANK" class="btn btn-warning mt-2" href="<?= base_url() . "/geojson/" . $kecamatan["geo_json"] ?>">File JSON</a>
        <?php endif; ?>

        <?php if(session("error")) : ?>
            <?php if(isset(session("error")["geo_json"])) : ?>
                <div class="invalid-tooltip">
                    <?= session("error")["geo_json"] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <button class="btn btn-primary addKecamatan" type="submit"
    onclick=kecamatan(<?= isset($kecamatan) ? "'update/kecamatan/{$kecamatan['id_kecamatan']}'" : "'store/kecamatan'" ?>)>Submit form</button>
</form>


<?= $this->endSection() ?>