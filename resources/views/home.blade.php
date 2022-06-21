@extends('base.base')

@section('title') Home @endsection

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
                                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('features') }}">Features</a></li>
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
        <!-- banner-area -->
        <section class="banner-area s-banner-bg d-flex align-items-center p-relative mean-container" data-background="{{ asset('img/banner_bg02.png') }}">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content s-banner-content">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">OCR: <span>ReadyScan</span> for Visually Imapaired Persons</h2>
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipxumd dummy text are used in this industry. So replace <br>
                            your orginal text. Lorem dummy</p> --}}
                            <a href="#" class="btn wow fadeInLeft" data-wow-delay="0.6s">Download Now</a>
                            <a href="#" class="btn wow fadeInRight" data-wow-delay="0.6s">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="s-banner-app p-relative">
                            <img src="{{ asset('img/banner_app01.png') }}" alt="img">
                            <img src="{{ asset('img/banner_app_shape.png') }}" class="b-app-shape wow zoomIn" data-wow-delay="1s" alt="img">
                            <div class="circle-animation">
                                <div class="slider-pulse"></div>
                                <div class="circle" style="animation-delay: -2s"></div>
                                <div class="circle" style="animation-delay: -1s"></div>
                                <div class="circle" style="animation-delay: 0s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
        <!-- inner-features -->
        <section class="inner-features pt-170 pb-130">
            <div class="container">
                <h2>This OCR App contains the following</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="s-inner-features text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/s_about_icon01.png') }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Easy to Use</h4>
                                <p>You can now scan a text from the image in
                                    your phone using this OCR app in just
                                    a few clicks and you can do whatever you want.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="s-inner-features active text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/s_about_icon02.png') }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Simple UI</h4>
                                <p>This app has simple UI for
                                visually impaired persons to increase
                                their capability to recognize characters
                                using this app.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="s-inner-features text-center mb-50">
                            <div class="ifeatures-icon mb-30">
                                <img src="{{ asset('img/s_about_icon03.png') }}" alt="img">
                            </div>
                            <div class="ifeatures-content">
                                <h4>Safe</h4>
                                <p>
                                    This app is safe and secure.
                                    You can use this app in your phone
                                    without any security issues. This
                                    app doesn't read any data from your
                                    phone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-features-end -->
        <!-- business-process -->
        {{-- <section class="business-process fix pb-180">
            <div class="container">
                <div class="single-business-process pb-180">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="s-bp-icon mb-40">
                                <img src="{{ asset('img/s_business_icon01.png') }}" alt="icon">
                            </div>
                            <div class="bp-content">
                                <h2>Push mails notification to <br> your subscribers</h2>
                                <p>Lorem ipsum dummy text are used here so replace your app
                                data, Lorem ipsum dummy text are used here so replace your
                                app data dummy text are</p>
                                <a href="#" class="btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bp-img text-center wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('img/s_business_img01.png') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-business-process">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-12">
                            <div class="s-bp-icon mb-40">
                                <img src="{{ asset('img/s_business_icon02.png') }}" alt="icon">
                            </div>
                            <div class="bp-content">
                                <h2>Discover best favourite <br>
                                things near you</h2>
                                <p>Lorem ipsum dummy text are used here so replace your app
                                data, Lorem ipsum dummy text are used here so replace your
                                app data dummy text are</p>
                                <a href="#" class="btn">Download</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bp-img wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('img/s_business_img02.png') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- business-process-end -->
        <!-- exclusive-features -->
        <section class="exclusive-features p-relative pb-145 pt-180" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title white-title border-none mb-65">
                            <h2 class="mb-0">Exclusive Features</h2>
                            <p>Exclusive features for different use cases</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-efeatures mb-60">
                                    <div class="ef-icon mb-30">
                                        <img src="{{ asset('img/ef_icon01.png') }}" alt="icon">
                                    </div>
                                    <div class="ef-content">
                                        <h5>Text to Speech</h5>
                                        <p>Text to Speech (TTS) is a technology
                                        that converts text into speech.
                                        This feature is used to convey information
                                        to the user.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-efeatures mb-60">
                                    <div class="ef-icon mb-30">
                                        <img src="{{ asset('img/ef_icon02.png') }}" alt="icon">
                                    </div>
                                    <div class="ef-content">
                                        <h5>Translation</h5>
                                        <p>Translation is a process of converting
                                        one language into another. To understand
                                        by the user what is the meaning of the 
                                        extracted text.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-efeatures mb-60">
                                    <div class="ef-icon mb-30">
                                        <img src="{{ asset('img/ef_icon03.png') }}" alt="icon">
                                    </div>
                                    <div class="ef-content">
                                        <h5>Image Crop</h5>
                                        <p>Image crop is a feature that is used to
                                        crop the image to the required size where
                                        the text is going to be extract.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-efeatures mb-60">
                                    <div class="ef-icon mb-30">
                                        <img src="{{ asset('img/ef_icon04.png') }}" alt="icon">
                                    </div>
                                    <div class="ef-content">
                                        <h5>Text to PDF</h5>
                                        <p>Text to PDF is a feature that is used to
                                        convert the extrated text into PDF format.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="screenshot-active text-right">
                            <div class="single-screenshot">
                                <img src="{{ asset('img/app_slider01.png') }}" alt="img">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/app_slider02.png') }}" alt="img">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/app_slider03.png') }}" alt="img">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/app_slider04.png') }}" alt="img">
                            </div>
                            <div class="single-screenshot">
                                <img src="{{ asset('img/app_slider05.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="e-features-shape">
                <img src="{{ asset('img/screenshot_circle.png') }}" alt="">
            </div>
        <div id="faq"></div>
        </section>
        <!-- exclusive-features-end -->
        <!-- pricing-area -->
        {{-- <section class="pricing-area pt-170 pb-170">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title s-section-title text-center border-none mb-120">
                            <h2>Pricing Plan</h2>
                            <p>Lorem ipsum dummy text are used here so replace your app data</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box">
                            <div class="pricing-head mb-40 text-center">
                                <h4>StartUp</h4>
                                <div class="price-count">
                                    <h2>00<span>$/Private</span></h2>
                                </div>
                            </div>
                            <div class="pricing-list mb-50">
                                <ul>
                                    <li>Lorem ipsum dummy text</li>
                                    <li>unde omnis iste natus error</li>
                                    <li>voluptatem accusantium</li>
                                    <li>Loremv ipsum dummy text</li>
                                    <li>Loremv ipsum dummy text</li>
                                </ul>
                            </div>
                            <div class="pricing-btn text-center">
                                <a href="#" class="btn">Get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box active">
                            <div class="pricing-head mb-40 text-center">
                                <h4>Standard</h4>
                                <div class="price-count">
                                    <h2>55<span>$/Business</span></h2>
                                </div>
                            </div>
                            <div class="pricing-list mb-50">
                                <ul>
                                    <li>Lorem ipsum dummy text</li>
                                    <li>unde omnis iste natus error</li>
                                    <li>voluptatem accusantium</li>
                                    <li>Loremv ipsum dummy text</li>
                                    <li>Loremv ipsum dummy text</li>
                                </ul>
                            </div>
                            <div class="pricing-btn text-center">
                                <a href="#" class="btn">Get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box">
                            <div class="pricing-head mb-40 text-center">
                                <h4>Pro</h4>
                                <div class="price-count">
                                    <h2>95<span>$/Professional</span></h2>
                                </div>
                            </div>
                            <div class="pricing-list mb-50">
                                <ul>
                                    <li>Lorem ipsum dummy text</li>
                                    <li>unde omnis iste natus error</li>
                                    <li>voluptatem accusantium</li>
                                    <li>Loremv ipsum dummy text</li>
                                    <li>Loremv ipsum dummy text</li>
                                </ul>
                            </div>
                            <div class="pricing-btn text-center">
                                <a href="#" class="btn">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- pricing-area-end -->
        <!-- faq-area -->
        <section class="faq-area pt-55 pb-180">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title s-section-title border-none">
                            <h2>FAQ</h2>
                            <p>See some of frequently asked question from our users.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="{{ asset('img/faq_img.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-wrapper">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" 
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Is my phone supported?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Our Mobile Apps *are supported on the following platforms:
                                            <br><br>
                                            iOS (iPhone, iPod touch, and/or iPad) and Android. <br>
                                            Android (4.0, 4.1, 4.2, 4.3 and 4.4) <br>
                                            Android 5.0 <br>
                                            Android 6.0 <br>
                                            Android 7.0 <br>
                                            Android 8.0 <br>
                                            Android 9.0 <br>
                                            OS 10 <br>
                                            OS 11 <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Do I have to buy the Mobile App?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            No. Our Mobile App is completely free to download and install.
                                            Just download the ReadyScan app and use it whatever you want.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                What features does the ReadyScan have?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            This app contains the following features:
                                            <br><br>
                                            Text to Speech <br>
                                            Translation <br>
                                            Image to Text <br>
                                            Image Crop <br>
                                            Text to PDF <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How do I get the ReadyScan App for my phone?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Just click the download button on the home page and you are good to go.
                                            You can also download the app from the Apple App Store or Google Play Store.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Does it cost anything to use the ReadyScan App?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            No. ReadyScan app is completely free to use. You can use the features
                                            of the app without any cost. Stay tuned for updates.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->
        <!-- testimonial-area -->
        <section class="testimonial-area s-testimonial-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/epep.jpg') }}" class="epep" alt="quote">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="section-title s-section-title white-title border-none mb-70">
                            <h2>Developer</h2>
                            <p>A 21-year-old aspiring software engineer based in Camarines Sur, Philippines.</p>
                        </div>
                        <div class="s-testimonial-active">
                            <div class="s-single-testimonial">
                                <div class="s-testi-content mb-40">
                                    <p>
                                        Hi! I'm a Third Year Student studying Computer Science at Naga College Foundation.
                                        <br><br>
                                        I'm also interested in open source projects, mobile development, including full stack software development, 
                                        web and backend.
                                        <br><br>
                                        When I'm not into coding, I enjoy reading and learning about new emerging 
                                        technologies. I share the things I've learned in my blog on medium, and the 
                                        projects I've done is posted on github.
                                    </p>
                                </div>
                                <div class="s-testi-avatar">
                                    <h5>Reymund Virtus</h5>
                                    <span>Developer</span>
                                </div>
                            </div>
                            {{-- <div class="s-single-testimonial">
                                <div class="s-testi-content mb-40">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                </div>
                                <div class="s-testi-avatar">
                                    <h5>Kathring</h5>
                                    <span>Product Designer</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
        <!-- brand-area -->
        {{-- <div class="brand-area pt-180 pb-170">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active">
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img02.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img01.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img03.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img04.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img05.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img06.png') }}" alt="img">
                            </div>
                            <div class="single-brand text-center">
                                <img src="{{ asset('img/brand_img01.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- brand-area-end -->
        <!-- blog-area -->
        {{-- <section class="blog-area pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title s-section-title text-center border-none mb-75">
                            <h2>Latest Blog Posts</h2>
                            <p>Lorem ipsum dummy text are used here so replace your app data</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-50">
                            <div class="s-blog-thumb p-relative">
                                <a href="#"><img src="{{ asset('img/h_blog01.jpg') }}" alt="img"></a>
                                <a href="#" class="b-tag">Software</a>
                            </div>
                            <div class="s-blog-content">
                                <span>14 Feb 2019</span>
                                <h4><a href="#">Mdipisicing elit, sed eiusmod tempor incididunt</a></h4>
                                <a href="#">Read more <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-50">
                            <div class="s-blog-thumb p-relative">
                                <a href="#"><img src="{{ asset('img/h_blog02.jpg') }}" alt="img"></a>
                                <a href="#" class="b-tag green">Iphone X</a>
                            </div>
                            <div class="s-blog-content">
                                <span>14 Feb 2019</span>
                                <h4><a href="#">MicroSoft just launch app for lorem dummy.</a></h4>
                                <a href="#">Read more <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-50">
                            <div class="s-blog-thumb p-relative">
                                <a href="#"><img src="{{ asset('img/h_blog03.jpg') }}" alt="img"></a>
                                <a href="#" class="b-tag red">Development</a>
                            </div>
                            <div class="s-blog-content">
                                <span>14 Feb 2019</span>
                                <h4><a href="#">Qusmod tempor incididunt ut labore et dolore magna</a></h4>
                                <a href="#">Read more <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog-area-end -->
        <!-- newsletter-area -->
        <section class="newsletter-area h-newsletter-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title s-section-title white-title text-center border-none mb-75">
                            <h2>Subscribe Newsletter</h2>
                            <p>Subscribe to get email updates regarding to the update of the app</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-shape"><img src="{{ asset('img/sub_img.png') }}" alt="img"></div>
            <div class="sub-shape s-sub-shape"><img src="{{ asset('img/sub_img02.png') }}" alt="img"></div>
        </section>
        <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-wrapper pt-100 pb-45">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-40">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logofoot.png') }}" alt="Logo"></a>
                            </div>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="fa-solid fa-phone"></i>+639105312080</li>
                                    <li><i class="fa-solid fa-envelope"></i>reymundvirtus@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-40">
                                <h3>Features</h3>
                            </div>
                            <div class="s-footer-link">
                                <ul>
                                    <li><a href="#features" onClick="removehash()">Text to Speech</a></li>
                                    <li><a href="#features" onClick="removehash()">Translation</a></li>
                                    <li><a href="#features" onClick="removehash()">Image Crop</a></li>
                                    <li><a href="#features" onClick="removehash()">Text to PDF</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-40">
                                <h3>Company</h3>
                            </div>
                            <div class="s-footer-link">
                                <ul>
                                    <li><a href="{{ route('features') }}">Features</a></li>
                                    <li><a href="#faq" onClick="removehash()">FAQ</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-40">
                                <h3>Connect us</h3>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/reymund.virtus.5"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/geez_silent"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/reymundvirtus/"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://reymundvirtus.medium.com/"><i class="fa-brands fa-medium"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fb-link">
                            <ul>
                                <li><a href="#">Privacy policy</a></li>
                                <li>|</li>
                                <li><a href="#">Customer support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="s-copyright-text text-right">
                            <p><a href="https://reymundvirtus.herokuapp.com/" style="color: rgb(183, 183, 205)" target="__blank">Copyright@reymundvirtus.herokuapp.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

@endsection