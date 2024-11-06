<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}">
    <title>Hidgar Template</title>
    <link href="{{ asset('Frontend/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/sass/style.css') }}" rel="stylesheet">
</head>
<style>
    .enlargeable {
        transition: transform 0.3s ease;
        /* Smooth transition */
        cursor: pointer;
        /* Change cursor to indicate interactivity */
    }

    .enlarged {
        transform: scale(1.5);
        /* Scale the image to 1.5 times its original size */
        z-index: 1000;
        /* Ensure the enlarged image appears above other elements */
        position: relative;
    }

   /* Full-screen overlay for the welcome screen */
/* Full-screen overlay for the welcome screen with animated gradient background */
.welcome-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: linear-gradient(-45deg, #000B47, #ff6b6b, #01B0FF, #4ecdc4, #556270);
    background-size: 400% 400%;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    z-index: 9999;
    opacity: 1;
    transition: opacity 1s ease, transform 1s ease;
    animation: gradientAnimation 8s ease infinite;
}

/* Gradient animation */
@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* Welcome message styling */
.welcome-message h1 {
    font-size: 2.5rem;
    font-family: 'Poppins', 'Roboto Slab';
    text-align: center;
    text-transform: uppercase;
    color: #ffffff;
    animation: fadeInText 1.5s ease forwards;
}

