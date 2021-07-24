<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url("buat/kecamatan") ?>" class="btn btn-wide btn-success m-2">Tambah Data</a>
    </div>
    <div class="card-body">
        
    <div class="main-card mb-3 card">

        <?php if(session("success")) : ?>
            <div class="alert alert-success mb-3 mt-1">
                <?= session("success") ?>
            </div>
        <?php endif; ?>

        <div class="card-body"><h5 class="card-title">Tabel Kecamatan</h5>
            <table class="mb-0 table">
                <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kecamatan</th>
                    <th>Geo JSON</th>
                    <th>Warna</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($daftar_kecamatan)) : ?>
                    <?php foreach($daftar_kecamatan as $kecamatan) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no ?></th>
                            <td><?= $kecamatan->kode ?></td>
                            <td><?= $kecamatan->nama_kecamatan ?></td>
                            <td >
                                <a href="<?= base_url() . "/geojson/" . $kecamatan->geo_json?>" target="_BLANK" >
                                Klik Untuk melihat file JSON
                                </a>
                            </td>
                            <td style="background: <?= $kecamatan->warna ?>"></td>
                            <td class="d-flex justify-content-center">
                                <a href="<?= base_url() . "/edit/kecamatan/" . $kecamatan->id_kecamatan ?>" class="btn btn-primary btn-wide">
                                    Edit
                                </a>
                                <form action="<?= base_url() . "/delete/kecamatan/" . $kecamatan->id_kecamatan?>" class="ml-3" method="POST">
                                    <input required type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button type='submit' class="btn btn-danger btn-wide">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</div>

<?= $this->endSection() ?>