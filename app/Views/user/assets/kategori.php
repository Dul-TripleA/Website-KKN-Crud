<!-- Single Gallery Item -->
<?php
$no = 1;
foreach ($kategori as $key => $value) {
    $n = $no++
?>

    <div class="col-12 col-sm-4 col-lg-4 single_gallery_item video country mb-30 wow fadeInUp" data-wow-delay="100ms">
        <div class="single-portfolio-content">
            <div class="container_foto ">
                <div class="ver_mas">
                    <a class="lnr lnr-eye" href="<?= base_url('/berita/kategori/' . str_replace(' ', '-', $value['kategori'])); ?>">Selengkapnya Tentang <?= $value['kategori']; ?></a>
                </div>
                <article class="text-left">
                    <h2><?= $value['kategori']; ?></h2>
                    <h4><?= $value['ket']; ?></h4>
                </article>
                <img src="<?= base_url('img/' . $value['sampul']); ?>" alt="">
            </div>
        </div>
    </div>



<?php } ?>