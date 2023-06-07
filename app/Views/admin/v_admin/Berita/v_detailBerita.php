<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<div class="container" style="max-width: 100%;">
    <div class="col">
        <div class="row m-1" style="text-align: justify;">
            <table class="table my-3 p-0">
                <tr>
                    <td>
                        <p><b>Judul Berita:</b></p>
                        <p><?= $berita['judul']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Gambar Berita:</b></p>
                        <img src="/img/<?= $berita['foto']; ?>" alt="" width="100%">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Deskripsi Berita:</b></p>
                        <p><?= $berita['desk']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Isi Berita:</b></p>
                        <p> <?= $berita['isi']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/Berita/edit/<?= $berita['slug']; ?>" class="btn btn-warning me-3" style="width:100px;">Edit</a>
                        <a href="/Berita/delete/<?= $berita['id']; ?>" class="btn btn-danger me-3" style="width:100px;">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>