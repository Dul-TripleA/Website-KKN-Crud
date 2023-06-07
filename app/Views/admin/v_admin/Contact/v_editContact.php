<?= $this->extend("T_Admin/index.php"); ?>

<?= $this->section('contentAdmin'); ?>

<div class="container mt-2 mb-4">
    <form action="<?= base_url('Contact/update/' . $contact['id']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $contact['email']; ?>">
        <div class="row mt-2">
            <div class="col">
                <div class="card bg-light" style="border: none;">
                    <div class="mt-3 mx-3 mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= $contact['email']; ?>" id="email" name="email" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="mt-2 mx-3 mb-3">
                        <label for="alamat" class="form-label">alamat : </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $contact['alamat']; ?>">
                    </div>
                    <div class="mt-2 mx-3 mb-3">
                        <label for="no_hp" class="form-label">Nomor Telephone</label>
                        <textarea name="no_hp" id="no_hp" class="form-control" rows="3"><?= $contact['no_hp']; ?></textarea>
                    </div>
                    <div class="mt-2 mx-3 mb-3">
                        <label for="ig" class="form-label">Instagram</label>
                        <textarea name="ig" id="ig" class="form-control" rows="3"><?= $contact['ig']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class=" btn btn-primary mt-3" style="width: 100%;" type="submit">Update Data</button>
        </div>
    </form>
</div>

<?= $this->endsection(); ?>