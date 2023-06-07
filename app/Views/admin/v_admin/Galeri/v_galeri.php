<?= $this->extend("T_Admin/index.php"); ?>
<?= $this->section("contentAdmin"); ?>

<div class="container-fluid mt-2 mb-3">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('Galeri/TambahData'); ?>" class=" text-light btn btn-primary d-flex my-2" style="height: 40px;">
        <span class="mx-4 "><i class="far fa-plus-square me-2"></i> Tambah Foto</span>
    </a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($galeri as $key => $g) { ?>
            <div class="col">
                <div class="card-group mb-2">
                    <div class="card">
                        <img src="<?= base_url('img/' . $g['dokumentasi']); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>
                                        <p class="fw-bold">Judul : <span class="fw-light"><?= $g['judul']; ?></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="fw-bold">Tanggal : <span class="fw-light"><?= $g['tanggal']; ?></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/Galeri/detail/<?= $g['slug']; ?>" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Kategori : <?= $g['kategori']; ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<?= $this->endsection(); ?>