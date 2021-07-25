<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Abs Competences</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Favicons -->
    <link href="{{ asset(' assets/img/ico.ico') }}" rel="icon" />
    <link href="{{ asset(' assets/img/apple-touch-icon.png ') }}" rel="apple-touch-icon" />
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://kit.fontawesome.com/5a7a06c203.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link rel="icon" href="storage/1543661123118.jpg">

</head>

<body>
    <section class="container" id="header-section">
        <!-- ======= Header ======= -->
        <header class="container" id="header">
            <div class="row">
                <div class="col-2 col-sm-2 col-md-2 col-lg-1">
                    <h1 id="logo">
                        <a href="#">Abs Competences</a>
                    </h1>
                </div>
                <div class="col-5 col-sm-5 col-md-4 col-lg-7" style="padding-left: 1px;">
                    <img class="header-logo-info-fix" src="{{ asset('assets/img/logoinfo.png') }}" />
                </div>
                <div class="col-1 col-sm-1 col-md-3 col-lg-1"></div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6"><a href="{{ url('contact') }}"><img
                                    src="{{ asset('assets/img/joinus.png') }}" alt=""></a></div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-1"><a href="https://www.facebook.com/abscompetences/"
                                target="_blank"><i class="bx bxl-facebook"></i></a></div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-1"><a
                                href="https://www.linkedin.com/company/abs-competences/about/" target="_blank"><i
                                    class="bx bxl-linkedin"></i></a></div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-1"><a href="https://twitter.com/CompetencesAbs"
                                target="_blank"><i class="bx bxl-twitter"></i></a></div>

                    </div>
                    <div class=" col-md-12 col-lg-12 my-2 text-right">
                        @auth
                            <div class="text-right d-flex align-items-center  justify-content-end">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <button class="btn btn danger  text-danger">
                                        <i class="fas fa-sign-out-alt    text-danger"></i>Logout</button></a>
                                </form>
                                @if (Auth::user()->role == 'admin')
                                    <a href="login">
                                        <i class="fas fa-columns text-danger"></i> Dashboard</a>
                                @endif
                            </div>
                        @endauth
                        @guest
                            <div class="text-right d-flex align-items-center  justify-content-end">
                                <a class="mr-4" href="{{ route('login') }}">
                                    <i class="fas fa-user text-danger "></i> login</a>
                                <a href="{{ route('register') }}">
                                    <i class="fas fa-user text-danger"></i> register</a>
                            </div>
                        @endguest
                    </div>
                </div>
        </header>
        <br>
        <nav id="navigation" class="navbar-expand-lg">
            <a class="navbar-toggler" style="color:#FFF" type="button" data-bs-toggle="collapse" href="#collapsedNavbar"
                role="button" aria-expanded="false" aria-controls="collapsedNavbar" aria-label="Toggle navigation">
                X
            </a>
            <div class="left-corner"></div>
            <div class="right-corner"></div>
            <div class="collapse navbar-collapse" id="collapsedNavbar">
                <ul class="menu" id="responsive">
                    <li><a href="{{ url('acceuil') }}"
                            class="{{ Request::segment(1) == 'acceuil' || Request::segment(1) == '' ? 'current' : null }}">Accueil</a>
                    </li>
                    <li><a href="{{ url('Actualités') }}"
                            class="{{ Request::segment(1) === 'Actualités' ? 'current' : null }}">Actualités</a></li>
                    <li><a href="{{ url('services') }}"
                            class="{{ Request::segment(1) === 'services' ? 'current' : null }}">Nos sérvices</a>
                        <!-- Second Level / Start -->
                        {{-- <ul>
                                    <li><a href="strategie.html">Stratégie</a></li>
                                    <li><a href="finance.html">Finance</a></li>
                                    <li><a href="qualite.html">Qualité</a></li>
                                    <li><a href="commercial.html">Commercial </a></li>
                                    <li><a href="marketing.html">Marketing</a></li>
                                    <li><a href="rh.html">Ressources humaines</a></li>
                                    <li><a href="achat.html">Achat &amp; Approvisionnement</a></li>
                                    <li><a href="logistique.html">Logistique </a></li>
                                    <li><a href="production.html">Production </a></li>
                                </ul> --}}
                        <!-- Second Level / End -->
                    </li>
                    <li><a href="{{ url('partenaires') }}"
                            class="{{ Request::segment(1) === 'partenaires' ? 'current' : null }}">Partenaires</a>
                    </li>
                    <li><a href="{{ url('contact') }}"
                            class="{{ Request::segment(1) === 'contact' ? 'current' : null }}">Contact</a></li>
                    <li><a href="{{ url('locaux') }}"
                            class="{{ Request::segment(1) === 'locaux' ? 'current' : null }}">Locaux</a></li>
                    <li><a href="{{ url('références') }}"
                            class="{{ Request::segment(1) === 'références' ? 'current' : null }}">Références</a></li>
                </ul>
            </div>
        </nav>
        </header>

        <section class="container" id="patners-slider">
            <div class="section-title">
            </div>
            <div class="customer-logos slider">
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-04.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-03.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-05.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-06.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-07.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-08.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-09.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-10.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/References/portfolio-11.png') }}" />
                </div>
            </div>
        </section>
    </section>
    <!-- End Header -->

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
                                <a href="https://www.facebook.com/abscompetences/" target="_blank" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="https://www.linkedin.com/company/abs-competences/about/ " target="_blank"
                                    class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                <a href="https://twitter.com/CompetencesAbs" target="_blank" class="twitter"><i
                                        class="bx bxl-twitter"></i></a>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/slide.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
</body>

</html>
