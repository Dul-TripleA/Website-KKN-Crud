<!<?= $this->include('user/assets/header.php'); ?> <body>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Top Search Form Area -->

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
                            <h2 class="page-title">Galeri Salam</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url('Home/'); ?>"><i class="icon_house_alt"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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
        <div class="alime-portfolio-area section-padding-80 clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Projects Menu -->
                        <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                            <div class="portfolio-menu text-center">
                                <button class="btn active" data-filter="*">All</button>
                                <button class="btn" data-filter=".UMKM">UMKM</button>
                                <button class="btn" data-filter=".Wisata">Wisata Salam</button>
                                <button class="btn" data-filter=".Kegiatan">Kegiatan Desa</button>
                                <button class="btn" data-filter=".Lain">Lian - Lain</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row alime-portfolio">
                    <!-- Single Gallery Item -->

                    <?php
                    $no = 1;
                    foreach ($galeri as $key => $data) {
                        $n = $no++
                    ?>
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item <?= $data['kategori']; ?> mb-30 wow fadeInUp" data-wow-delay="100ms">
                            <div class="single-portfolio-content">
                                <img src="<?= base_url('img/' . $data['dokumentasi']); ?>" alt="">
                                <div class="hover-content">
                                    <a href="<?= base_url('img/' . $data['dokumentasi']); ?>" class="portfolio-img">+</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

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