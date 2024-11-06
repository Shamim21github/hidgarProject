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
                <h1 style="text-align: center;"> Suitcase Laser Cleaning Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">No damage to materials, 6 cleaning patterns, Green and environmental
                    protection</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/laserCleaning/02.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/02.png') }}"
                            class="card-img-top enlargeable" alt="Standard Power Fiber Laser Cutting Machine" style="height:420px">
                    </a>

                    <div class="image-thumbnails">
                        <img src="{{ asset('Frontend/assets/images/3Chuck/2.jpg') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/3Chuck/2.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/3Chuck/3.jpg') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/3Chuck/3.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/3Chuck/4.jpg') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/3Chuck/4.jpg') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">Suitcase Laser Cleaning Machine
                        </h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features: Improve material utilization: The three-chuck
                            clamping workpiece reduces the generation of waste and has a high material utilization rate.
                            <br>
                            High cutting accuracy: Independent follow-up support can stably clamp slender pipes to ensure
                            cutting accuracy.
                        </p>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i>Environment Friendly</li>
                                <li><i class="fas fa-check-circle"></i> One-Stop Laser Solutions</li>
                                <li><i class="fas fa-check-circle"></i>Tailored to Your Needs</li>
                            </ul>
                        </div> <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-md">
                                <a style="color:white; text-decoration: none;" href="{{ route('contact') }}">Get a quote</a>
                            </button>
                        </div>
                        <br> <br> <br>
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

    <h4 class="card-title text-center">
        Green and environmental protection</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/1.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;margin-top: 5rem !important;">
                            Laser cleaning machines offer high cleaning standards through fixed-point contact cleaning,
                            effectively removing micron-sized pollution particles while also protecting brittle material
                            surfaces. They are environmentally friendly and do not require any consumables. Moreover, they
                            avoid any damage caused by chemical corrosion as they do not use chemical cleaning agents.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>

    <h4 class="card-title text-center">
        No damage to materials</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/2.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;margin-top: 5rem !important;">
                            Pulsed laser beam offer precise positioning and cleaning without damaging materials, making them
                            ideal for sensitive surfaces such as aluminum, carbon, stainless steel, carbon fiber-reinforced
                            polymers, or coated materials. They can clean even minor crevices and offer high flexibility in
                            use.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>

    <h4 class="card-title text-center">
        Laser cleaning head</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/3.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text" style="text-align: justify;margin-top: 5rem !important;">
                            The laser cleaning head has a clever internal design that is completely sealed, preventing the
                            optical part from being polluted by dust. It's also lightweight and ergonomically designed for a
                            comfortable grip. The operation is simple and easy to learn with just one hand. The protective
                            lens adopts a convenient drawer structure for easy replacement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>

    <h4 class="card-title text-center">
        Special pulse laser source</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/4.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text" style="text-align: justify;margin-top: 5rem !important;">
                            laser cleaner offers pulsed laser power ranging from 100w to 1000w. At 100W power, the light is
                            Gaussian, while at 200W power, both Gaussian and flat-top light are optional. When the power is
                            above 300W, the light is flat-top. Gaussian light provides relatively concentrated energy for
                            deeper cleaning, while flat-top light distributes energy evenly, resulting in a relatively
                            smooth surface after cleaning.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <h4 class="card-title text-center">
        Laser cleaning system</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/5.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text" style="text-align: justify;margin-top: 5rem !important;">
                            Laser cleaning system features a touch screen control panel with eye-catching buttons that
                            supports multiple languages. Various parameter graphics are pre-stored, and six cleaning
                            patterns are available, including straight line, spiral, circle, rectangle, rectangle fill, and
                            circle fill. Additionally, 12 different modes can be quickly switched and selected, making it
                            convenient for production and debugging purposes.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <h4 class="card-title text-center">
        Smoke purifier</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaner/6.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text" style="text-align: justify;margin-top: 5rem !important;">
                            If a laser cleaning machine is equipped with a smoke purifier during the cleaning process, it
                            can effectively remove most of the smoke and dust, thereby avoiding harm to the operator and the
                            environment. Additionally, the dust can be filtered and collected through the machine's 4-stage
                            filter dust collection system.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>



    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="bg-success text-white">Mode</th>
                        <th class="bg-success text-white">DT- Laser Cleaning Machine QXS</th>
                        <th class="bg-success text-white">Max average power (W)</th>
                        <th class="bg-success text-white">100, 200, 300, 500, 1000</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laser Type</td>
                        <td>Pulsed Laser</td>
                        <td>Power range (%)</td>
                        <td>10 - 100</td>
                    </tr>
                    <tr>
                        <td>Fiber Laser Power</td>
                        <td>100w-1000w</td>
                        <td>Output central wavelength</td>
                        <td>1080</td>
                    </tr>
                    <tr>
                        <td>Laser head scanning range</td>
                        <td>100 × 100, 180 × 180</td>
                        <td>Bandwidth (nm)</td>
                        <td>4-6</td>
                    </tr>
                    <tr>
                        <td>Head Type</td>
                        <td>LightWeight Handheld</td>
                        <td>Pulse repetition rate (kHz)</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Cooling Type</td>
                        <td>Wind Cooling</td>
                        <td>Min bending radius (mm)</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Laser Source Brand</td>
                        <td>MAX, Raycus, IPG, Reci, Leapion, etc.</td>
                        <td>Fibre length (m)</td>
                        <td>5 or 10</td>
                    </tr>
                    <tr>
                        <td>Control Panel</td>
                        <td>Touch Screen</td>
                        <td>System power supply requirement</td>
                        <td>220V or 380V</td>
                    </tr>
                    <tr>
                        <td>Laser head operating mode</td>
                        <td>Manual/Auto</td>
                        <td>Power Consumption (W)</td>
                        <td>&lt; 2000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    


    <br> <br>
    <div class="text-center">
        <h3>Tube Laser Cutting Machine Key Features</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 position-relative text-center mb-3">
                <img src="{{ asset('Frontend/assets/images/plane3.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Aerospace</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/automobile1.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Automobile industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/solar1.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">new energy</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/steel1.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Mold products</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/ship3.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100" >
                <h4 class="overlay-text">Marine ship</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/rail3.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Rail transit</h4>
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
