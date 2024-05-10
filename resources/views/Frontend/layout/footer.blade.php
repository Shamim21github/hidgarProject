<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <img src="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}" alt="blog">
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt iure blanditiis
                            labore tempora inventore laborum error molestias,</p>
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

                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Our Services</h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('services') }}">Fiber Laser Cutting Machine</a></li>
                            <li><a href="{{ route('services') }}">Flexible Materials</a></li>
                            <li><a href="{{ route('services') }}">Non-metallic Hard Materials</a></li>
                            <li><a href="{{ route('services') }}">Sheet & Tube Laser Cutting Machine</a><li>
                            <li><a href="{{ route('services') }}">Organic & Fiber Materials</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Navigalion</h3>
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
                    <p class="copyright"> Copyright &copy; 2024 Hidgar <a href="#"></a>.
                        All
                        Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
