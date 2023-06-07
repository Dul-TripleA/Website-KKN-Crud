<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<div class="container">
    <form action="<?= base_url('Galeri/update/' . $galeri['id']); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $galeri['dokumentasi']; ?>">
        <input type="hidden" name="slug" value="<?= $galeri['slug']; ?>">
        <?= csrf_field(); ?>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card bg-light" style="border: none;">
                    <label for="dokumentasi" class="form-label mt-2 mx-3 mb-2">Thumbnail Dokumentasi : </label>
                    <img src="/img/<?= $galeri['dokumentasi']; ?>" alt="" srcset="" class="m-auto img-thumbnail img-preview" width="243px">
                    <div class="card-body">
                        <input class="form-control" name="dokumentasi" value="<?= old('dokumentasi'); ?>" type="file" id="dokumentasi" onchange="previewPicture()">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : File harus memiliki format foto (PNG,JPG,JPEG)</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card bg-light" style="border: none;">
                    <div class="my-2 mx-3">
                        <label for="judul" class="form-label">Judul : </label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= (old('judul')) ? old('judul') : $galeri['judul']; ?>">
                    </div>
                    <div class="my-2 mx-3">
                        <label for="tanggal" class="form-label">Tanggal : </label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= (old('tanggal')) ? old('tanggal') : $galeri['tanggal']; ?>">
                    </div>
                    <div class="my-2 mx-3">
                        <label for="kategori" class="form-label">Kategori: </label>
                        <!-- <input type="text" name="kategori" class="form-control" id="kategori" value="<?= (old('kategori')) ? old('kategori') : $galeri['kategori']; ?>"> -->
                        <select name="kategori" id="kategori" class="form-control">
                            <!-- <option value="Foto">Foto</option> -->
                            <option value="UMKM" <?= ($galeri['kategori'] == 'UMKM' ? 'selected' : ''); ?>>UMKM</option>
                            <option value="Wisata Salam" <?= ($galeri['kategori'] == 'Wisata Salam' ? 'selected' : ''); ?>>Wisata Salam</option>
                            <option value="Kegiatan Desa" <?= ($galeri['kategori'] == 'Kegiatan Desa' ? 'selected' : ''); ?>>Kegiatan Desa</option>
                            <option value="Lain - Lain" <?= ($galeri['kategori'] == 'Lain - Lain' ? 'selected' : ''); ?>>Lain- Lain</option>
                        </select>
                    </div>
                    <div class="my-2 mx-3">
                        <label for="link" class="form-label">Link Dokumentasi : </label>
                        <input type="text" name="link" class="form-control" id="link" value="<?= (old('link')) ? old('link') : $galeri['link']; ?>">
                        <p class="text-mute text-danger" style="font-size: 12px;">Note : Harap masukkan link apabila ada dokumentasi Video!!</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary d-grid mt-4 mx-2" style="width: 100%;" type="submit">Update Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>