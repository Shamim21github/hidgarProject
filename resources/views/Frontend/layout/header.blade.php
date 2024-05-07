
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
                            <a class="navbar-brand" href="{{route('home')}}"><img
                                    src="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li class="menu-item-has-children">
                                    <a class="active" href="{{ route('home') }}">Home</a>
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
                                        <li><a href="{{ route('products') }}">Laser Cutting Sheet Metal Equipment </a></li>
                                        <li><a href="{{ route('products') }}"> Combination sheet and tube laser cutting Equipment
                                        </a></li>
                                        <li><a href="{{ route('products') }}">Laser Welding Equipment </a></li>
                                        <li><a href="{{ route('products') }}">Metal Bending Equipment </a></li>
                                        <li><a href="{{ route('products') }}">Pipe Bending Equipment </a></li>
                                        <li><a href="{{ route('products') }}">Laser Cleaning Equipment </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
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
                                <a class="theme-btn" href="contact.html">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
</header>