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
                <h1 style="text-align: center;">Two Chuck Suspension Automatic Loading Tube Laser Cutting Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;"> High efficiency and stability  , Extremely short tail material, Semi-automatic loading as standard</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/suspension/1.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/suspension/1.png') }}" class="card-img-top enlargeable"
                            alt="Standard Power Fiber Laser Cutting Machine" style="width:600px;height:430px">
                    </a>

                    <div class="image-thumbnails ">
                        <img src="{{ asset('Frontend/assets/images/suspension/2.png') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/suspension/2.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/suspension/3.png') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/suspension/3.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/suspension/4.png') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/suspension/4.png') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">Chuck Suspension Automatic Loading Tube Laser Cutting Machine</h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features:controlled using a numerical control system to feed the pipes these pipes can be intelligently divided
                           </p>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i>Cutting-Edge Technology</li>
                                <li><i class="fas fa-check-circle"></i> One-Stop Laser Solutions</li>
                                <li><i class="fas fa-check-circle"></i>Tailored to Your Needs</li>
                            </ul>
                        </div> <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-md">
                                <a style="color:white; text-decoration: none;" href="{{ route('contact') }}">Get a quote</a>
                            </button>
                        </div> <br> <br>
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

    <h4 class="card-title text-center">Side-Mounted Bed Structure</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/suspension/5.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            High rigidity frame shows more dynamic performance.
Smooth operation and no vibration during high-speed cutting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h4 class="card-title text-center">Front Card Side Shift Design</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/suspension/5.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            Front card mobile front chuck design, tail material can reach 50mm.
                            For the cutting conditions of longer finished pipes, the pipe support force is more reasonable and the clamping is more stable.
                            Compared with traditional cutting methods, cutting accuracy and quality are more guaranteed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <h4 class="card-title text-center">Servo Follower
    </h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/suspension/7.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            Sets a centering mechanism, top material correction, automatic centering, freeing hands.

                            Adopts four sets of servo follower devices
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h4 class="card-title text-center">Translation Feeding Mechanism
    </h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/suspension/8.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            Realizes fast feeding of pipes, stable lifting, and automatic centering.
                            Batch processing improves work efficiency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


    <div class="col-md-12">
        <h4 class="text-center">
            TECHNICAL PARAMETERS</h4>
    </div>
    <div class="col-md-12 ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mode</th>
                    <th scope="col">ST2-7016</th>
                    <th scope="col">  ST2-7023</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Min Diameter</th>
                    <td>Φ15mm □15mm</td>
                    <td> Φ15mm □15mm</td>
                </tr>
                <tr>
                    <th>Max Diameter</th>
                    <td> Φ160mm □116mm</td>
                    <td>   Φ230mm □160mm</td>
                </tr>
                <tr>
                    <th>Laser Power Supply</th>
                    <td>3000w</td>
                    <td>3000w</td>
                </tr>
                <tr>
                    <th>Maximum Acceleration</th>
                    <td>1G</td>
                    <td>1G</td>
                </tr>
                <tr>
                    <th scope="row">Positioning Accuracy</th>
                    <td>±0.03mm</td>
                    <td>±0.03mm</td>
                </tr>
                <tr>
                    <th scope="row">Voltage</th>
                    <td >380V 3PH 50/60HZ</td>
                    <td >380V 3PH 50/60HZ</td>
                </tr>
                <tr>
                    <th scope="row"> No-load speed</th>
                    <td > 60r/min</td>
                    <td > 60r/min</td>
                </tr>
                <tr>
                    <th scope="row">Equipment size</th>
                    <td>9.7mX2.2mX2.1m</td>
                    <td>  10mX2.5mX2.3m</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br> <br>
    <div class="text-center">
        <h3>Small Tube Fiber Laser Cutting Machine Key Features</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 position-relative text-center mb-3">
                <img src="{{ asset('Frontend/assets/images/mini/mini3.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">High-Precision 3D Laser Cutting Head</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/mini/mini4.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Advanced Pneumatic Chuck</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/mini/mini5.png') }}" alt="Sheet Metal" class="card-img-top w-100" style="height: 330px">
                <h4 class="overlay-text">Rack and Pinion Drive</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/mini/mini6.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">High-Efficiency Fiber Laser Source</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/mini/mini7.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100" style="height: 250px">
                <h4 class="overlay-text">User-Friendly Control Panel</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/mini/mini8.png') }}" alt="Sheet Metal" class="card-img-top w-100">
                <h4 class="overlay-text">Eco-Friendly and Energy-Efficient</h4>
            </div>
        </div>
    </div>
    <br> <br>

    
    <div class="text-center">
        <h3>Laser Cutting Machine Tube Showcase</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/mini/mini9.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:80%">
                    <p>Stainless Steel Tube</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/mini/mini10.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:90%">
                    <p>Carbon Steel Pipe</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/mini/mini11.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:45%">
                    <p>Aluminum Tube</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/mini/mini12.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:70%">
                    <p>Carbon Steel Pipe</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/mini/mini13.png') }}" alt="Sheet Metal"
                        class="card-img-top" style="width:60%">
                    <p>Carbon Steel Square Tube</p>
                </div>
            </div>

        </div>
    </div>

    


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
