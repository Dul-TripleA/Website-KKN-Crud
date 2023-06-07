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
                            <h2 class="page-title">Galeri Salam</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url('Home/'); ?>"><i class="icon_house_alt"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Blog Area Start -->

        <?php
        $no = 1;
        foreach ($kontak as $key => $value) {
            $n = $no++
        ?>

            <!-- Single Instagram Item -->
            <!-- Single Slide -->
            <div class="contact-area section-padding-80-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h2 class="contact-title mb-30">Hubungi <br>Kami</h2>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Contact Info -->
                            <div class="contact-info mb-30">
                                <p>Email</p>
                                <a href="<?= $value['email']; ?>"><?= $value['email']; ?></a>
                            </div>
                            <!-- Contact Info -->
                            <div class="contact-info mb-30">
                                <p>Nomor Telephone</p>
                                <a href="#"><?= $value['no_hp']; ?></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Contact Info -->
                            <div class="contact-info mb-30">
                                <p>Lokasi Kelurahan</p>
                                <a href="#"><?= $value['alamat']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php } ?>

        <!-- Gallery Area Start -->

        <!-- Contact Area End -->

        <!-- Map Area Start -->
        <div class="map-area section-padding-0-80">
            <div class="container">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15818.178232044955!2d111.08429066984256!3d-7.624431143952845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2077dc9c245f%3A0x5027a76e356c540!2sSalam%2C%20Kec.%20Karangpandan%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1672813181256!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

            <?= $this->include('user/assets/footer.php'); ?>