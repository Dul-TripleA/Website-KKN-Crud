<!<?= $this->include('user/assets/header.php'); ?> <body>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->


        <!-- Header Area Start -->
        <header class="header-area">
            <!-- Main Header Start -->
            <div class="main-header-area">
                <?= $this->include('user/assets/nav.php'); ?>
            </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Breadcrumb Area Start -->
        <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?= base_url(''); ?>/img/b.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2 class="page-title">Tentang Desa Salam</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url('Home/'); ?>"><i class="icon_house_alt"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Blog Area Start -->

        <!-- Gallery Area Start -->

        <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
            <div class="container">

                <div class="row">
                    <!-- Single Why Choose Area -->
                    <div class="col-md-6 col-lg-4">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                            <div class="chosse-us-icon">
                                <i class="fa fa-map-location-dot" aria-hidden="true"></i>
                            </div>
                            <h4>Batas Wilayah</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                        </div>
                    </div>

                    <!-- Single Why Choose Area -->
                    <div class="col-md-6 col-lg-4">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <div class="chosse-us-icon">
                                <i class="fa-solid fa-store" aria-hidden="true"></i>
                            </div>
                            <h4>UMKM Salam</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                        </div>
                    </div>

                    <!-- Single Why Choose Area -->
                    <div class="col-md-6 col-lg-4">
                        <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                            <div class="chosse-us-icon">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                            </div>
                            <h4>Destinasi Wisata</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-team-area section-padding-80-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                            <h2>Anggota Kelompok</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Team Member Area -->
                    <!-- Single Gallery Item -->
                    <?php
                    $no = 1;
                    foreach ($perangkatDesa as $key => $value) {
                        $n = $no++
                    ?>

                        <div class="col-md-6 col-xl-3">
                            <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                                <div class="member-thumb">
                                    <img src="<?= base_url('img/' . $value['foto']); ?>" alt="">
                                </div>
                                <h5><?= $value['nama']; ?></h5>
                                <span><?= $value['jabatan']; ?></span>

                            </div>
                        </div>



                    <?php } ?>

                </div>
            </div>
        </section>

        <section class="follow-area clearfix">
            <?php
            $db = \Config\Database::connect();
            $contact = $db->table('contact')->select('ig')->get()->getResultArray();; ?>

            <?php
            $no = 1;
            foreach ($contact as $key => $value) {
                $n = $no++
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <h2>Follow Instagram</h2>
                                <p>@<?= $value['ig']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Instagram Feed Area -->
            <div class="instragram-feed-area owl-carousel">
                <?= $this->include('user/assets/galeriIG.php'); ?>
            </div>
        </section>


        <?= $this->include('user/assets/footer.php'); ?>