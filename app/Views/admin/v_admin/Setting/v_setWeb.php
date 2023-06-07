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
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($setting as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['judul']; ?></td>
                            <td><?= $value['desk']; ?></td>
                            <td><img src="<?= base_url('img/' . $value['sampul']); ?>" alt="" class="foto" width="200"></td>
                            <td>
                                <a href="/Setting/edit/<?= $value['judul']; ?>" class="btn btn-warning me-3" style="width:100px;">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>