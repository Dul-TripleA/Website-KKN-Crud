<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('PerangkatDesa/update/' . $perangkatDesa['id']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="nama" value="<?= $perangkatDesa['nama']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $perangkatDesa['foto']; ?>">
        <div class="row mt-2">
            <div class="col-5">
                <div class="card bg-light" style="border: none;">
                    <label for="gambar" class="form-label mt-3 mb-3 mx-3">Gambar</label>
                    <div class="col mx-4">
                        <img src="<?= base_url('img/' . $perangkatDesa['foto']); ?>" alt="" class="img-preview img-thumbnail" width="320">
                    </div>
                    <div class="col my-3">
                        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" value="<?= old('foto'); ?>" type="file" id="foto" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card bg-light" style="border: none;">
                    <div class="mt-3 mx-3 mb-1">
                        <label for="nama" class="form-label">Nama Perangkat Desa</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= $perangkatDesa['nama']; ?>" id="nama" name="nama" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    
                    <div class="mt-2 mx-3 mb-3">
                        <label for="jabatan" class="form-label">Jabatan : </label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $perangkatDesa['jabatan']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class=" btn btn-primary mt-3" style="width: 100%;" type="submit">Update Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>