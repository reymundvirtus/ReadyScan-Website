@extends('base.base1')

@section('title') About @endsection

@section('content')

    <!-- header -->
    <header id="header-sticky" class="transparent-header">
        <div class="container">
            <div class="header-border">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/logos.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="menu-area">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li class="active"><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('features') }}">Features</a></li>
                                        <li><a href="{{ route('tutorial') }}">Tutorial</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                        <div class="header-btn text-center">
                            <a href="#" class="h-btn">DOWNLOAD</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                            <h2>About The App</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section class="about-area about-md-p pt-135 pb-105">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-img text-center wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{ asset('img/app_slider01.png')  }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title border-none mb-40">
                            <h2>ReadyScan an OCR Mobile Application</h2>
                        </div>
                        <div class="about-content">
                            <p>This application is designed for the visually impaired and 
                            has blurred vision persons who are the primary user of this 
                            application which can be used as their assistance in recognizing 
                            characters.</p>
                            <p>You can also use this for different use cases. This is free and
                            Open Source Software. You can get the source code from this <a href="github.com" target="__blank">link</a>.
                            </p>
                            <div class="about-btn">
                                <a href="#" class="btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- inner-features -->
        <section class="inner-features pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center border-none mb-95">
                            <h2>The only app you will need</h2>
                            <p>Simple and Lightweight OCR Application that
                            Contains various features for your needs</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="s-inner-features text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/about_icon01.png')  }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Loaded of Features</h4>
                                <p>Providing you with a wide range 
                                of features that can be used for different
                                use cases in your everyday life</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="s-inner-features active text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/about_icon02.png')  }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Maintainable</h4>
                                <p>This app is designed to be easy to use and
                                easy to maintain. Providing you a tool that
                                can be easy to configure and use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="s-inner-features text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/about_icon03.png')  }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Open Source</h4>
                                <p>This will help other programmers or
                                future researchers to develop their own 
                                OCR application by using this as their reference</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-features-end -->

@endsection