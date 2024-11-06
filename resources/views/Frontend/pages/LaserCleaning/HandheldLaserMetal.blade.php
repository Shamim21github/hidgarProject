@extends('Frontend.layout.app')

@section('content')
    <style>
        .rounded-box {
            display: flex;
            gap: 20px;
            align-items: center;
            /* justify-content: center; */
            padding: 10px;
        }

        .text-dark {
            padding: 20px;

        }

        .card {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 70%;
            height: auto;
            border-radius: 8px;
        }

        .image-thumbnails {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            justify-content: center;
        }

        .image-thumbnails img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .image-thumbnails img:hover {
            transform: scale(1.1);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            animation: zoom 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #bbb;
        }

        ul.text-dark li {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        ul.text-dark li i {
            color: #007bff;
            /* Icon color */
            font-size: 1.2em;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Metal Work with 3-in-1 Laser Welding Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Weld, cut, and clean with unmatched ease. Our 3 in 1 laser welder is also the most cost-effective solution available.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/laserWelder02.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserWelder02.jpg') }}" class="card-img-top enlargeable"
                            alt="Standard Power Fiber Laser Cutting Machine" style="height:400px;width:700px;">
                    </a>

                    <div class="image-thumbnails">
                        <img src="{{ asset('Frontend/assets/images/1/9.jpg') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/9.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/1/10.jpg') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/10.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/1/11.jpg') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/11.jpg') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">3 in 1 Handheld Metal Laser Welder
                            - Revolutionary Multi-functional Device</h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features:  Offering laser welding, cutting, and cleaning capabilities. This machine cuts costs and expands metal processing options.</p>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i> Precision Cutting Made Affordable</li>
                                <li><i class="fas fa-check-circle"></i> Ease of Use for Beginners</li>
                                <li><i class="fas fa-check-circle"></i> Ideal for Small-Scale Metal Work</li>
                            </ul>
                        </div> <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-md">
                                <a style="color:white; text-decoration: none;" href="{{ route('contact') }}">Get a quote</a>
                            </button>
                        </div>
                        <br> <br> <br> <br> <br>



                    </div>
                </div>

            </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption" class="text-center"></div>
        </div>
        <div class="col-md-12">
            <h4 class="text-center">3 in 1 Handheld Laser Welding Parameters</h4>
        </div>
        <div class="col-md-12 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Model No.</th>
                        <th scope="col">Handheld Laser Welding Cleaning Cutting Machine</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <th scope="row">Laser power supply</th>
                        <td>1000W, 1500W, 2000W, 3000W</td>
                    </tr>
                    <tr>
                        <th scope="row">Power Adjustment Range</th>
                        <td>10%-100%</td>
                    </tr>
                    <tr>
                        <th scope="row">Output Central Wavelength</th>
                        <td>1070±20nm</td>
                    </tr>
                    <tr>
                        <th scope="row">Cooling Method</th>
                        <td>Water cooling</td>
                    </tr>
                    <tr>
                        <th scope="row">Welding Width</th>
                        <td>0-5mm</td>
                    </tr>
                    <tr>
                        <th scope="row">Cleaning Width</th>
                        <td>Max 80mm</td>
                    </tr>
                    <tr>
                        <th scope="row">Wire Diameter</th>
                        <td>0.8/ 1.0/ 1.2/ 1.6mm</td>
                    </tr>
                    <tr>
                        <th scope="row">Max Wire Feeding Speed</th>
                        <td>100mm/s</td>
                    </tr>
                    <tr>
                        <th scope="row">Upgrade</th>
                        <td>Smoke Purifier</td>
                    </tr>



                </tbody>
            </table>
        </div>

        <div>
            <h3 class="text-center mt-5">
                3-Function Laser Technology
            </h3>
        </div>



        <div class="col-md-12 d-flex justify-content-between flex-wrap mt-4">
            <!-- Product Card 1 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product4.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">Laser Welding Gun</h4>
                    <p class="card-text">The high-intensity laser beam in this feature is designed for metal welding. It offers precise and rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>
            </div>
        
            <!-- Product Card 2 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product4.1.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">Laser Welding Gun</h4>
                    <p class="card-text">The high-intensity laser beam in this feature is designed for metal welding. It offers precise and rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>
            </div>
        
            <!-- Product Card 3 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product4.2.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">Laser Welding Gun</h4>
                    <p class="card-text">The high-intensity laser beam in this feature is designed for metal welding. It offers precise and rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>
            </div>
        </div>
        

        <div>
            <h3 class="text-center mt-5">
                3 in 1 laser welder Core Benefits

            </h3>
        </div>



        <div class="col-md-12 d-flex justify-content-between flex-wrap mt-4">
            <!-- Product Card 1 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product5.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">Durable and Ultra-Light</h4>
                    <p class="card-text">At only 700g, this laser head is much lighter than usual. With dual protective lenses, it’s designed to prevent the common issue of lens damage seen in traditional welders.</p>
                </div>
            </div>
        
            <!-- Product Card 2 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product5.1.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">High-quality materials</h4>
                    <p class="card-text">High-quality stainless steel is what we use to build the entire machine. It guarantees lasting stability and lowers the need for maintenance.</p>
                </div>
            </div>
        
            <!-- Product Card 3 -->
            <div class="card text-center mb-4" style="width: 32%;">
                <div class="card-body">
                    <div class="product-img d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                        <img src="{{ asset('Frontend/assets/images/product5.2.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="card-title mt-3">Cost Savings</h4>
                    <p class="card-text">The upfront cost may be more, but it's outweighed by the long-term benefits. You avoid the expense of multiple units, making the investment financially sound.</p>
                </div>
            </div>
        </div>
        



        <div>
            <h3 class="text-center mt-5">
                Laser Welder Cutter Cleaner Metal
            </h3>
        </div>



        <div class="col-md-12 d-flex flex-wrap justify-content-between mt-4">
            <!-- Start of Product Item Card -->
            <div class="card product-item text-center mb-4" style="width: 18%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('Frontend/assets/images/product6.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h4 class="mt-3">Tee Weld</h4>
            </div>
            <!-- Repeat similar structure for other products -->
        
            <div class="card product-item text-center mb-4" style="width: 18%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('Frontend/assets/images/product6.1.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h4 class="mt-3">Fillet Weld</h4>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 18%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('Frontend/assets/images/product6.2.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h4 class="mt-3">Spot Weld</h4>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 18%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('Frontend/assets/images/product6.3.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h4 class="mt-3">Surfacing Weld</h4>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 18%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 200px;">
                    <img src="{{ asset('Frontend/assets/images/product6.4.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h4 class="mt-3">Groove Weld</h4>
            </div>
            <!-- End of Product Item Card -->
        </div>


        
        <div>
            <h3 class="text-center mt-5">
                Handheld Laser Welding Manner
            </h3>
        </div>



        <div class="col-md-12 d-flex flex-wrap justify-content-between mt-4">
            <!-- Start of Product Item Card -->
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser rust  <br> removal</h5>
            </div>
            <!-- Repeat similar structure for other products -->
        
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.1.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser cutting aluminum</h5>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.2.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser welding aluminum</h5>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.3.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser cutting copper</h5>
            </div>
        
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.4.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser cleaning metal</h5>
            </div>
            <div class="card product-item text-center mb-4" style="width: 15%;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 166px;">
                    <img src="{{ asset('Frontend/assets/images/product7.5.png') }}" alt="Laser Welding Gun" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </div>
                <h5 class="mt-3">Laser welding Stainless steel</h5>
            </div>
            <!-- End of Product Item Card -->
        </div>
    

    <br> <br>


    <div class="container">
        <div class="row">
            <div class="col-md-4 position-relative text-center mb-3">
                <img src="{{ asset('Frontend/assets/images/car2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Automotive manufacturing</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/plane2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Aerospace</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/ship2.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Shipbuilding</h4>
            </div>

            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/construction2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Construction Industry</h4>
            </div>
           
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/metal2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Metal Fabrication</h4>
            </div>

            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/industry2.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Medical Device Industry</h4>
            </div>
        </div>
    </div>
    <br> <br>


    </body>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.querySelector('.enlargeable');
            var modalImg = document.getElementById('img01');
            var captionText = document.getElementById('caption');

            img.onclick = function() {
                modal.style.display = 'block';
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName('close')[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = 'none';
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        });
    </script>
@endsection
