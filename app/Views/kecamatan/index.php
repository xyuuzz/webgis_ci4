<?= $this->extend("template/app") ?>


<?= $this->section("content") ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url("buat/kecamatan") ?>" class="btn btn-wide btn-success m-2">Tambah Data</a>
    </div>
    <div class="card-body">
        
    <div class="main-card mb-3 card">
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
                <tr class="text-center">
                    <th scope="row">1</th>
                    <td>9128371</td>
                    <td>Pedurungan</td>
                    <td>
                        <a href="<?= base_url() . "/geojson/" . "100061219081653.geojson"?>" target="_BLANK">
                        100061219081653.geojson
                        </a>
                    </td>
                    <td style="background: #990099"></td>
                    <td>
                        <button class="btn btn-primary btn-wide">Edit</button>
                        <button class="btn btn-danger btn-wide">Hapus</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</div>

<?= $this->endSection() ?>