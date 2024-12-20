@extends('Frontend.layout.app')

@section('content')
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
    </style>


    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        {{-- <h2>About</h2> --}}
                        {{-- <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>About</span></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <section class="wpo-about-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" class="img-fluid rounded-start" alt="Card Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4><strong>Innovation and Efficacy - Sculpting the future of metal working machineries and solutions.</strong></h4>
                                    <p>Hidgar provides top in class solutions for all forms of metal working, manufactured by state-of-the-art German engineering. Hidgar machineries are built with precision and ease of use in mind, upholding German heritage through its engineering and expertise. Our collective vision is to help the industry strive for perfection and meet all of our customer’s needs through our exemplary range of products and portfolio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Duplicate the above card for each additional card with relevant content -->
                <!-- Card 2 -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" class="img-fluid rounded-start" alt="Card Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4><strong>A Comprehensive line of metal working products</strong></h4>
                                    <p>Laser Cutting Machines, Metal Bending machines to Laser Cleaning Machines and much more. Our wide range allows us to provide our customer with complete workflow solutions which can endure even the most rigorous production volumes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" class="img-fluid rounded-start" alt="Card Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4><strong>We Embrace our Heritage and History</strong></h4>
                                    <p>Since its founding in 1976, Hidgar has embraced its German heritage by maintaining absolute precise engineering and quality assurance. We use advanced German engineering techniques which we have been perfecting since our beginning to produce all our machines, ensuring that our machines stay strong, rigid and endure even the toughest working conditions and order volumes. We also pride ourselves on our customer service experience, assuring all customers needs are met.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 4 -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" class="img-fluid rounded-start" alt="Card Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4><strong>Consultancy and After Sales Service</strong></h4>
                                    <p>Hidgar looks after the future by making sure upcoming entrepreneurs and anyone planning to improve their metal working standard gets extensive consultancy on how their factories are run. Whether it’s a small workshop or a full-fledged industrial factory, we are there to share our knowledge and expertise to make sure customers can be fully confident in building their production lines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Card 5 -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ asset('Frontend/assets/images/about.jpg') }}" class="img-fluid rounded-start" alt="Card Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4><strong>We Serve and Protect the Environment</strong></h4>
                                    <p>Hidgar’s policy is to not only provide advanced solutions, but to make sure the solutions involve respecting and protecting the environment. Through our Health, Safety and Environmental policies we make sure to keep lowering energy use, water use and removing all hazardous substances.</p>
                                </div>
                            </div>
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
