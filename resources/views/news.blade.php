@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="icon" href="assets/img/logo casturi.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top border-bottom border-light">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo casturi.png"  alt="logo-casturi">
        <img src="assets/img/logo casturi tulisan.png"  alt="logo-casturi" width="150px">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto " href="/about">About</a></li>
          <li><a class="nav-link scrollto active" href="/news">News</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

 
  <main id="main">
  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2 style="margin-bottom: 50px;"></h2>
    <p>Berita tentang Casturi</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="https://manunggal.undip.ac.id/wp-content/uploads/2021/08/12248.jpg" class="img-fluid" alt="title" ></div>
        <span class="post-date">2 Bulan lalu</span>
        <h3 class="post-title">Bisnis Case Smartphone Antibakteri (CASTURI), Inovasi Berbasis Nanosilver dan Daun Ketapang</h3>
        <a href="https://manunggal.undip.ac.id/bisnis-case-smartphone-antibakteri-casturi-inovasi-berbasis-nanosilver-dan-daun-ketapang/" class="readmore stretched-link mt-auto"><span>Manunggal Undip</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="https://jatengtoday.com/wp-content/uploads/2021/08/foto-untuk-berita.png" class="img-fluid" alt="title" height="100px"></div>
        <span class="post-date">2 Bulan lalu</span>
        <h3 class="post-title">Mahasiswa Teknik Undip Ciptakan Case Smartphone Antibakteri</h3>
        <a href="https://jatengtoday.com/mahasiswa-teknik-undip-ciptakan-case-smartphone-antibakteri-90738" class="readmore stretched-link mt-auto"><span>Jateng Today</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="https://kinetika.hmtk.undip.ac.id/wp-content/uploads/2021/08/kinet-online-casturi-border-1080x675.jpg" class="img-fluid" alt="title" style="object-fit:cover"></div>
        <span class="post-date">2 Bulan lalu</span>
        <h3 class="post-title">Berbekal Daun Ketapang, Mahasiswa Undip Ciptakan Case Smartphone Antibakteri</h3>
        <a href="https://www.murianews.com/2021/08/01/231339/berbekal-daun-ketapang-mahasiswa-undip-ciptakan-case-smartphone-antibakteri" class="readmore stretched-link mt-auto"><span>Muria News</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->
  </main><!-- End #main -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-12 footer-info">
          <h4>Hubungi Kami</h4>
            <p>
              Sokaraja, Kab. Banyumas, 53181
              Jawa Tengah, Indonesia <br><br>
              <strong>Phone:</strong> +62 897-9957-587<br>
              <strong>Email:</strong> casturi@gmail.com <br>
            </p>  
          <!-- <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo-casturi.jpg" alt="">
              <span>Casturi</span>
            </a>
            <p>Case Anti Bakteri</p>
            <div class="social-links mt-3">
              <a href="https://www.tokopedia.com/icasturi" class="twitter"><img src="assets/img/logo-tokopedia.png" alt="logo-shopee" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              <a href="https://shopee.co.id/casturiofficial" class="facebook"><img src="assets/img/logo-shopee.png" alt="logo-shopee" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              <a href="https://www.instagram.com/icasturi/" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
    
            </div> -->
          </div>

          <div class="col-lg-2 col-6 footer-links">
          
          </div>
          

          <div class="col-lg-4 col-6 footer-links">
         
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Find us on</h4>
            <p style="margin-bottom: 0;">
            <a href="https://www.tokopedia.com/icasturi" class="twitter"><img src="assets/img/logo-tokopedia.png" alt="logo-tokopedia" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              Casturi - Case Smartphone Antibakteri
            </p>
            <p style="margin-bottom: 0;">
            <a href="https://shopee.co.id/casturiofficial" class="facebook"><img src="assets/img/logo-shopee.png" alt="logo-shopee" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              Icasturi
            </p>
            <p style="margin-bottom: 0;">
            <a href="https://www.instagram.com/icasturi/" class="instagram"><img src="assets/img/logo-instagram.png" alt="logo-instagram" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              @icasturi
            </p>
            <p style="margin-bottom: 0;">
            <a href="https://www.facebook.com/Casturi-105868865052379/" class="facebook"><img src="assets/img/logo-facebook.png" alt="logo-facebook" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              Casturi
            </p>
            <p style="margin-bottom: 0;">
            <a href="#tiktok" class="tiktok"><img src="assets/img/logo-tiktok.png" alt="logo-tiktok" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              Casturi
            </p>
          </div>

        </div>
      </div>
    </div>
      <div class="copyright" style="background-color: #dfe4b8;">
        &copy; Copyright <strong><span>Casturi</span></strong>. All Rights Reserved
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
@endsection