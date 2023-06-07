<?php
$no = 1;
foreach ($kategori as $key => $value) {
    $n = $no++
?>

    <!-- Single Instagram Item -->
    <div class="col-12 col-lg-6">
        <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms">
            <!-- Post Thumbnail -->
            <a href="/Berita/read/<?= $value['slug']; ?>" class="post-thumbnail"><img src="<?= base_url('img/' . $value['foto']); ?>" alt=""></a>
            <!-- Post Catagory -->
            <p href="/Berita/read/<?= $value['slug']; ?>" class="btn post-catagory"><?= $value['kategori']; ?></p>
            <!-- Post Conetent -->
            <div class="post-content">
                <div class="post-meta">
                    <a href="/Berita/read/<?= $value['slug']; ?>"><?= $value['tanggal']; ?></a>
                </div>
                <a href="/Berita/read/<?= $value['slug']; ?>" class="post-title"><?= $value['judul']; ?></a>
            </div>
        </div>
    </div>



<?php } ?>