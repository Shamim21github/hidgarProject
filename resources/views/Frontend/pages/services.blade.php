@extends('Frontend.layout.app')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Service</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>Service</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->

<!-- start of wpo-service-section -->
<section class="wpo-service-section s2 section-padding">
    <div class="service-wrap">
        <div class="wpo-section-title">
            <h2>What We Offer</h2>
            <h3>Our Services</h3>
        </div>
        <div class="service-slider owl-carousel">
            <div class="item">
                <div class="image">
                    <img src="{{ asset ('Frontend/assets/images/service/1.jpg')}}" alt="">
                    <span>01</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-1.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Power & Energy Sectors</a></h2>
                    <p>Sagittis fringilla a scelerisque sitro consetetur nunc. Urna est eget
                        pellentesque.</p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="{{ asset ('Frontend/assets/images/service/2.jpg')}}" alt="">
                    <span>02</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-2.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Architectures & Design</a></h2>
                    <p>Sagittis fringilla a scelerisque sitro consetetur nunc. Urna est eget
                        pellentesque.</p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="{{ asset ('Frontend/assets/images/service/3.jpg')}}" alt="">
                    <span>03</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-3.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Explore Tiling & Painiting</a></h2>
                    <p>Sagittis fringilla a scelerisque sitro consetetur nunc. Urna est eget
                        pellentesque.</p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="{{ asset ('Frontend/assets/images/service/4.jpg')}}" alt="">
                    <span>04</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-4.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Petroleum Production</a></h2>
                    <p>Sagittis fringilla a scelerisque sitro consetetur nunc. Urna est eget
                        pellentesque.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="wpo-project-section ">
    <div class="container-fluid">
        <div class="project-slider owl-carousel">
            <div class="project-card">
                <div class="image">
                    <img src="{{ asset('Frontend/assets/images/project/1.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3><a href="project-single.html">Custom Fabrication</a></h3>
                    <p>Quis id at rhoncus consequat. Aliquam in. Velit phasellus augue tristique integer arcu.
                        Elit
                        sed vestibulum tristique suspendisse ut sit.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="image">
                    <img src="{{ asset('Frontend/assets/images/project/2.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3><a href="project-single.html">Custom Fabrication</a></h3>
                    <p>Quis id at rhoncus consequat. Aliquam in. Velit phasellus augue tristique integer arcu.
                        Elit
                        sed vestibulum tristique suspendisse ut sit.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="image">
                    <img src="{{ asset('Frontend/assets/images/project/3.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3><a href="project-single.html">Custom Fabrication</a></h3>
                    <p>Quis id at rhoncus consequat. Aliquam in. Velit phasellus augue tristique integer arcu.
                        Elit
                        sed vestibulum tristique suspendisse ut sit.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="image">
                    <img src="{{ asset('Frontend/assets/images/project/4.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h3><a href="project-single.html">Custom Fabrication</a></h3>
                    <p>Quis id at rhoncus consequat. Aliquam in. Velit phasellus augue tristique integer arcu.
                        Elit
                        sed vestibulum tristique suspendisse ut sit.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection