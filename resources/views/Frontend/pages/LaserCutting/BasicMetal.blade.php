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
                <h1 style="text-align: center;">High Power Sheet Metal Laser Cutting Machine: Power Meets Precision</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">30,000W laser machine that excels with metal. Engineered for detailed and
                    dense metalwork, it's the precision choice for industrial needs</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/1/9.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/1\basic2.jpg') }}" class="card-img-top enlargeable"
                            alt="Standard Power Fiber Laser Cutting Machine">
                    </a>

                    <div class="image-thumbnails">
                        <img src="{{ asset('Frontend/assets/images/1/6.jpg') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/9.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/1/7.jpg') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/10.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/1/8.jpg') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/1/11.jpg') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">High Power Fiber Laser Cutting Machine</h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features: Designed for challenging, dense materials and
                            intricate jobs. The LF-B delivers up to 20000W of power for quick and precise results — ideal
                            for extensive, high-precision industrial demands.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Laser power：2000w - 20000w</h6>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i> High Power Performance</li>
                                <li><i class="fas fa-check-circle"></i>Save on Shipping Costs</li>
                                <li><i class="fas fa-check-circle"></i>Model Upgrade Flexibility</li>
                            </ul>
                        </div> <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-md">
                                <a style="color:white; text-decoration: none;" href="{{ route('contact') }}">Get a quote</a>
                            </button>
                        </div>
                        <br> <br> <br> <br>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption" class="text-center"></div>
            </div>
            </a>
        </div>
    </div> <br>
    <div class="col-md-12">
        <h4 class="text-center">Sheet Metal Laser Cutting Machine Technical Specifications</h4>
    </div>
    <div class="col-md-12 ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mode</th>
                    <th scope="col">LF-3015B</th>
                    <th scope="col">LF-6015B</th>
                    <th scope="col">LF-4020B</th>
                    <th scope="col">LF-6025B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Working Area</th>
                    <td>3000*1500mm</td>
                    <td>6000*1500mm</td>
                    <td>4000*2000mm</td>
                    <td>6000*2500mm</td>
                </tr>
                <tr>
                    <th scope="row">X Y Z Axis Stroke</th>
                    <td>1520*3100*100mm</td>
                    <td>1520*6050*100mm</td>
                    <td>2040*4050*100mm</td>
                    <td>2510*6100*260mm</td>
                </tr>
                <tr>
                    <th scope="row">Laser Power Supply</th>
                    <td colspan="4">2000w, 3000w, 6000w, 12000w, 20000w</td>
                </tr>
                <tr>
                    <th scope="row">Maximum Acceleration</th>
                    <td colspan="4">2G</td>
                </tr>
                <tr>
                    <th scope="row">Positioning Accuracy</th>
                    <td colspan="4">±0.03mm</td>
                </tr>
                <tr>
                    <th scope="row">Voltage</th>
                    <td colspan="4">380V 3PH 50/60HZ</td>
                </tr>
                <tr>
                    <th scope="row">Cutting Ability</th>
                    <td colspan="4">Carbon Steel: 1-80mm, Stainless Steel: 1-70mm, Aluminum: 1-60mm, Brass: 1-20mm</td>
                </tr>
                <tr>
                    <th scope="row">Upgrade</th>
                    <td colspan="4">Air Conditioner, Smoke Purifier, Air Compressor, Voltage Regulator</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <h4 class="text-center">Sheet Metal Laser Cutting Machine Features</h4 class="text-center">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cast Aluminum Beam</h5>
                        <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal" class="card-img-top"
                            style="width:80%">
                        <p class="card-text">Our beam is made from high-grade aluminum. This material is chosen for
                            its
                            strength. It
                            ensures swift and agile cutting motions. Precision is maintained.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laser Cutting Head</h5>
                        <img src="{{ asset('Frontend/assets/images/head.png') }}" alt="Sheet Metal" class="card-img-top"
                            style="width:60% ">
                        <p class="card-text">The laser cutting head on our machine is state-of-the-art. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hollow Steel Structure</h5>
                        <img src="{{ asset('Frontend/assets/images/hollow.png') }}" alt="Sheet Metal" class="card-img-top"
                            style="width:70%">
                        <p class="card-text">Wireless handheld operation for ease and sensitivity. Perfectly
                            compatible with
                            the
                            latest CNC system software and hardware.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wireless</h5>
                        <img src="{{ asset('Frontend/assets/images/wireless.png') }}" alt="Sheet Metal"
                            class="card-img-top">
                        <p class="card-text">CNC system is cutting-edge. Its 32-inch touch screen improve user
                            experience.
                            Dynamic
                            adjustments make it over 60% quicker than traditional systems.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Intelligent Operating System</h5>
                        <img src="{{ asset('Frontend/assets/images/touch.png') }}" alt="Sheet Metal"
                            class="card-img-top">
                        <p class="card-text">The electrical cabinet is designed for optimal power management. It
                            ensures
                            that power
                            distribution is efficient. The operation of the machine remains reliable and safe at all
                            times.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chiller Unit</h5>
                        <img src="{{ asset('Frontend/assets/images/generator.png') }}" alt="Sheet Metal"
                            class="card-img-top">
                        <p class="card-text">A chiller unit is included to regulate the laser's temperature.
                            Consistent
                            performance
                            is maintained. It also extends the lifespan of the machine. Dependability is enhanced.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <br> <br>
        <div class="row">

            <div class="d-flex align-items-center col-6">
                <div class="flex-shrink-0">
                    <img src="{{ asset('Frontend/assets/images/basicGraph.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:80%">
                </div>
                <div class="flex-grow-1 ms-3 col-6" style="margin-left: -10rem !important;"">
                    <h4> Metal Fiber Laser Cutting Machine:</h4>
                    <p> Master every metal challenge with Leapion's fiber laser cutting machine with exchange table. From
                        stainless steel to titanium, achieve precise, clean cuts. Explore the versatility and power of our
                        machines.</p>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>

    <br> <br>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/01.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Laser cut carbon steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/02.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Laser cut carbon steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/03.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Laser cut brass</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/04.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Stainless steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/05.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Laser cutting metal</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/06.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:100%">
                    <p>Laser cut aluminum</p>
                </div>
            </div>
        </div>
    </div>



    <br> <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4 position-relative text-center mb-3">
                <img src="{{ asset('Frontend/assets/images/car.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Automotive manufacturing</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/plane.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Aerospace</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/ship.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Shipbuilding industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/agriculture.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Agricultural machinery</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/architecutre.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Achitechive</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/rail.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Rail transport</h4>
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
