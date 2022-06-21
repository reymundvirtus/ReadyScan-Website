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
                                        <li><a href="{{ route('tutorial') }}">Tutorial</a></li>
                                        <li class="active"><a href="{{ route('contact') }}">Contact</a></li>
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
                            <h2>App Support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- contact-area -->
        <section class="contact-area pt-140 pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="section-title border-none mb-50 text-center">
                            <h2>Don’t hesitate to send us a Message. We happy to assist you!</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="contact-form text-center">
                            <form action="#">
                                <input type="text" name="name" placeholder="Type Name">
                                <input type="email" name="email" placeholder="Type Email">
                                <input type="text" placeholder="Subject">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                                <button class="btn">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
        <!-- contact-info -->
        <section class="contact-info pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info mb-30 text-center">
                            <div class="contact-icon mb-30">
                                <img src="{{ asset('img/contact_icon01.png') }}" alt="img">
                            </div>
                            <div class="contact-info-content">
                                <h4>Address</h4>
                                <p>STA Teresita Canaman, Camarines Sur PH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info mb-30 text-center">
                            <div class="contact-icon mb-30">
                                <img src="{{ asset('img/contact_icon02.png') }}" alt="img">
                            </div>
                            <div class="contact-info-content">
                                <h4>Phone</h4>
                                <p>+639105312080</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info mb-30 text-center">
                            <div class="contact-icon mb-30">
                                <img src="{{ asset('img/contact_icon03.png') }}" alt="img">
                            </div>
                            <div class="contact-info-content">
                                <h4>Emails</h4>
                                <p>reymundvirtus@gmail.com</p>
                                <p>reymundvirtus@outlook.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-end -->

@endsection