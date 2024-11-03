@extends('Frontend.layout.app')

<style>
    .card-container {
            display: flex;
            gap: 75px;
            flex-wrap: wrap;
            max-width: 1500px;
            margin: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            /* flex: 1 1 300px;
            max-width: 500px; */
        }

        .card h2 {
            color: #333;
            margin-top: 0;
        }

        .card p {
            color: #555;
            line-height: 1.6;
            text-align: justify;
        }


    

        .content-container {
            display: flex;
            align-items: center;
            gap: 40px;
            max-width: 1500px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .image-grid img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .text-content {
            max-width: 600px;
        }

        .text-content h2 {
            text-align: center;
            margin-top: 0;
        }

        .text-content p {
            text-align: justify;
            line-height: 1.6;
            color: #555;
        }

</style>

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
            <h2>Machineries/Products</h2>
            {{-- <h3>Our Services</h3> --}}
        </div>
        <div class="service-slider owl-carousel col-lg-4 col-md-6 col-12">
            <div class=" service-card ">
                <div class="image">
                    <a href="{{ route('products1') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/10.jpg') }}" alt="">
                    <span>01</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">  
                        <img src="{{ asset('Frontend/assets/images/service/icon-1.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('products1') }}">Fiber Laser Cutting Machine</a></h2>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <a href="{{ route('products2') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/17.jpg') }}" alt="">
                    <span>02</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-2.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('products2') }}"> Combination Sheet & Tube Laser Cutting Machine</a></h2>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <a href="{{ route('products3') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/11.jpg') }}" alt="">
                    <span>03</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-3.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('products3') }}">Laser Welding Equipment</a></h2>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <a href="{{ route('products4') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/18.jpg') }}" alt="">
                    <span>04</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-4.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Metal Bending Equipment</a></h2>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <a href="{{ route('products6') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/18.jpg') }}" alt="">
                    <span>05</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-4.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Pipe Bending Machine</a></h2>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <a href="{{ route('products6') }}">
                        <img src="{{ asset ('Frontend/assets/images/service/18.jpg') }}" alt="">
                    <span>06</span>
                    <div class="line-one"></div>
                    <div class="line-two"></div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/service/icon-4.svg')}}" alt="">
                    </div>
                    <h2><a href="{{ route('services') }}">Laser Cleaning Equipment </a></h2>
                    <p></p>
                </div>
            </div>
        </div>

        {{-- <div  class="card-container">
            <div id="consultancy" class="card">
                <img src="" alt="">
                <h2 style="text-align:center">Consultancy</h2>
                <p>For over 30 years, Hidgar has accumulated immense knowledge, data, experience, and goodwill in the metal working industry. We believe knowledge is to be shared and implemented. Therefore, we are always delighted to provide consultancy to passionate people in the metal working industry. From factory setup layout, work flow management to providing required machinery, our consultancy goes through every step needed to create a state-of-the-art Metal Working Processing Line.
                    <a href="{{ route('contact') }}">Contact Us</a>
                </p>
            </div>
            <div id="after-sales-service" class="card">
                <img src="" alt="">
                <h2 style="text-align:center">After Sales Service</h2>
                <p>Customers can always be relaxed knowing that Hidgar is there to provide industry-leading customer service. Our dedicated engineering team in Germany works across Europe, ensuring all solutions are provided efficiently and convincingly. Outside Europe, we have regional branches and distributors in all continents. Our regional teams and distributors, supported by our home team in Germany, ensure customers worldwide receive top-notch after-sales service.</p>
            </div>

            <div class="content-container">
                <img src="" alt="">
                <div class="image-grid">
                    <img src="{{ asset('Frontend/assets/images/machine/01.png') }}" alt="Parts & Accessories">
                    <img src="{{ asset('Frontend/assets/images/machine/02.png') }}" alt="Parts & Accessories">
                    <img src="{{ asset('Frontend/assets/images/machine/03.png') }}" alt="Parts & Accessories">
                    <img src="{{ asset('Frontend/assets/images/machine/04.png') }}" alt="Parts & Accessories">
                    <img src="{{ asset('Frontend/assets/images/machine/05.png') }}" alt="Parts & Accessories">
                    <img src="{{ asset('Frontend/assets/images/machine/06.png') }}" alt="Parts & Accessories">
                </div>
                <div id="parts_accessories" class="text-content">
                    <h2>Parts & Accessories</h2>
                    <p>Readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many websites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
            </div>
        </div> --}}


       
    <div class="container my-5 p-4 rounded shadow-lg bg-light">
        <div class="card-container">
            <!-- Consultancy Card -->
            <div class="card bg-primary text-white">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('Frontend/assets/images/machine/01.png') }}" alt="Consultancy" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2>Consultancy</h2>
                            <p class="text-white">
                                For over 30 years, Hidgar has accumulated immense knowledge, data, experience, and goodwill in the metal working industry. We believe knowledge is to be shared and implemented. Therefore, we are always delighted to provide consultancy to passionate people in the metal working industry. From factory setup layout, workflow management to providing required machinery, our consultancy goes through every step needed to create a state-of-the-art Metal Working Processing Line.
                            </p>
                            <a href="{{ route('contact') }}" class="btn btn-warning mt-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- After Sales Service Card -->
            <div class="card bg-info text-white">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('Frontend/assets/images/machine/02.png') }}" alt="After Sales Service" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 >After Sales Service</h2>
                            <p class="text-white">
                                Customers can always be relaxed knowing that Hidgar is there to provide industry-leading customer service. Our dedicated engineering team in Germany works across Europe, ensuring all solutions are provided efficiently and convincingly. Outside Europe, we have regional branches and distributors in all continents, ensuring customers worldwide receive top-notch after-sales service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Parts & Accessories Card -->
            <div class="card bg-success text-white">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="image-grid d-flex flex-wrap">
                            <img src="{{ asset('Frontend/assets/images/machine/01.png') }}" alt="Parts & Accessories" class="img-fluid mb-2">
                            <img src="{{ asset('Frontend/assets/images/machine/02.png') }}" alt="Parts & Accessories" class="img-fluid mb-2">
                            <img src="{{ asset('Frontend/assets/images/machine/03.png') }}" alt="Parts & Accessories" class="img-fluid">
                            <img src="{{ asset('Frontend/assets/images/machine/04.png') }}" alt="Parts & Accessories" class="img-fluid mb-2">
                            <img src="{{ asset('Frontend/assets/images/machine/05.png') }}" alt="Parts & Accessories" class="img-fluid mb-2">
                            <img src="{{ asset('Frontend/assets/images/machine/06.png') }}" alt="Parts & Accessories" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 >Parts & Accessories</h2>
                            <p class="text-white">
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, making it look like readable English. Many desktop publishing packages use Lorem Ipsum as their default model text, and various versions have evolved over the years.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>




@endsection