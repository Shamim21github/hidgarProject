@extends('Frontend.layout.app')

@section('content')
<style>
    .enlargeable {
        transition: transform 0.3s ease; /* Smooth transition */
        cursor: pointer; /* Change cursor to indicate interactivity */
    }

    .enlarged {
        transform: scale(1.5); /* Scale the image to 1.5 times its original size */
        z-index: 1000; /* Ensure the enlarged image appears above other elements */
        position: relative;
    }
</style>
<section class="wpo-about-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="">
                    <div class="ab-3" style="width:1000px!important">
                        <img src="{{ asset('Frontend/assets/images/about2.jpg') }}" alt="" class="enlargeable">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
                    <div class="text">
                        {{-- <h2>About Us</h2> --}}
                      <h2><marquee behavior="" direction="right">About Us</marquee></h2> 
                        {{-- <h3>We Are Solving All of Your Business Problem</h3> --}}
                        <p>
                            Hidgar is a global business dedicated to the development, manufacturing, and distribution of laser cutting equipment.Our commitment is in creating and producing laser machines of the highest caliber. Since its founding in 1976, the business has continued to develop at a rapid pace.
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imgElement = document.querySelector('.enlargeable');

        imgElement.addEventListener('click', function() {
            imgElement.classList.toggle('enlarged');
        });
    });
</script>
@endsection
