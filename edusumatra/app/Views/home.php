<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <!-- Meta tag untuk mengoptimalkan tampilan di perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon (ikon kecil pada tab browser) -->
    <link rel="icon" href="../public/assets/logo.png" type="logo/png">

    <!-- Meta informasi tentang halaman web -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8"> <!-- Menentukan karakter set UTF-8 -->

    <!-- Judul halaman web -->
    <title>EduSumatera</title>

    <!-- Menggunakan font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

    <!-- Memuat berbagai file CSS untuk styling -->
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
        
        <!-- Bagian Banner -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">										
                </div>
            </div>
        </section>
        <!-- Akhir Banner -->

        <!-- Bagian Daftar Universitas -->
        <section class="portfolio-area section-gap" id="portfolio">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">5 PTN Terbaik di Sumatera</h1><br><br>
                        </div>
                    </div>
                </div>

                <!-- Daftar Universitas -->
                <div class="universities">
                <?php
                foreach ($datas as $data) {
                   echo view('components/card', ['id' => $data['id'], 'gambar'=> $data['path_ke_gambar'], 'nama'=>$data['nama']]) ;               
                }
                ?>
                
                
                <!-- <div>
                        <img src="assets/unand.png" alt="Universitas Andalas" width="80">
                        <li><a href="unand">Universitas Andalas</a></li>
                    </div> -->
                    <!-- <div>
                        <img src="assets/usu.png" alt="Universitas Sumatera Utara" width="80">
                        <li><a href="usu">Universitas Sumatera Utara</a></li>
                    </div>
                    <div>
                        <img src="assets/syiah.png" alt="Universitas Syiah Kuala" width="85">
                        <li><a href="syiah">Universitas Syiah Kuala</a></li>
                    </div>
                    <div>
                        <img src="assets/unri.png" alt="Universitas Riau" width="80">
                        <li><a href="unri">Universitas Riau</a></li>
                    </div>
                    <div>
                        <img src="assets/unila.png" alt="Universitas Lampung" width="80">
                        <li><a href="unila">Universitas Lampung</a></li>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Akhir Daftar Universitas -->

        <?= view('components/footer')?>
    </div>

    <!-- Load file JavaScript untuk fungsionalitas tambahan -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
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
