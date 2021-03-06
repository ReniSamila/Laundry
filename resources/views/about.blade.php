<!doctype html>
<html lang="en">
  <head>
    <title>Laundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/quill.snow.css')}}">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/jobboard/jobboard/css/style.css')}}">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index">Laundry</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="./" class="nav-link">Home</a></li>
              <li><a href="about" class="active">About</a></li>
              <li><a href="service">Jadwal</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="account">My Account</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login">Log In</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/frontend/jobboard/jobboard/images/wi.jpg')}}');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Our Services</h2>
            <p class="lead text-white">Laundry Auto Cleaning Melayani Berbagai Kebutuhan Laundry Kamu, Mulai Dari Laundry Kiloan, Satuan, Layanan Antar Jemput, Satu Malam Selesai, 6 Jam Selesai, Paket Laundry, Bahkan Jika Kamu Memiliki Usaha Yang Memerlukan Jasa Laundry, Auto Cleaning Dapat Bekerjasama Untuk Memenuhi Kebutuhan Laundry Kamu.</p>
          </div>
        </div>
        </div>
      </div>
    </section>


    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="{{ asset ('assets/frontend/jobboard/jobboard/images/coco.jpg')}}" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Sejarah Laundry</h2>
            <p>Berdirinya Usaha Bisnis Laundry merupakan bisnis rumahan yang belakangan ini sedang marak, usaha laundry merupakan salah satu bentuk usaha yang cukup menjanjikan. Di era serba cepat kebutuhan manusia akan waktu sangat diperlukan keefektifan kita mengelola dan memanejemen semua aktivitas rumah tangga membuat masyarakat ingin serba praktis. </p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <img src="{{ asset ('assets/frontend/jobboard/jobboard/images/sq_img_8.jpg')}}" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">JobBoard For Workers</h2>
            <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
            <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Team</h2>
          </div>
        </div>

        <div class="row align-items-center block__69944">

          <div class="col-md-6">
            <img src="{{ asset ('assets/frontend/jobboard/jobboard/images/person_6.jpg')}}" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Elisabeth Smith</h3>
            <p class="text-muted">Creative Director</p>
            <p>Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae voluptatibus ut? Ex vel  ad explicabo iure ipsa possimus consectetur neque rem molestiae eligendi velit?.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>

          <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="{{ asset ('assets/frontend/jobboard/jobboard/images/person_5.jpg')}}" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Chintan Patel</h3>
            <p class="text-muted">Creative Director</p>
            <p>Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae voluptatibus ut? Ex vel  ad explicabo iure ipsa possimus consectetur neque rem molestiae eligendi velit?.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
      </div>
    </section>

    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>

  </div>

    <!-- SCRIPTS -->
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/stickyfill.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/jquery.easing.1.3.js')}}"></script>

    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/quill.min.js')}}"></script>


    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/bootstrap-select.min.js')}}"></script>

    <script src="{{ asset ('assets/frontend/jobboard/jobboard/js/custom.js')}}"></script>


  </body>
</html>
