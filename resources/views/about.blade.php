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
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo-casturi-png.png" alt="">
        <span>casturi</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto active" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/news">News</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 
  <main id="main">
  <section id="leader" class="team">

<div class="container" data-aos="fade-up" style="margin: 0 auto;">

  <header class="section-header">
    <h2>Team</h2>
    <p>Casturi</p>
  </header>

  <div class="row gy-4" >

    <div class="col-lg-3 col-md-6 d-flex cntr" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <div class="member-img">
          <img src="http://2.bp.blogspot.com/-rDwIz9VHByI/VO3M2F8ABGI/AAAAAAAAhpI/zbWD1ASQGy8/s1600/Gambar%2BSpongebob%2BSquarepants%2B-%2BMr.Krabs.jpg" class="img-fluid" alt="">
          <div class="social">
            <a href="https://www.instagram.com/galihwijia/"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Galih Wiji Agung</h4>
          <span>Leader</span>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- End Team Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="padding-top: 0px;">

      <div class="container" data-aos="fade-up">

     

        <div class="row gy-4" >

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3b/SpongeBob_SquarePants_character.svg/1200px-SpongeBob_SquarePants_character.svg.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/risya_ulayya/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Risya Ulayya Maghfira</h4>
                <span>Manager of Marketing & Social Media</span>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/Squidward_Tentacles.svg/1200px-Squidward_Tentacles.svg.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/sanfkr/"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
              <div class="member-info">
                <h4>Fakhri</h4>
                <span>Manager of Production & Design</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/33/Patrick_Star.svg/1200px-Patrick_Star.svg.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/umiwidia30/"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
              <div class="member-info">
                <h4>Umi Widi Astuti</h4>
                <span>Manager of Finance</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/Sandy_Cheeks.svg/1200px-Sandy_Cheeks.svg.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/wakhyunuraff/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Wakhyu Nur Afni</h4>
                <span>Admin</span>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

  </main><!-- End #main -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo-casturi.jpg" alt="">
              <span>Casturi</span>
            </a>
            <p>Case Anti Bakteri</p>
            <div class="social-links mt-3">
              <a href="https://www.tokopedia.com/icasturi" class="twitter"><img src="assets/img/logo-tokopedia.png" alt="logo-shopee" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              <a href="https://shopee.co.id/casturiofficial" class="facebook"><img src="assets/img/logo-shopee.png" alt="logo-shopee" width="20px" style="padding: 0px; margin-bottom: 5px;"></a>
              <a href="https://www.instagram.com/icasturi/" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
    
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
          
          </div>
          

          <div class="col-lg-2 col-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Hubungi Kami</h4>
            <p>
              Sokaraja, Kab. Banyumas, 53181
              Jawa Tengah, Indonesia <br><br>
              <strong>Phone:</strong> +628888888888<br>
              <strong>Email:</strong> casturi@gmail.com <br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Casturi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
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