/* Fade-in text effect */
@keyframes fadeInText {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Slide-out effect for the welcome screen */
.hide-welcome-screen {
    opacity: 0;
    transform: translateY(-100%);
    transition: opacity 0.8s ease, transform 0.8s ease;
}


</style>


<body>

    <div id="welcomeScreen" class="welcome-screen">
        <div class="welcome-message">
            <h1>Welcome to the Hidgar Website</h1>
        </div>
    </div>


    <!-- start page-wrapper -->
    <div class="page-wrapper">

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
                                    {{-- <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li> --}}
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
                                    <a class="navbar-brand" href="{{ route('home') }}"><img
                                            src="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}"
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
                                

                                        <li class="menu-item-has-children">
                                            <a href="{{ route('products') }}">Products</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('products1') }}">Fiber Laser Machine for Metal Sheet Cutting</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('economicalMetal') }}">Standard Power </a></li>
                                                        <li><a href="{{ route('basicMetal') }}">High Power </a></li>
                                                        <li><a href="{{ route('exchangeMetal') }}">Exchange Table</a></li>
                                                        <li><a href="{{ route('enclosedMetal') }}">Enclosed Intelligent </a></li>
                                                        <li><a href="{{ route('singleMetal') }}">Enclosed Single Bed </a></li>
                                                        <li><a href="{{ route('largeMetal') }}">Large Size  </a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('products2') }}">Fiber Laser Machine for Metal Tube Cutting</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('miniTube') }}">Mini Tube Cutting Machine</a></li>
                                                        <li><a href="{{ route('standardTubeCutting') }}">Standard Tube Cutting Machine</a></li>
                                                        <li><a href="{{ route('threeChuckTube') }}">Three Chuck  Tube Cutting Machine</a></li>
                                                        <li><a href="{{ route('autoLoadingTube') }}">Auto Loading  Tube Cutting Machine</a></li>
                                                        <li><a href="{{ route('suspensionTube') }}">Suspension  Tube Cutting Machine</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('products20') }}">Combined Fiber Laser for Metal Sheet & Tube Cutting</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('standardTube') }}">Standard </a></li>
                                                        <li><a href="{{ route('exchangeTube') }}">Exchange Table </a></li>
                                                        <li><a href="{{ route('enclosedTube') }}">Enclosed  </a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('products3') }}">Laser Welding Equipment</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('HandheldLaser') }}">Handheld</a></li>
                                                        <li><a href="{{ route('LaserWelding') }}">3 in 1</a></li>
                                                        <li><a href="{{ route('automaticLaser') }}">HJR Robotic</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('products6') }}">Laser Cleaning Equipment</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('HandheldLaserMetal') }}">Handheld</a></li>
                                                        <li><a href="{{ route('suitcaseMetal') }}">Pulshed</a></li>
                                                        <li><a href={{ route('backpackPulse') }}">Backpack</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        


                                        <li class="menu-item-has-children ">
                                            <a href="{{ route('services') }}">Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('products') }}">Machineries/Products </a>
                                                </li>
                                                <li><a href="{{ route('services', ['#consultancy']) }}">
                                                        Consultancy</a>
                                                </li>
                                                <li><a href="{{ route('services', ['#after-sales-service']) }}"> After
                                                        Sales Service</a></li>
                                                <li><a href="{{ route('services', ['#parts_accessories']) }}"> Parts &
                                                        Accessories</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                   
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i class="fi flaticon-loupe"></i>
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
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ asset('Frontend/assets/images/slider/slide-14.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <a href="{{ route('services', ['#after-sales-service']) }}">
                                        <div id="consultancy" class="container-fluid">
                                            <div data-swiper-parallax="300" class="slide-title mt-4">
                                                <h2>After Sells Service</h2>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ asset('Frontend/assets/images/slider/slide-14.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <a href="{{ route('services', ['#parts_accessories']) }}">
                                        <div id="consultancy" class="container-fluid">
                                            <div data-swiper-parallax="300" class="slide-title mt-4">
                                                <h2>Metal Working Machines</h2>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        
                    </div> 
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ asset('Frontend/assets/images/slider/slide-14.jpg') }}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <a href="{{ route('services', ['#consultancy']) }}">
                                        <div id="consultancy" class="container-fluid">
                                            <div data-swiper-parallax="300" class="slide-title mt-4">
                                                <h2>Advanced Consultancy</h2>
                                            </div>
                                        </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
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
                        <div class="">
                            <div class="ab-3" style="width:1000px!important">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" alt=""
                                    class="enlargeable" width="50%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="content">
                            <div class="text">
                                <h2>About Us</h2>
                               
                                <p>
                                    Hidgar is a global business dedicated to the development, manufacturing, and
                                    distribution of laser cutting equipment.Our commitment is in creating and producing
                                    laser machines of the highest caliber. Since its founding in 1976, the business has
                                    continued to develop at a rapid pace.
                                </p>
                            </div>
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
                            <h3>Additional Services</h3>
                            {{-- <h3>Our Services</h3> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <a href="{{ route('economicalMetal') }}">
                                    <img src="{{ asset('Frontend/assets/images/service/10.jpg') }}" alt="">
                                    <span>01</span>
                                    <div class="line-one"></div>
                                    <div class="line-two"></div>
                            </div>

                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/laserMachine.jpg') }}" alt="">
                                    {{-- <img src="{{ asset('Frontend/assets/images/service/icon-1.svg') }}" alt=""> --}}

                                </div>
                                <h2>
                                    <a href="{{ route('services') }}">Sheet & Tube Laser Cutting Machine</a>
                                </h2>
                                <p>Finest Products</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <a href="{{ route('largeMetal') }}">
                                    <img src="{{ asset('Frontend/assets/images/service/17.jpg') }}" alt="">
                                    <span>02</span>
                                    <div class="line-one"></div>
                                    <div class="line-two"></div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/laserMachine.jpg') }}" alt="">
                                    {{-- <img src="{{ asset ('Frontend/assets/images/service/icon-2.svg') }}" alt=""> --}}
                                </div>
                                <h2><a href="{{ route('services') }}">Fiber Laser Cutting Machine</a></h2>
                                <p>Best Fiber Laser Cutting Machine is <br> available.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <div class="image">
                                <a href="{{ route('products6') }}">
                                    <img src="{{ asset('Frontend/assets/images/service/11.jpg') }}" alt="">
                                    <span>03</span>
                                    <div class="line-one"></div>
                                    <div class="line-two"></div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/laserMachine.jpg') }}" alt="">
                                    {{-- <img src="{{ asset ('Frontend/assets/images/service/icon-3.svg') }}" alt=""> --}}
                                </div>
                                <h2><a href="{{ route('services') }}">Laser Welder</a></h2>
                                <p>We have both Laser Welder & Laser Cutting machines.
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
                            <a href="{{ route('enclosedMetal') }}">
                                <img src="{{ asset('Frontend/assets/images/project/8.jpg') }}"
                                    alt="Laser Cutting Machine">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{ route('products1') }}">Laser Cutting Machine</a>
                            </h3>
                            <p></p>
                        </div>

                    </div>
                    <div class="project-card">
                        <div class="image">
                            <a href="{{ route('singleMetal') }}">
                                <img src="{{ asset('Frontend/assets/images/project/7.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products1') }}">Single Bed</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="image">
                            <a href="{{ route('products2') }}">
                                <img src="{{ asset('Frontend/assets/images/project/6.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products2') }}">Tube Laser Cutting Machine</a></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="image">
                            <a href="{{ route('products6') }}">
                                <img src="{{ asset('Frontend/assets/images/project/5.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('products6') }}">Handheld Laser Metal Cleaner</a></h3>
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
                                    <img src="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}"
                                        alt="blog">
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
                                    <li><a href="{{ route('products') }}">Products</a></li>
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
    <script src="{{ asset('Frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('Frontend/assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('Frontend/assets/js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imgElement = document.querySelector('.enlargeable');

            imgElement.addEventListener('click', function() {
                imgElement.classList.toggle('enlarged');
            });
        });
    </script>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    const welcomeScreen = document.getElementById("welcomeScreen");
    const mainContent = document.getElementById("mainContent");

    // Set a delay for the welcome message fade-in and slide-out
    setTimeout(function() {
        // Add the slide-out class to hide the welcome screen with animation
        welcomeScreen.classList.add("hide-welcome-screen");

        // Wait until the animation is complete, then show the main content
        setTimeout(function() {
            welcomeScreen.style.display = "none";
            mainContent.style.display = "block";
        }, 800); // Adjust based on the transition duration
    }, 1000); // Adjust this delay for how long the welcome message displays
});

</script>

</body>



</html>
