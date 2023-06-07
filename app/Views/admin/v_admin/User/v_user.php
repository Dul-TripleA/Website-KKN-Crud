<?= $this->extend("T_Admin/index.php"); ?>
<?= $this->section("contentAdmin"); ?>

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
            <a href="<?= base_url('DataAdmin/create'); ?>" class=" text-light btn btn-primary d-flex" style="height: 40px;">
                <span class="mx-4 "><i class="far fa-plus-square me-2"></i> Tambah Data Admin</span>
            </a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataAdmin as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['email']; ?></td>
                            <td>
                                <a href="/DataAdmin/delete/<?= $value['id']; ?>" class="btn btn-danger me-3" style="width:100px;">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>