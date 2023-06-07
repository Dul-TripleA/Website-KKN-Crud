<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('Kategori/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-2">
            <div class="col-5">
                <div class="card bg-light" style="border: none;">
                    <label for="gambar" class="form-label mt-3 mb-3 mx-3">Sampul</label>
                    <div class="col mx-4">
                        <img src="/img/default.png" alt="" class="img-preview img-thumbnail" style="margin-left: 20px;" width="320">
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
                        <label for="kategori" class="form-label">Kategori Berita : </label>
                        <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('kategori'); ?>
                        </div>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="ket" class="form-label">Keterangan : </label>
                        <input type="text" name="ket" class="form-control" id="ket">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class=" btn btn-primary mt-3" style="width: 100%;" type="submit">Tambah Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>