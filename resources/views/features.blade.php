@extends('base.base1')

@section('title') Contact @endsection

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
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li class="active"><a href="{{ route('features') }}">Features</a></li>
                                        <li><a href="{{ route('tutorial') }}">Tutorial</a></li>
                                        <li><a href="{{ route('contact') }}" onClick="removehash()">Contact</a></li>
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
                            <h2>App Features</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- features-area -->
        <section class="s-features-area pt-150 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon01.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Maintainable</h3>
                                <p>This app is designed to be easy to use and
                                    easy to maintain. Providing you a tool that
                                    can be easy to configure and use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon02.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Easy to Use</h3>
                                <p>You can now scan a text from the image in
                                    your phone using this OCR app in just
                                    a few clicks and you can do whatever you want.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon03.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Loaded of Features</h3>
                                <p>Providing you with a wide range 
                                    of features that can be used for different
                                    use cases in your everyday life</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon04.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Fully Secured</h3>
                                <p>This app is safe and secure.
                                    You can use this app in your phone
                                    without any security issues. This
                                    app doesn't read any data from your
                                    phone.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon05.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Open Source</h3>
                                <p>This will help other programmers or
                                    future researchers to develop their own 
                                    OCR application by using this as their reference</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-single-features mb-30">
                            <div class="s-features-icon">
                                <img src="{{ asset('img/s_features_icon06.png') }}" alt="icon">
                            </div>
                            <div class="features-content">
                                <h3>Simple UI</h3>
                                <p>This app has simple UI for
                                    visually impaired persons to increase
                                    their capability to recognize characters
                                    using this app.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

@endsection