<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('Kategori/update/' . $kategori['id_kategori']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="kategori" value="<?= $kategori['kategori']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $kategori['sampul']; ?>">
        <div class="row mt-2">
            <div class="col-5">
                <div class="card bg-light" style="border: none;">
                    <label for="gambar" class="form-label mt-3 mb-3 mx-3">Gambar</label>
                    <div class="col mx-4">
                        <img src="<?= base_url('img/' . $kategori['sampul']); ?>" alt="" class="img-preview img-thumbnail" width="320">
                    </div>
                    <div class="col my-3">
                        <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" value="<?= old('sampul'); ?>" type="file" id="sampul" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card bg-light" style="border: none;">
                    <div class="mt-3 mx-3 mb-1">
                        <label for="kategori" class="form-label">Nama Kategori :</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" value="<?= $kategori['kategori']; ?>" id="kategori" name="kategori" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('kategori'); ?>
                        </div>
                    </div>
                    <div class="mt-2 mx-3 mb-3">
                        <label for="ket" class="form-label">Keterangan :</label>
                        <input type="text" class="form-control <?= ($validation->hasError('ket')) ? 'is-invalid' : ''; ?>" value="<?= $kategori['ket']; ?>" id="ket" name="ket">
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