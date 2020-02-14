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
                            <li><a href="about">About</a></li>
                            {{-- <li class="has-children">
                                <a href="job-listings.html">Job Listings</a>
                                <ul class="dropdown">
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="post-job.html">Post a Job</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="service" class="active">Jadwal</a></li>
                            {{-- <li class="has-children">
                                <a href="service" class="active">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="service" class="active">Services</a></li>
                                    <li><a href="service-single.html">Service Single</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Frequently Ask Questions</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="blog">Blog</a></li>
                            <li><a href="gallery">Gallery</a></li>
                            {{-- <li><a href="contact">Contact</a></li> --}}
                            <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a>
                            </li>
                            <li class="d-lg-none"><a href="login">Log In</a></li>
                        </ul>
                    </nav>

                    <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                        <div class="ml-auto">
                            <a href="post-job.html"
                                class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span
                                    class="mr-2 icon-add"></span>Post a Job</a>
                            <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                                    class="mr-2 icon-lock_outline"></span>Log In</a>
                        </div>
                        <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                    </div>

                </div>
            </div>
        </header>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/frontend/jobboard/jobboard/images/wi.jpg')}}');" id="home-section">
            id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Jadwal Laundry  </h1>
                        <div class="custom-breadcrumbs">
                            <a href="#">Home</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>Services</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section services-section bg-light block__62849" id="next-section">
            <div class="container">

                <div class="row">
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-magnet d-block"></span></span> --}}
                            <h3>Senin</h3>
                            <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-trophy d-block"></span></span> --}}
                            <h3>Selasa</h3>
                            <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-laptop d-block"></span></span> --}}
                            <h3>Rabu</h3>
                            <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-search d-block"></span></span> --}}
                            <h3>Kamis</h3>
                            <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-paper-plane d-block"></span></span> --}}
                            <h3>Jum'at</h3>
                            <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                        <a class="block__16443 text-center d-block">
                            {{-- <span class="custom-icon mx-auto"><span class="icon-plug d-block"></span></span> --}}
                            <h3>Sabtu</h3>
                           <p>Buka 08.00</p>
                            <p>Tutup 19.00</p>
                        </a>

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
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small>
                        </p>
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
