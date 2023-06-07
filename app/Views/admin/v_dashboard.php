<?= $this->extend("T_Admin/index.php"); ?>
<?= $this->section("contentAdmin"); ?>



<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
                <div class="inner">
                    <h3><?= $berita; ?></h3>

                    <p>Berita Desa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper color-primary"></i>
                </div>
                <a href="<?= base_url('Berita/'); ?>" class="small-box-footer  bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
                <div class="inner">
                    <h3><?= $arsip; ?></h3>

                    <p>Dokumentasi Desa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-camera color-primary"></i>
                </div>
                <a href="<?= base_url('Galeri/'); ?>" class="small-box-footer  bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
                <div class="inner">
                    <h3><?= $perangkatDesa; ?></h3>

                    <p>Anggota Kelompok</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie color-primary"></i>
                </div>
                <a href="<?= base_url('PerangkatDesa/'); ?>" class="small-box-footer  bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
                <div class="inner">
                    <h3><?= $user; ?></h3>

                    <p>Admin</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users color-primary"></i>
                </div>
                <a href="<?= base_url('DataAdmin/'); ?>" class="small-box-footer  bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!--<div class="row">-->
    <!--    <div class="col">-->
    <!--        <div class="card bg-gradient-success">-->
    <!--            <div class="card-header border-0">-->

    <!--                <h3 class="card-title">-->
    <!--                    <i class="far fa-calendar-alt"></i>-->
    <!--                    Calendar-->
    <!--                </h3>-->
                    <!-- tools card -->
    <!--                <div class="card-tools">-->
                        <!-- button with a dropdown -->
    <!--                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">-->
    <!--                        <i class="fas fa-minus"></i>-->
    <!--                    </button>-->
    <!--                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">-->
    <!--                        <i class="fas fa-times"></i>-->
    <!--                    </button>-->
    <!--                </div>-->
                    <!-- /. tools -->
    <!--            </div>-->
                <!-- /.card-header -->
    <!--            <div class="card-body pt-0">-->
                    <!--The calendar -->
    <!--                <div id="calendar" style="width: 100%"></div>-->
    <!--            </div>-->
                <!-- /.card-body -->
    <!--        </div>-->
    <!--    </div>-->

    <!--</div>-->



    <?= $this->endsection(); ?>