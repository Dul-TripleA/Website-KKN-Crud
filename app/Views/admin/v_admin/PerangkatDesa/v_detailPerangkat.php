<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container">
    <div class="col">
        <div class="row m-1" style="text-align: justify;">
            <table class="table my-3 p-0">
                <tr>
                    <td>
                        <p><b>Foto Perangkat Desa :</b></p>
                        <img src="/img/<?= $perangkatDesa['foto']; ?>" alt="" width="180px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Judul:</b></p>
                        <p class="me-1"><?= $perangkatDesa['nama']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Jabatan :</b></p>
                        <p><?= $perangkatDesa['jabatan']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/PerangkatDesa/edit/<?= $perangkatDesa['nama']; ?>" class="btn btn-warning me-3" style="width:100px;">Edit</a>
                        <a href="/PerangkatDesa/delete/<?= $perangkatDesa['id']; ?>" class="btn btn-danger me-3" style="width:100px;">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>