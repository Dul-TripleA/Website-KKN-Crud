<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<div class="container">
    <form action="<?= base_url('Setting/update/' . $setting['id']); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $setting['sampul']; ?>">
        <input type="hidden" name="slug" value="<?= $setting['judul']; ?>">
        <?= csrf_field(); ?>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card bg-light" style="border: none;">
                    <label for="sampul" class="form-label mt-2 mx-3 mb-2">Sampul : </label>
                    <img src="/img/<?= $setting['sampul']; ?>" alt="" srcset="" class="m-auto img-thumbnail img-preview" width="243px">
                    <div class="card-body">
                        <input class="form-control" name="sampul" value="<?= old('sampul'); ?>" type="file" id="sampul" onchange="previewPicture()">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : File harus memiliki format foto (PNG,JPG,JPEG)</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card bg-light" style="border: none;">
                    <div class="my-2 mx-3">
                        <label for="judul" class="form-label">Judul : </label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= (old('judul')) ? old('judul') : $setting['judul']; ?>">
                    </div>
                    <div class="my-2 mx-3">
                        <label for="desk" class="form-label">Deskripsi : </label>
                        <input type="text" name="desk" class="form-control" id="desk" value="<?= (old('desk')) ? old('desk') : $setting['desk']; ?>">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : Harap masukkan link apabila ada dokumentasi Video!!</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary d-grid mt-4 mx-2" style="width: 100%;" type="submit">Update Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>