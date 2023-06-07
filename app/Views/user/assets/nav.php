<?php
$request = \Config\Services::request();
$cek = $request->uri->getSegment(1);

// dd($cek);

?>

<!-- Menu Close Button -->

<!-- Nav End -->

<div class="classy-nav-container breakpoint-off">
    <div class="container">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="alimeNav">

            <!-- Logo -->
            <a class="nav-brand text-white"  href="<?= base_url('Home/'); ?>"><img style="width: 140px;height:auto;" src="<?= base_url('img/logoU.png'); ?>" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul id="nav">
                        <li class="<?= $cek == "Home" ? 'active' : ''; ?>"><a href="<?= base_url('Home/'); ?>">Home</a></li>
                        <li class="<?= $cek == "Berita" ? 'active' : ''; ?>"><a href="<?= base_url('Berita/informasi'); ?>">Informasi</a></li>
                        <li class="<?= $cek == "Galeri" ? 'active' : ''; ?>"><a href="<?= base_url('Galeri/dokumentasi'); ?>">Galeri</a></li>
                        <li class="<?= $cek == "About" ? 'active' : ''; ?>"><a href="<?= base_url('About/Desa_Salam') ?>">About</a></li>
                        <li class="<?= $cek == "Contact" ? 'active' : ''; ?>"><a href=" <?= base_url('Contact/salam'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>