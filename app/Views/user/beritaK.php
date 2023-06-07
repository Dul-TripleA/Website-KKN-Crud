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
                            <h2 class="page-title">Informasi Salam</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?= base_url('Home/'); ?>"><i class="icon_house_alt"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Informasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Blog Area Start -->
        <div class="alime-blog-area section-padding-80-0 mb-70">
            <div class="container">
                <div class="row">
                    <?= $this->include('user/assets/list.php'); ?>
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