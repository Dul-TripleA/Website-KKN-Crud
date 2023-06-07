<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('Berita/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-2">
            <div class="col-5">
                <div class="card bg-light" style="border: none;">
                    <label for="gambar" class="form-label mt-3 mb-3 mx-3">Gambar</label>
                    <div class="col mx-4">
                        <img src="/img/default.png" alt="" class="img-preview img-thumbnail" style="margin-left: 20px;" width="320">
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
                        <label for="judul" class="form-label">Judul Berita : </label>
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="kategori" class="form-label">Kategori : </label>
                        <select class="form-control" name="kategori" id="kategori">
                            <?php $i = 1; ?>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value['kategori']; ?>"><?= $value['kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="desk" class="form-label">Deskripsi : </label>
                        <input type="text" name="desk" class="form-control" id="desk">
                    </div>
                    <div class="mt-2 mx-3 mb-3">
                        <label for="tanggal" class="form-label">Tanggal : </label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card bg-light" style="border: none;">
                    <div class="mt-3 mx-3 mb-3">
                        <label for="isi" class="form-label">Isi Berita : </label>
                        <textarea name="isi" id="isi" class="form-control" rows="6"></textarea>
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