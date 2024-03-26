@extends('Frontend.layout.app')

@section('content')
<section class="wpo-about-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left-image">
                    <div class="ab-3">
                        <img src="{{ asset('Frontend/assets/images/ab-3.jpg') }}" alt="">
                    </div>
                    <div class="ab-4">
                        <img src="{{ asset('Frontend/assets/images/ab-4.jpg') }}" alt="">
                    </div>                    
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
                    <div class="text">
                        <h2>About Company</h2>
                        <h3>We Are Solving All of Your Business Problem</h3>
                        <p>
                            Our industry's business policy encompasses the strategies, guidelines, and
                            practices
                            that technology companies use to achieve their goals and objectives.
                        </p>
                    </div>
                    <div class="list">
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

                    </div>
                    <div class="about-btn">
                        <a href="{{ route('about') }}" class="theme-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
