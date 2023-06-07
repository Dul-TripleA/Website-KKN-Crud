<!-- Single Instagram Item -->

<?php
$no = 1;

$db = \Config\Database::connect();
$arsip = $db->table('arsip')->select('dokumentasi, link')->get()->getResultArray();


foreach ($arsip as $key => $data) {
    $n = $no++
?>
    <div class="single-instagram-item">
        <img src="<?= base_url('img/' . $data['dokumentasi']); ?>" alt="">
        <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
            <a href="<?= $data['link']; ?>">
                <i class="ti-instagram" aria-hidden="true"></i>
                <span>@salam_kkn</span>
            </a>
        </div>
    </div>

<?php } ?>