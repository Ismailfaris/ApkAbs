    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Abs Competences</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/ico.ico" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/5a7a06c203.js" crossorigin="anonymous"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: Sailor - v4.0.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>-->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="/index"><img src="assets/img/logo.png" alt="" class="img-fluid" /></a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="{{ Request::segment(1) === 'index' ? 'active' : null }}" href="/index">Accueil</a></li>
                        <li><a class="{{ Request::segment(1) === 'Actualités' ? 'active' : null }}" href="/Actualités">Actualités</a></li>
                        <li><a  class="{{ Request::segment(1) === 'Calendrier' ? 'active' : null }}" href="/Calendrier">Calendrier</a></li>

                        <li class="dropdown">
                            <a class="{{ Request::segment(1) === 'services' ? 'active' : null }}" href="/services">Compétences <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-1">Stratégie</a>
                                </li>
                                <li><a class="{{ Request::segment(1) === 'tab-2' ? 'active' : null }}" href="#tab-2">Finance</a></li>
                                <li><a href="#">Qualité</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Ressources humaines</a></li>
                                <li><a href="#">Achat &amp; Approvisionnement</a></li>
                                <li><a href="#">Logistique</a></li>
                                <li><a href="#">Production</a></li>
                            </ul>
                        </li>
                        <li><a class="{{ Request::segment(1) === 'partenaires' ? 'active' : null }}" href="/partenaires">Partenaires</a></li>
                        <li><a class="{{ Request::segment(1) === 'contact' ? 'active' : null }}" href="/contact">Contact</a></li>
                        <li><a class="{{ Request::segment(1) === 'locaux' ? 'active' : null }}" href="/locaux">Locaux</a></li>

                        <li><a class="{{ Request::segment(1) === 'références' ? 'active' : null }}" href="/références">Références</a></li>
                        <!-- <li><a href="index.html" class="getstarted">Get Started</a></li> -->
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->
        <br />
        <br />
        <br />
        <br />

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>ABS COMPETENCES</h3>
                                <p>
                                    Adresse : 39, rue de Lille -N°4 Emile Zola Belvédère <br />
                                    20300 Casablanca Maroc<br /><br />
                                    <strong> Tél1 :</strong> +212 522 30 52 36<br />
                                    <strong> Tél2 :</strong> +212 522 31 14 42<br />
                                    <strong> Fax :</strong> +212 522 30 22 13<br />
                                    <strong> E-mail :</strong> contact@abscompetences.com<br />
                                </p>
                                <div class="social-links mt-3">
                                    <a href="https://www.facebook.com/abscompetences/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="https://www.linkedin.com/company/abs-competences/about/ " target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                    <a href="https://twitter.com/CompetencesAbs" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Menu</h4>
                            <ul>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/index">Accueil</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/Actualités">Actualités</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i> <a href="/Calendrier">Calendrier</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/services">Compétences</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/partenaires">Partenaires</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <ul>
                                <br />
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/locaux">Locaux</a>
                                </li>

                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="/références">Références</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ 
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/slide.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    </body>

    </html>