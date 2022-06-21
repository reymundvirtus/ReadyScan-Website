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
                                        <li><a href="{{ route('features') }}">Features</a></li>
                                        <li class="active"><a href="{{ route('tutorial') }}">Tutorial</a></li>
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
                            <h2>SOON!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

@endsection