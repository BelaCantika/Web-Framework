<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['nama']?></title>
        <!-- Menambahkan ikon kecil di tab browser -->
    <link rel="icon" href="<?=base_url('assets/logo.png')?>" type="logo/png">


<!-- Menggunakan font Poppins dari Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

<!-- Menyisipkan berbagai file CSS untuk tampilan halaman -->
<link rel="stylesheet" href="<?=base_url('css/linearicons.css')?>">
<link rel="stylesheet" href="<?=base_url('css/font-awesome.min.css')?>">
<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/nice-select.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/animate.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/owl.carousel.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

</head>
<body>
    <?= view('components/navbar')?>


    <div
    style="display: flex; flex-direction: column; gap: 24px;"
    class="content">
        <div
        style="display: flex; justify-content: center;"
        >
            <img src="<?=$data['path_ke_gambar']?>" alt="<?=$data['nama']?>">
        </div>
        <h2>Profil Universitas</h2>
        <p><?=$data['profil']?></p>
        <h2>Akreditasi Program Studi</h2>
        <p><?=$data['teks_prodi']?></p>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Akreditasi</th>
            </tr>
        </thead>
        <tbody>
        <?php
    // Split the 'prodi' string by commas
    $prodiList = explode(',', $data['prodi']);
    
    // Loop through each item
    foreach ($prodiList as $index => $prodi) {
        // Clean up extra spaces
        $prodi = trim($prodi);
        
        // Get the 'nama prodi' and 'akreditasi' from the string
        $prodiParts = explode('.', $prodi); // Split by period to separate program name and accreditation
        
        // Split the 'nama' and 'akreditasi' parts
        $namaProdi = isset($prodiParts[0]) ? trim($prodiParts[0]) : 'N/A'; // Prodi name (e.g., Hukum)
        $akreditasi = isset($prodiParts[1]) ? trim($prodiParts[1]) : 'N/A'; // Akreditasi (e.g., A)
?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $namaProdi ?></td>
            <td><?= $akreditasi ?></td>
        </tr>
<?php } ?>

        </tbody>
    </table>


        <!-- <p>
            Universitas Syiah Kuala (USK) adalah universitas yang berdiri pada 2 September 1961 dan terletak di Banda Aceh, Indonesia.
            Kampus yang dijuluki “Jantong Hatee Rakyat Aceh” ini merupakan universitas terbesar dan tertua di Banda Aceh.
            Suasana kampus yang bernuansa syariah menjadi daya tarik bagi para mahasiswa untuk menuntut ilmu pengetahuan sekaligus mengenal dan mendalami syariat Islam.
        </p>
        <p>
            Program Studi S1 Unsyiah sangat jauh berbeda dengan pendidikan Diploma, program S1 ini akan membuat kamu mempelajari ilmu teori ketimbang praktek.
            Pendidikan ini sangat cocok bagi kamu yang lebih mengedepankan ilmu teori dibandingkan dengan praktek.
            Berikut ini beberapa program studi yang bisa kamu pilih di Unsyiah untuk jenjang pendidikan S1:
        </p>
        <ul>
            <li>Agribisnis - A</li>
            <li>Agroteknologi - A</li>
            <li>Agroteknologi Kampus Gayo Lues - B</li>
            <li>Akuntansi - A</li>
            <li>Arsitektur - A</li>
        </ul> -->
    </div>

    <?= view('components/footer')?>
    <!-- Menyisipkan berbagai file JavaScript untuk fungsionalitas tambahan -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?= base_url('js/vendor/jquery-2.2.4.min.js') ?>"></script>
<script src="<?= base_url('js/vendor/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('js/easing.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.sticky.js') ?>"></script>
<script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= base_url('js/parallax.min.js') ?>"></script>
<script src="<?= base_url('js/mail-script.js') ?>"></script>
<script src="<?= base_url('js/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('js/main.js') ?>"></script>

</body>
</html>
