<!<?= $this->include('user/assets/header.php'); ?> <body>
    <!-- Preloader -->
    <!--<div id="preloader">-->
    <!--    <div class="loader"></div>-->
    <!--</div>-->
    <!-- /Preloader -->


    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <?= $this->include('user/assets/nav.php'); ?>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="">

            <?= $this->include('user/assets/slider.php'); ?>

        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix" id="info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Info Salam</h2>
                        <p>Info mengenai Desa Salam mulai dari Wisata, UMKM, hinggga Pertanian</p>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <?= $this->include('user/assets/kategori.php'); ?>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">

    <?php
    $db = \Config\Database::connect();
    $contact = $db->table('contact')->select('ig')->get()->getResultArray();
    ; ?>

    <?php 
    $no = 1;
    foreach ($contact as $key => $value){
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
    <!-- Follow Area End -->

    <?= $this->include('user/assets/footer.php'); ?>