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
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 1rem;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Add animation (zoom in the image) */
        .modal-content,
        #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The close button */
        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .position-relative {
            position: relative;
        }

        .overlay-text {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            /* optional: for better readability */
            padding: 10px;
            /* optional: for better readability */
            border-radius: 5px;
            /* optional: for a nicer look */
        }

        .card-img-top {
            width: 100%;
        }


        .scrolling-container2 {
            overflow: hidden;
            position: relative;
        }

        .scrolling-card {
            animation: scroll-left 5s linear infinite;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Metal Work with 3-in-1 Laser Welding Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Weld, cut, and clean with unmatched ease. Our 3 in 1 laser welder is also the
                    most cost-effective solution available.
                </h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 100%;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/laserWelder01.jpg') }}" class="card-img-top enlargeable"
                            alt="Economical Fiber Laser Cutting Machine">
                    </a>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption" class="text-center"></div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <div class="card-body">
                            <h4 class="card-title">3 in 1 Handheld Metal Laser Welder- Revolutionary Multi-functional Device
                            </h4>
                            <p class="card-text" style="text-align: left">Features: <br> Offering laser welding, cutting,
                                and cleaning capabilities. This machine cuts costs and expands metal processing options.</p>
                            <h6 class="card-subtitle mb-2 text-muted"style="text-align: left">Laser Power: 1500W, 2000W</h6>
                            <div>
                                <ul class="text-dark" style="text-align: left">
                                    <li>High-precision clamping for precise cutting.</li>
                                    <li>Efficient operation, quick response, and improved production efficiency.</li>

                                </ul>
                            </div>

                            <div>


                            </div> <br> <br> <br>

                            {{-- <button type="submit" class="btn btn-primary">Order Now</button> --}}
                        </div>
                    </a>
                </div>
            </div> <br>
            <div class="col-md-12">
                <h4 class="text-center">3 in 1 Handheld Laser Welding Parameters</h4>
            </div>
            <div class="col-md-12 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="row" style="font-weight: bold;text-align:center">Model No.</th>
                            <td colspan="4" style="font-weight: bold;text-align:center">Handheld Laser Welding Cleaning
                                Cutting Machine</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="text-align:center">Laser power supply</th>
                            <td colspan="4" style="text-align:center">1000W, 1500W, 2000W, 3000W</td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Power Adjustment Range</th>
                            <td colspan="4" style="text-align:center">10%-100%</td>
                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Output central wavelength</th>
                            <td colspan="4" style="text-align:center">1070±20nm</td>

                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Cooling method</th>
                            <td colspan="4" style="text-align:center">Water cooling</td>

                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Welding line requirements </th>
                            <td colspan="4" style="text-align:center">≤0.5mm</td>

                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Welding speed</th>
                            <td colspan="4" style="text-align:center">0-120mm/s</td>

                        </tr>
                        <tr>
                            <th scope="row" style="text-align:center">Upgrade</th>
                            <td colspan="4" style="text-align:center">Smoke Purifier</td>

                        </tr>


                    </tbody>
                </table>
            </div>



            <div class="col-md-12 d-flex justify-content-between mt-4">
                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product4.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="mt-3">Laser Welding Gun</h4>
                    <p>The high-intensity laser beam in this feature is designed for metal welding. It offers precise and
                        rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>

                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product4.1.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="mt-3">Laser Welding Gun</h4>
                    <p>The high-intensity laser beam in this feature is designed for metal welding. It offers precise and
                        rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>

                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product4.2.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="mt-3">Laser Welding Gun</h4>
                    <p>The high-intensity laser beam in this feature is designed for metal welding. It offers precise and
                        rapid laser welds, offering strong, quality joins in metal materials.</p>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-between mt-4">
                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product5.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="mt-3">Durable and Ultra-Light</h4>
                    <p>At only 700g, this laser head is much lighter than usual. With dual protective lenses, It's designed
                        to prevent the common issue of lens damage seen in traditional welders.</p>
                </div>

                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product5.1.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </div>
                    <h4 class="mt-3">High-quality materials</h4>
                    <p>High-quality stainless steel is what we use to build the entire machine. It guarantees lasting
                        stability and lowers the need for maintenance.</p>
                </div>

                <div class="product-item text-center mb-4" style="width: 32%;">
                    <div class="product-img"
                        style="height: 200px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('Frontend/assets/images/product5.2.png') }}" alt="Laser Welding Gun"
                            class="img-fluid" style="max-height: 90%; max-width: 50%;">
                    </div>
                    <h4 class="mt-3">Cost Savings</h4>
                    <p>The upfront cost may be more, but it's outweighed by the long-term benefits. You avoid the expense of
                        multiple units, making the investment financially sound.</p>
                </div>
            </div>



            <div class="col-md-12">
                <h4 class="text-center">Handheld Laser Welding Manner</h4 class="text-center">
            </div>

            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product6.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:60%">
                                <h5 class="card-title">Tee Weld</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product6.1.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:70% ">
                                <h5 class="card-title">Fillet Weld</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product6.2.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:70%">
                                <h5 class="card-title">Spot Weld</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product6.3.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:70%">
                                <h5 class="card-title">Surfacing Weld</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product6.4.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:70%">
                                <h5 class="card-title">Groove Weld</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <h4 class="text-center">Laser Welder Cutter Cleaner Metal</h4 class="text-center">
        </div>

        <div class="scrolling-container2">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.2.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:70%">
                                <h5 class="card-title">Laser welding Stainless steel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:80%">
                                <h5 class="card-title">Laser rust removal</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.6.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:75%">
                                <h5 class="card-title">Laser welding Carbon steel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.4.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:75%">
                                <h5 class="card-title">Laser cleaning metal</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.1.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:60%">
                                <h5 class="card-title">Laser cutting aluminum</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 scrolling-card">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('Frontend/assets/images/product7.3.png') }}" alt="Sheet Metal"
                                    class="card-img-top" style="width:60%">
                                <h5 class="card-title">Laser cutting copper</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br> <br> <br>


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
                <img src="{{ asset('Frontend/assets/images/ship2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Shipbuilding industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/construction2.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Construction Industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/industry2.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Medical Device Industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/metal2.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Metal Fabrication</h4>
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
