<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('DataAdmin/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mt-2">
            <div class="col">
                <div class="card bg-light" style="border: none;">
                    <div class="mt-3 mx-3 mb-1">
                        <label for="email" class="form-label">Email Admin : </label>
                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    
                      <div class="mt-3 mx-3 mb-1">
                        <label for="password" class="form-label">Password Admin : </label>
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class=" btn btn-primary mt-3" style="width: 100%;" type="submit">Tambah Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>