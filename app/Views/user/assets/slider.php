<?php

$no = 1;
foreach ($banner as $key => $value) {
    $n = $no++
?>

    <!-- Single Instagram Item -->
    <!-- Single Slide -->
    <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?= base_url('img/' . $value['sampul']); ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Welcome Text -->
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="welcome-text">
                        <h2 data-animation="bounceInDown" data-delay="900ms"><?= $value['judul']; ?></h2>
                        <p data-animation="bounceInDown" data-delay="500ms"><?= $value['desk']; ?></p>
                        <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                            <a href="<?= base_url('About/Desa_Salam'); ?>" class="btn alime-btn mb-3 mb-sm-0 mr-4">Baca Selengkapnya</a>
                            <?php
                            $no = 1;
                            foreach ($contact as $key => $s) {
                                $n = $no++
                            ?>
                                <a class="hero-mail-contact" href="mailto:<?= $s['email']; ?>"><?= $s['email']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php } ?>