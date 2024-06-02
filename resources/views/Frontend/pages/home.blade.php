<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset ('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}">
    <title>Hidgar Template</title>
    <link href="{{ asset ('Frontend/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset ('Frontend/assets/sass/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        {{-- <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset ('Frontend/assets/images/preloader.png') }}" alt="">
                </div>
            </div>
        </div> --}}
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header">
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-lg-7 col-md-8 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li class="marquee-container"><span class="marquee-text">HIDGAR</span></li>
                                    {{-- <li><i class="fi flaticon-phone-call"></i> 01976388373</li>
                                    <li><i class="fi ti-location-pin"></i> Dhaka, Bangladesh</li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-4 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    {{-- <li class="language">
                                        <select name="language" id="language">
                                            <option value="">English</option>
                                            <option value="">Arabic</option>
                                            <option value="">France</option>
                                        </select>
                                    </li> --}}
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end topbar -->
            <div class="wpo-site-header wpo-site-header-s3">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset ('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0 ">
                                        <li class="menu-item-has-children">
                                            <a class="" href="#">Home</a>                                           
                                        </li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-single.html">Team Single</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="menu-item-has-children ">
                                            <a href="{{ route('products') }}">Products</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('products1') }}">Laser Cutting Sheet Metal Equipment </a></li>
                                                <li><a href="{{ route('products2') }}"> Combination sheet and tube laser cutting Equipment
                                                </a></li>
                                                <li><a href="{{ route('products3') }}">Laser Welding Equipment </a></li>
                                                <li><a href="{{ route('products4') }}">Metal Bending Equipment </a></li>
                                                <li><a href="{{ route('products5') }}">Pipe Bending Equipment </a></li>
                                                <li><a href="{{ route('products6') }}">Laser Cleaning Equipment </a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children ">
                                            <a href="{{ route('services') }}">Service</a>
                                        </li>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="{{ route('projects') }}">Project</a>
                                        </li> --}}
                                        {{-- <li class="menu-item-has-children">
                                            <a href="{{ route('team') }}">Team</a>
                                        </li> --}}
                                        {{-- <li class="menu-item-has-children">
                                            <a href="{{ route('blog') }}">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                    {{-- <div class="mini-cart">
                                        <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-cart"></i>
                                            <span class="cart-count">2</span>
                                        </button>
                                        <div class="mini-cart-content">
                                            <button class="mini-cart-close"><i class="ti-close"></i></button>
                                            <div class="mini-cart-items">
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Bev Accent Chair</a>
                                                        <span class="mini-cart-item-price">$20.15 x 1</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="assets/images/shop/mini-cart/img-2.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Black Timber Chairs</a>
                                                        <span class="mini-cart-item-price">$13.25 x 2</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-action clearfix">
                                                <span class="mini-checkout-price">Subtotal: <span>$215.14</span></span>
                                                <div class="mini-btn">
                                                    <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                    <a href="cart.html" class="view-cart-btn">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i
                                                    class="fi flaticon-loupe"></i>
                                            </button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-loupe"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-form">
                                        <a class="theme-btn" href="{{ route('contact') }}">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->

        <!-- start of wpo-hero-slide-section-->
        <section class="wpo-hero-slider wpo-hero-slider-s2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset ('Frontend/assets/images/slider/slide-11.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>We provide Heavy Laser Cutting Machine</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="{{ route('about') }}" class="theme-btn">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset ('Frontend/assets/images/slider/slide-12.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>We provide Laser Cutting Equipment</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="{{ route('about') }}" class="theme-btn">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset ('Frontend/assets/images/slider/slide-13.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>We provide Mental Bending Equipment </h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="{{ route('about') }}" class="theme-btn">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- start of wpo-about-section -->
        <section class="wpo-about-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="about-left-image">
                            <div class="ab-3">
                                <img src="{{ asset ('Frontend/assets/images/ab-7.jpg') }}" alt="">
                            </div>
                            <div class="ab-4">
                                <img src="{{ asset ('Frontend/assets/images/ab-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="content">
                            <div class="text">
                                <h2>About Us</h2>
                                {{-- <h3>We Are Solving All of Your Business Problem</h3> --}}
                                <p>
                                    Hidgar is a global business dedicated to the development, manufacturing, and distribution of laser cutting equipment.Our commitment is in creating and producing laser machines of the highest caliber. Since its founding in 1996, the business has continued to develop at a rapid pace.
                                </p>
                            </div>
                            {{-- <div class="list">
                                <ul>
                                    <li><i class="ti-check"></i> <span>Raw Materials</span></li>
                                    <li><i class="ti-check"></i> <span>Quality Control</span></li>
                                    <li><i class="ti-check"></i> <span>Finished Goods</span></li>
                                </ul>
                                <ul>
                                    <li><i class="ti-check"></i> <span>Raw Materials</span></li>
                                    <li><i class="ti-check"></i> <span>Quality Control</span></li>
                                    <li><i class="ti-check"></i> <span>Finished Goods</span></li>
                                </ul>

                            </div> --}}
                            <div class="about-btn">
                                <a href="{{ route('about') }}" class="theme-btn">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start of wpo-service-section -->
        <section class="wpo-service-section-s2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="wpo-section-title-s2">
                            <h3>What We Offer</h3>
                            {{-- <h3>Our Services</h3> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/service/5.jpg') }}" alt="">
                                <span>01</span>
                                <div class="line-one"></div>
                                <div class="line-two"></div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset ('Frontend/assets/images/service/icon-1.svg') }}" alt="">
                                </div>
                                <h2><a href="{{ route('services') }}">Sheet & Tube Laser Cutting Machine</a></h2>
                                <p>Finest Products 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/service/6.jpg') }}" alt="">
                                <span>02</span>
                                <div class="line-one"></div>
                                <div class="line-two"></div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset ('Frontend/assets/images/service/icon-2.svg') }}" alt="">
                                </div>
                                <h2><a href="{{ route('services') }}">Fiber Laser Cutting Machine</a></h2>
                                <p>Best Laser Cutting Machine is available.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/service/7.jpg') }}" alt="">
                                <span>03</span>
                                <div class="line-one"></div>
                                <div class="line-two"></div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset ('Frontend/assets/images/service/icon-3.svg') }}" alt="">
                                </div>
                                <h2><a href="{{ route('services') }}">Organic & Fiber Materials</a></h2>
                                <p>We have both Organic & Fiber Materials 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start of wpo-history-section -->
        <section class="wpo-history-section-s2">
            <h3 class="d-none">hidden</h3>
            <a href="https://www.youtube.com/embed/7nINBVnJwmE?si=PmPGD-XyVR3xqp-p" class="video-btn"
                data-type="iframe">
                <span></span>
            </a>
        </section>

        <!-- start of wpo-team-section -->
        {{-- <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>Expert Team</h2>
                            <h3>Our Expert Team.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/team/img-1.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Robert Fox</a></h3>
                                <span>HR Leader</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/team/img-2.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Kristin Watson</a></h3>
                                <span>Human Recources</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/team/img-3.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Guy Hawkins</a></h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/team/img-4.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Albert Flores</a></h3>
                                <span>Department Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- start of wpo-project-section -->
        <section class="wpo-project-section ">
            <div class="container-fluid">
                <div class="project-slider owl-carousel">
                    <div class="project-card">
                        <div class="image">
                            <img src="{{ asset ('Frontend/assets/images/project/1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products') }}">Laser Cutting Machine</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="image">
                            <img src="{{ asset ('Frontend/assets/images/project/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products') }}">Custom Fabrication</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="image">
                            <img src="{{ asset ('Frontend/assets/images/project/3.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products') }}">Welding Machine</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="image">
                            <img src="{{ asset ('Frontend/assets/images/project/4.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products') }}">Heavy Equipment</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start of wpo-testimonial-section -->
        {{-- <section class="wpo-testimonial-section section-padding">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>testimonial</h2>
                            <h3>What Our Clients Say's</h3>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide owl-carousel">
                    <div class="testimonial-card">
                        <div class="content">
                            <p>Meridian sun strikes the upper surface of the impenetrable foliage of my
                                trees, and but a few stray gleams steal into the inner sanctuary, I throw
                                myself </p>
                        </div>
                        <div class="client">
                            <div class="client-img">
                                <img src="{{ asset ('Frontend/assets/images/testimonial/img-2.jpg') }}" alt="">
                            </div>
                            <div class="client-text">
                                <h4>Cathi Falcon Ami</h4>
                                <span>CEO Barta</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="content">
                            <p>Meridian sun strikes the upper surface of the impenetrable foliage of my
                                trees, and but a few stray gleams steal into the inner sanctuary, I throw
                                myself </p>
                        </div>
                        <div class="client">
                            <div class="client-img">
                                <img src="{{ asset ('Frontend/assets/images/testimonial/img-3.jpg') }}" alt="">
                            </div>
                            <div class="client-text">
                                <h4>Jenelia Orkid pasa</h4>
                                <span>Fashion Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="content">
                            <p>Meridian sun strikes the upper surface of the impenetrable foliage of my
                                trees, and but a few stray gleams steal into the inner sanctuary, I throw
                                myself </p>
                        </div>
                        <div class="client">
                            <div class="client-img">
                                <img src="{{ asset ('Frontend/assets/images/testimonial/img-1.jpg') }}" alt="">
                            </div>
                            <div class="client-text">
                                <h4>Hanial nilton jhon</h4>
                                <span>Managin dirctor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- start of wpo-blog-section -->
        {{-- <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>blog</h2>
                            <h3>nwes & articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/blog/img-1.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <ul>
                                    <li>01-05-2024</li>
                                    <li>By: Manik Doe</li>
                                </ul>
                                <h2><a href="blog-single.html">Why Industry Are A Juicy Target For Cyberattack.</a>
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis, libero,
                                </p>
                                <a href="blog-single.html">READ MORE <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/blog/img-2.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <ul>
                                    <li>01-05-2024</li>
                                    <li>By: Manik Doe</li>
                                </ul>
                                <h2><a href="blog-single.html">Exploring The Wild Side in an Industrial Jungle.</a>
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis, libero,
                                </p>
                                <a href="blog-single.html">READ MORE <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{ asset ('Frontend/assets/images/blog/img-3.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <ul>
                                    <li>01-05-2024</li>
                                    <li>By: Manik Doe</li>
                                </ul>
                                <h2><a href="blog-single.html">EIndustrial Profits Grow Faster.</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis, libero,
                                </p>
                                <a href="blog-single.html">READ MORE <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="{{ asset ('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}" alt="blog">
                                </div>
                                <p></p>
                                <div class="social-widget">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Navigation</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Products</a></li>
                                    <li><a href="{{ route('services') }}">Service</a></li>
                                    {{-- <li><a href="blog.html">blog</a></li> --}}
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-8 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>What we Offer</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ route('services') }}">Fiber Laser Cutting Machine</a></li>
                                    <li><a href="{{ route('services') }}">Flexible Materials</a></li>
                                    <li><a href="{{ route('services') }}">Non-metallic Hard Materials</a></li>
                                    <li><a href="{{ route('services') }}">Sheet & Tube Laser Cutting Machine</a></li>
                                    <li><a href="{{ route('services') }}">Organic & Fiber Materials</a></li>
                                </ul>
                            </div>
                        </div>


                        

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>Get latest updates and offers</p>
                                <div class="email-from">
                                    <input class="fild" type="text" placeholder="Your email">
                                    <button type="reset"><i class="ti-arrow-top-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            {{-- <p class="copyright"> Copyright &copy; 2024 Shamim <a href="index.html"></a>.
                                All
                                Rights Reserved.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset ('Frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{asset ('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset ('Frontend/assets/js/modernizr.custom.js') }}"></script>
    <script src="{{asset ('Frontend/assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset ('Frontend/assets/js/script.js') }}"></script>
</body>



</html>
