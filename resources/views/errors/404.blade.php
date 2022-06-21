@extends('base.base1')

@section('404 Not Found') @endsection

@section('content')
    
    <!-- header -->
    {{-- <header id="header-sticky" class="transparent-header">
        <div class="container">
            <div class="header-border s-header-border">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="menu-area">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="active"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="features.html">Features</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                        <div class="header-btn text-center">
                            <a href="#" class="h-btn">7 DAYS TRAIL</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- header-end -->

    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{ asset('img/breadcrumb_bg.jpg') }}">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb-wrap text-center">
                            <h2>404</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- 404-area -->
        <section class="error-area pt-150 pb-145">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="error-wrap text-center">
                            <div class="error-img mb-50">
                                <img src="{{ asset('img/error_img.png') }}" alt="404">
                            </div>
                            <div class="error-text">
                                <h2>Opps! Page Not Found</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404-area-end -->

@endsection