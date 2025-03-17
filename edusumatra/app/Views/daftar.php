<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <!-- Menentukan dokumen sebagai HTML5 -->
    <meta charset="UTF-8">
    
    <!-- Menjadikan tampilan website responsif di berbagai perangkat -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Informasi meta seperti penulis, deskripsi, dan kata kunci -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Menentukan judul halaman yang muncul di tab browser -->
    <title>EduSumatera</title>

    <!-- Menambahkan ikon kecil di tab browser -->
    <link rel="icon" href="../public/assets/logo.png" type="logo/png">

    <!-- Menggunakan font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- Menyisipkan berbagai file CSS untuk tampilan halaman -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="protfolio-wrap">

        <?= view('components/navbar')?>

        <!-- Bagian Daftar Universitas -->
        <div class="universities">


        <?php
                foreach ($datas as $data) {
                   echo view('components/card', ['id' => $data['id'], 'gambar'=> $data['path_ke_gambar'], 'nama'=>$data['nama']]) ;               
                }
                ?>
            <!-- Setiap div berisi logo dan nama universitas -->
            <!-- <div>
                <img src="assets/unand.png" alt="Universitas Andalas" width="80">
                <p>Universitas Andalas</p>
            </div>
            <div>
                <img src="assets/usu.png" alt="Universitas Sumatera Utara" width="80">
                <p>Universitas Sumatera Utara</p>
            </div>
            <div>
                <img src="assets/syiah.png" alt="Universitas Syiah Kuala" width="85">
                <li><a href="syiah">Universitas Syiah Kuala</a></li>
            </div>
            <div>
                <img src="assets/unri.png" alt="Universitas Riau" width="80">
                <p>Universitas Riau</p>
            </div>
            <div>
                <img src="assets/unila.png" alt="Universitas Lampung" width="80">
                <p>Universitas Lampung</p>
            </div>
            <div>
                <img src="assets/manufaktur.png" alt="Politeknik Manufaktur" width="80">
                <p>Politeknik Manufaktur</p>
            </div>
            <div>
                <img src="assets/unp 2.png" alt="Universitas Negeri Padang" width="85">
                <p>Universitas Negeri Padang</p>
            </div>
            <div>
                <img src="assets/unsam.png" alt="Universitas Samudra" width="85">
                <p>Universitas Samudra</p>
            </div>
            <div>
                <img src="assets/unsri.png" alt="Universitas Sriwijaya" width="90">
                <p>Universitas Sriwijaya</p>
            </div>
            <div>
                <img src="assets/Polinela.png" alt="Politeknik Negeri Lampung" width="80">
                <p>Politeknik Negeri Lampung</p>
            </div>
            <div>
                <img src="assets/maliku.png" alt="Universitas Malikussaleh" width="70">
                <p>Universitas Malikussaleh</p>
            </div>
            <div>
                <img src="assets/uin.png" alt="Universitas Islam Raden Fatah Palembang" width="92">
                <p>Universitas Islam Raden Fatah Palembang</p>
            </div>
            <div>
                <img src="assets/unja.png" alt="Universitas Jambi" width="82">
                <p>Universitas Jambi</p>
            </div> -->
        </div>
        <!-- Akhir Daftar Universitas -->
         <?= view('components/footer')?>
    </div>

    <!-- Menyisipkan berbagai file JavaScript untuk fungsionalitas tambahan -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
