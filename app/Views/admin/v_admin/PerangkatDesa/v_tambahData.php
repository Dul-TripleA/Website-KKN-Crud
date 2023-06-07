<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<div class="container">
    <form action="<?= base_url('PerangkatDesa/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-2">
            <div class="col-4">
                <div class="card bg-light" style="border: none;">
                    <label for="foto" class="form-label mt-2 mx-3 mb-2">Foto : </label>
                    <img src="/img/defaultPicture.png" alt="" srcset="" class="m-auto img-thumbnail img-preview" width="243px">
                    <div class="card-body">
                        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" value="<?= old('foto'); ?>" type="file" id="Foto" onchange="previewPicture()">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : File harus memiliki format foto (PNG,JPG,JPEG)</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card bg-light" style="border: none;">
                    <div class="my-2 mx-3">
                        <label for="nama" class="form-label">Nama : </label>
                        <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="jabatan" class="form-label">Jabatan : </label>
                        <input type="text" name="jabatan" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" id="jabatan" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('jabatan'); ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            <button class="btn btn-primary d-grid my-4 mx-2" style="width: 100%;" type="submit">Tambah Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>