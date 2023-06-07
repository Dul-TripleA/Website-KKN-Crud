<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>
<style>
    table tbody tr * {
        vertical-align: middle;
    }
</style>

<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('Berita/create'); ?>" class=" text-light btn btn-primary d-flex" style="height: 40px;">
                <span class="mx-4 "><i class="far fa-plus-square me-2"></i> Tambah Berita</span>
            </a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($berita as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['judul']; ?></td>
                            <td><?= $value['desk']; ?></td>
                            <td><img src="<?= base_url('img/' . $value['foto']); ?>" alt="" class="foto" width="200"></td>
                            <td>
                                <a href="/Berita/detail/<?= $value['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>