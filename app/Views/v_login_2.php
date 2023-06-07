<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KKN Salam | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/Templates/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/Templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/Templates/dist/css/adminlte.min.css">

  <script src="https://wisatagerdu.desagerdu.my.id/sweetalert2/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://wisatagerdu.desagerdu.my.id/sweetalert2/dist/sweetalert2.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url(); ?>/login"><b>Login</b></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
  <form action="<?= base_url(); ?>/login/cek_login" method="post">
      <?= csrf_field(); ?>
      <div class="input-group mb-3">
      <input type="text" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : '' ?>" placeholder="Email" name="email" value="<?= old('email'); ?>">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
      <div class="invalid-feedback">
          <?= $validation->getError('email'); ?>
        </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" placeholder="Password" name="password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      <div class="invalid-feedback">
          <?= $validation->getError('password'); ?>
              </div>
    </div>
    <div class="md-3">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
  </form>

  <p class="mb-1">
    <a href="<?= base_url('/'); ?>">Kembali ke beranda</a>
  </p>
</div>

    </div>
  </div>

  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/Templates/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/Templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/Templates/dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
     <?php if (!empty(session()->getFlashData('error'))) { ?>
        <?php $error = explode("#", session()->getFlashData('error')); ?>

        Swal.fire({
            toast: true,
              position: 'top-end',
              icon: 'error',
              title: '<?= $error[1]; ?>',
              showConfirmButton: false,
              timer: 1500
        })
    <?php } ?>
        
    });
  </script>
</body>

</html>

      
