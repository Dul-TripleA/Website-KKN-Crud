<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<div class="container">
    <form action="<?= base_url('Galeri/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-2">
            <div class="col-4">
                <div class="card bg-light" style="border: none;">
                    <label for="dokumentasi" class="form-label mt-2 mx-3 mb-2">Thumbnail Dokumentasi : </label>
                    <img src="/img/defaultPicture.png" alt="" srcset="" class="m-auto img-thumbnail img-preview" width="243px">
                    <div class="card-body">
                        <input class="form-control <?= ($validation->hasError('dokumentasi')) ? 'is-invalid' : ''; ?>" name="dokumentasi" value="<?= old('dokumentasi'); ?>" type="file" id="dokumentasi" onchange="previewPicture()">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : File harus memiliki format foto (PNG,JPG,JPEG)</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card bg-light" style="border: none;">
                    <div class="my-2 mx-3">
                        <label for="judul" class="form-label">Judul : </label>
                        <input type="text" name="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="tanggal" class="form-label">Tanggal : </label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                    </div>
                    <div class="my-2 mx-3">
                        <label for="kategori" class="form-label">Kategori: </label>
                        <select name="kategori" id="kategori" class="form-control">
                            <!-- <option value="Foto">Foto</option> -->
                            <option value="UMKM">UMKM</option>
                            <option value="Wisata Salam" >Wisata Salam</option>
                            <option value="Kegiatan Desa">Kegiatan Desa</option>
                            <option value="Lain - Lain">Lain- Lain</option>
                        </select>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="link" class="form-label">Link Dokumentasi : </label>
                        <input type="text" name="link" class="form-control" id="link">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : Harap masukkan link apabila ada dokumentasi Video!!</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary d-grid my-4 mx-2" style="width: 100%;" type="submit">Tambah Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>