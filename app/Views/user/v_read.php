<!<?= $this->include('user/assets/header.php'); ?> <body>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Top Search Form Area -->
        <div class="top-search-area">
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <!-- Close -->
                            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                            <!-- Form -->
                            <form action="index.html" method="post">
                                <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            <h2 class="page-title">Informasi Salam</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url('Home/'); ?>"><i class="icon_house_alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('Berita/'); ?>">Informasi</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Baca</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Blog Area Start -->

        <div class="about-us-area section-padding-80-0 clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="about-us-content mb-80">
                            <h3 class="wow fadeInUp" data-wow-delay="100ms"><?= $berita['judul']; ?></h3>
                            <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                            <p class="wow fadeInUp" style="font-size: 12px; font-style: italic;" data-wow-delay="300ms"><?= $berita['tanggal']; ?></p>
                            <p class="wow fadeInUp" data-wow-delay="300ms"><?= $berita['desk']; ?></p>
                            <!-- <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">Contact Us</a> -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="single-portfolio-content">
                            <img src="<?= base_url('img/' . $berita['foto']); ?>" alt="">
                            <div class="hover-content">
                                <a href="<?= base_url('img/' . $berita['foto']); ?>" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 text-justify">
                    <div class="col-12 col-lg-12">
                        <p class="wow fadeInUp" data-wow-delay="300ms"><?= $berita['isi']; ?></p>
                    </div>
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