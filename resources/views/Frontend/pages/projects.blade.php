@extends('Frontend.layout.app')

@section('content')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Our Project</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>Project</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->s

    <!-- wpo-project-single-area start -->
    <div class="wpo-project-single-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="wpo-project-single-wrap">
                        <div class="wpo-project-single-item">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="wpo-project-single-title">
                                        <h3>Construction Management</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus dis
                                        posuere
                                        amet
                                        tincidunt commodo, velit. Ipsum, hac nibh fermentum nisi, platea
                                        condimentum
                                        cursus
                                        velit dui. Massa volutpat odio facilisis purus sit elementum. Non,
                                        sed velit
                                        dictum
                                        quam. Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.
                                        Id
                                        aliquet duis.</p>
                                    <p>Hac nibh fermentum nisi, platea condimentum cursus velit dui. Massa
                                        volutpat
                                        odio
                                        facilisis purus sit elementum. Non, sed velit dictum quam. Id risus
                                        pharetra
                                        est, at
                                        rhoncus, nec ullamcorper tincidunt. Id aliquet duis sollicitudin
                                        diam, elit
                                        sit Et nisi in libero facilisis sed est.</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="wpo-project-single-content-des-right">
                                        <ul>
                                            <li>Location :<span>7 Lake Street,London</span></li>
                                            <li>Client :<span>wpOceans</span></li>
                                            <li>Architect :<span>Don Johnson</span></li>
                                            <li>Project Type :<span>Construction</span></li>
                                            <li>Duration :<span>6 Month</span></li>
                                            <li>Completion :<span>15 Dec 2024</span></li>
                                            <li>Share :<span>Industrial, Business</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-project-single-main-img owl-carousel">
                                <img src="{{ asset('Frontend/assets/images/project-single/1.jpg') }}" alt="">
                                <img src="{{ asset('Frontend/assets/images/project-single/4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="wpo-project-single-item list-widget">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="wpo-project-single-title">
                                        <h3>Our Strategies</h3>
                                    </div>
                                    <p>Massa volutpat odio facilisis purus sit elementum. Non, sed velit
                                        dictum
                                        quam. Id
                                        risus pharetra est, at rhoncus, nec ullamcorper tincidunt. Id
                                        aliquet duis
                                        sollicitudin diam.</p>
                                    <ul>
                                        <li>Non saed velit dictum quam risus pharetra esta.</li>
                                        <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.
                                        </li>
                                        <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                                        <li>Massa volutpat odio facilisis purus sit elementum.</li>
                                        <li>Elit curabitur amet risus bibendum.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="wpo-project-single-item-quote">
                                        <p>"Amazing looking theme and instantly turns your application into
                                            a great
                                            looking one. Really shows that pro_ fessionals built this theme
                                            up. Very
                                            happy with the way the theme looks ."</p>
                                        <span>Robert - <span>Yellow Theme</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-project-single-item">
                            <div class="wpo-project-single-title">
                                <h3>Our approach</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat
                                suspendisse aenean
                                tellus augue morbi risus. Sit morbi vitae morbi sed urna sed purus. Orci
                                facilisi
                                eros sed pellentesque. Risus id sed tortor sed scelerisque. Vestibulum elit
                                elementum, magna id viverra non, velit. Pretium, eros, porttitor fusce
                                auctor vitae
                                id. Phasellus scelerisque nibh eleifend vel enim mauris purus. Rutrum vel
                                sem
                                adipiscing nisi vulputate molestie scelerisque molestie ultrices. Eu, fusce
                                vulputate diam interdum morbi ac a.</p>
                        </div>
                        <div class="wpo-project-single-gallery">
                            <div class="row mt-4">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="wpo-p-details-img">
                                        <img src="{{ asset ('Frontend/assets/images/project-single/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="wpo-p-details-img">
                                        <img src="{{ asset ('Frontend/assets/images/project-single/3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-project-single-item list-widget">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="wpo-project-single-title">
                                        <h3>Resieved goals</h3>
                                    </div>
                                    <ul>
                                        <li>Non saed velit dictum quam risus pharetra esta.</li>
                                        <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.
                                        </li>
                                        <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                                        <li>Massa volutpat odio facilisis purus sit elementum.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 list-widget-s">
                                    <div class="wpo-project-single-title">
                                        <h3>Results</h3>
                                    </div>
                                    <ul>
                                        <li>Mauris dignissim blandit cursus imperdiet accumsan lorem.</li>
                                        <li>Nam id in non sed cras purus nunc et.</li>
                                        <li>Mauris orci, cursus nisl odio est adipiscing gravida magna eget.
                                        </li>
                                        <li>Quis mauris vel felis convallis nulla dignissim.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-project-single-item">
                            <div class="wpo-project-single-item">
                                <div class="wpo-project-contact-area">
                                    <div class="wpo-contact-title">
                                        <h2>Have project in mind? Let's discuss</h2>
                                        <p>Get in touch with us to see how we can help you with your project
                                        </p>
                                    </div>
                                    <div class="wpo-contact-form-area">
                                        <form method="post" class="contact-validation-active" id="contact-form-main">
                                            <div class="row">
                                                <div class="col col-lg-6 col-md-6 col-12">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Your Name*">
                                                </div>
                                                <div class="col col-lg-6 col-md-6 col-12">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email*">
                                                </div>
                                                <div class="col col-lg-12 col-12">
                                                    <select name="service" class="form-control">
                                                        <option disabled="disabled" selected="">Services
                                                        </option>
                                                        <option>Mechanical Engineering</option>
                                                        <option>Petroleum Refinery</option>
                                                        <option>Power &amp; Energy</option>
                                                    </select>
                                                </div>
                                                <div class="fullwidth col col-lg-12 col-12">
                                                    <textarea class="form-control" name="note" id="note" placeholder="Message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="submit-area">
                                                <button type="submit" class="theme-btn">Send
                                                    Massege</button>
                                                <div id="loader">
                                                    <i class="ti-reload"></i>
                                                </div>
                                            </div>
                                            <div class="clearfix error-handling-messages">
                                                <div id="success">Thank you Massage Sended</div>
                                                <div id="error"> Error occurred while sending email. Please
                                                    try
                                                    again
                                                    later. </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-service-single-area end -->
@endsection
