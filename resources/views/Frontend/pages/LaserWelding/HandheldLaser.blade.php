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
                <h1 style="text-align: center;">
                    Handheld Laser Welding Machine 
                    - Built for High-quality Welding</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Our hand held laser welder have a cutting-edge design, delivers clean and uniform laser welding outcomes. It cuts maintenance costs and enhances work speed.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/laserWelder03.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserWelder03.jpg') }}" class="card-img-top enlargeable"
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
                        <h4 class="card-title text-center"> Handheld Laser Welding Machine </h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features:  offers welding, cutting, and cleaning with ease. It's ultra-light design and double lenses cut down on maintenance costs.</p>

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
                        <th scope="col">DT-1000HJ</th>
                        <th scope="col">DT-1500HJ</th>
                        <th scope="col">DT-2000HJ</th>
                        <th scope="col">DT-3000HJ</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <th scope="row">Laser power supply</th>
                        <td>1000W</td>
                        <td>1500W</td>
                        <td>2000W</td>
                        <td>3000W</td>
                    </tr>
                    <tr>
                        <th scope="row">Laser welding ability</th>
                        <td>Carbon steel: 3mm
                            Stainless steel: 3mm
                            Aluminum: 1mm</td>
                        <td>Carbon steel: 4mm
                            Stainless steel: 4mm
                            Aluminum: 2mm</td>
                        <td>Carbon steel: 5mm
                            Stainless steel: 5mm
                            Aluminum: 3mm</td>
                        <td>Carbon steel: 8mm
                            Stainless steel: 8mm
                            Aluminum: 6mm</td>
                    </tr>
                    <tr>
                        <th scope="row">Operating mode</th>
                        <td colspan="4">Continuous / Modulation</td>
                       
                    </tr>
                    <tr>
                        <th scope="row">Power adjustment range</th>
                        <td colspan="4">10%-100%</td>
                    </tr>
                    <tr>
                        <th scope="row">Output central wavelength</th>
                        <td colspan="4">1070±20nm</td>
                    </tr>
                    <tr>
                        <th scope="row">Cooling method</th>
                        <td colspan="4">Water cooling</td>
                    </tr>
                    <tr>
                        <th scope="row">Welding line requirements</th>
                        <td colspan="4">≤0.5mm</td>
                    </tr>
                    <tr>
                        <th scope="row">Welding speed</th>
                        <td colspan="4">0-120mm/s</td>
                    </tr>
                    <tr>
                        <th scope="row">Upgrade</th>
                        <td colspan="4">Smoke Purifier</td>
                    </tr>



                </tbody>
            </table>
        </div>

        <h4 class="card-title text-center">Advanced Laser Technology</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/advanced1.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;"> <br> <br>   <br> 
                            User-friendly and efficient, achieving faster and more precise results than TIG welding!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="card-title text-center">Adjustable Welding Parameters</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/adjust1.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;"> <br> <br> 
                            Adjust welding parameters with ease, and switch between six welding modes at will!
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
                            <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal"
                                class="card-img-top" style="width:80%">
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
                            <img src="{{ asset('Frontend/assets/images/head.png') }}" alt="Sheet Metal"
                                class="card-img-top" style="width:60% ">
                            <p class="card-text">The laser cutting head on our machine is state-of-the-art. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hollow Steel Structure</h5>
                            <img src="{{ asset('Frontend/assets/images/hollow.png') }}" alt="Sheet Metal"
                                class="card-img-top" style="width:70%">
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

        <div class="col-md-12">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('Frontend/assets/images/graph.png') }}" alt="Sheet Metal" class="card-img-top"
                        style="width:80%">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h4> Metal Fiber Laser Cutting Machine: Key Parameters</h4>
                    <p> Metal Fiber Laser Cutting Machine: Key Parameters</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <br> <br> <br>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Fiber Laser Cutting Machine Sample & Applications</h4>
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
                    <p>Laser cut stainless steel</p>
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
