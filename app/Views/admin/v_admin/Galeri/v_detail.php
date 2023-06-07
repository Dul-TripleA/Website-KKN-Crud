<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container">
    <div class="col">
        <div class="row m-1" style="text-align: justify;">
            <table class="table my-3 p-0">
                <tr>
                    <td>
                        <p><b>Thumbnail Dokumentasi :</b></p>
                        <img src="/img/<?= $galeri['dokumentasi']; ?>" alt="" width="180px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Judul:</b></p>
                        <p class="me-1"><?= $galeri['judul']; ?>
                        </p>
                        <span class="text-muted">
                            <?= $galeri['kategori']; ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Tanggal :</b></p>
                        <p><?= $galeri['tanggal']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Link Dokumentasi</b></p>
                        <a href="<?= $galeri['link'];  ?>"><?= $galeri['link']; ?></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/Galeri/edit/<?= $galeri['slug']; ?>" class="btn btn-warning me-3" style="width:100px;">Edit</a>
                        <a href="/Galeri/delete/<?= $galeri['id']; ?>" class="btn btn-danger me-3" style="width:100px;">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>