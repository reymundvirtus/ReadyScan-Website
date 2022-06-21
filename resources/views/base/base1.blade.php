
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/eye-scan.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/elegant-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        @yield('content')

        <!-- newsletter-area -->
        <section class="newsletter-area s-newsletter-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center border-none mb-75">
                            <h2>Get reguler updates</h2>
                            <p>Subscribe to get email updates regarding to the update of the app</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <span class="moveshape-one"></span>
            <span class="moveshape-two"></span>
            <span class="moveshape-three"></span>
            <span class="moveshape-four"></span>
            <span class="moveshape-five"></span>
            <div class="newsletter-app wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s"><img src="{{ asset('img/vertical_phone1.png') }}" alt="img" class="alltuchtopdown"></div>
        </section>
        <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

        <!-- footer -->
        <footer class="footer-wrap p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="footer-widget text-center">
                            <div class="footer-logo mb-40">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logofoot.png') }}" alt="Logo"></a>
                            </div>
                            <div class="footer-content mb-60">
                                <p>OCR: ReadyScan for Visually Impaired Persons</p>
                            </div>
                            <div class="footer-link pb-20">
                                <ul>
                                    <li><a href="#">Affiliate program</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="copyright-text text-center">
                            <p>©2022 App, Design by <a href="https://reymundvirtus.herokuapp.com/">Reymund Virtus</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-app wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><img src="{{ asset('img/vertical_phone2.png') }}" alt="img"></div>
        </footer>
        <!-- footer-end -->

		<!-- JS here -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('js/ajax-form.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/particles.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
