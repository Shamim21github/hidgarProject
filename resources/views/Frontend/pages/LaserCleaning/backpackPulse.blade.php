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
                <h1 style="text-align: center;"> Portable Handheld Laser Cleaning Machines</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Streamline your cleaning with Leapion's portable handheld laser machines. Efficient, compact, and ready for action—perfect for on-site precision.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/laserCleaning/03.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/03.png') }}"
                            class="card-img-top enlargeable" alt="Standard Power Fiber Laser Cutting Machine" style="height:420px">
                    </a>

                    <div class="image-thumbnails">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/03.png') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/imageslaserCleaning/03.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/03.png') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/laserCleaning/03.png') }}')">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/03.png') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/laserCleaning/03.png') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">Backpack Pulse Laser Cleaning Machine
                        </h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features: At just 12kg, Leapion's laser cleaning machine is much lighter than the usual 300kg models. It melds portability with advanced pulse laser technology for precise cleaning. It's compact, suits many uses, and is easy to use. The long battery life adds to its efficiency and convenience.
                        </p>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i>Non-contact, damage-free cleaning</li>
                                <li><i class="fas fa-check-circle"></i>  Efficient, ergonomic, easy-to-use</li>
                                <li><i class="fas fa-check-circle"></i>Safe with rigorous safety standards</li>
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
        Lightweight Design</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/laserCleaning/11.png') }}" alt="CNC Laser Pipe Cutting"
                        class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;margin-top: 5rem !important;">
                            Only weighing 12kg, its backpack design boosts portability for simple transport and use anywhere. Even easy to carry for a thin girl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>

    <h4 class="card-title text-center">
        Non-Contact Cleaning</h4>
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
                            This machine uses non-contact pulse laser technology, ensuring it cleans without damaging the parts. It's ideal for precision tasks.

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
                        <th class="bg-dark text-white">Parameter name</th>
                        <th class="bg-dark text-white">100W air cooled</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maximum output power / W</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Fiber beam quality / M2</td>
                        <td>≤1.6</td>
                    </tr>
                    <tr>
                        <td>Pulse length / ns</td>
                        <td>optional10、20、30、60、100、200、250、350</td>
                    </tr>
                    <tr>
                        <td>Laser pulse frequency / KHZ</td>
                        <td>20-400</td>
                    </tr>
                    <tr>
                        <td>Single pulse energy / mJ</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Cooling method</td>
                        <td>air cooled</td>
                    </tr>
                    <tr>
                        <td>Scan width / mm*0.7</td>
                        <td>160</td>
                    </tr>
                    <tr>
                        <td>Fiber length / m</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Total power / W</td>
                        <td>800</td>
                    </tr>
                    <tr>
                        <td>Output power instability / %</td>
                        <td>≤5</td>
                    </tr>
                    <tr>
                        <td>Laser type</td>
                        <td>Nanosecond pulse fiber</td>
                    </tr>
                    <tr>
                        <td>Center wavelength / nm</td>
                        <td>1064±5</td>
                    </tr>
                    <tr>
                        <td>Power adjustment range / %</td>
                        <td>10-100</td>
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
                <img src="{{ asset('Frontend/assets/images/laserCleaning/21.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Heavy Machinery Manufacturing</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/laserCleaning/22.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Maritime Maintenance</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/laserCleaning/23.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Oil & Gas Industry</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/laserCleaning/24.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Public Infrastructure</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/laserCleaning/25.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100" >
                <h4 class="overlay-text">Mining Equipment Maintenance</h4>
            </div>
            <div class="col-md-4 position-relative text-center">
                <img src="{{ asset('Frontend/assets/images/laserCleaning/26.png') }}" alt="Sheet Metal"
                    class="card-img-top w-100">
                <h4 class="overlay-text">Metal Processing & Recycling</h4>
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
