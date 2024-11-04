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
                <h1 style="text-align: center;">Automatic Loading Tube Laser Cutting Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Fast, Accurate, Cost-Effective</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/autoLoading\1.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/autoLoading\1.jpg') }}" class="card-img-top enlargeable"
                            alt="Standard Power Fiber Laser Cutting Machine">
                    </a>

                    <div class="image-thumbnails ">
                        <img src="{{ asset('Frontend/assets/images/autoLoading\2.jpg') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/autoLoading\2.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/autoLoading\3.jpg') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/autoLoading\3.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/autoLoading\4.jpg') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/autoLoading\4.jpg') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">Automatic Loading Tube Laser Cutting Machine</h4> <br>
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

    <h4 class="card-title text-center">Automatic loading system</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/autoloading/auto1.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            Automatic material loading and unloading device is controlled using a numerical control system to feed the pipes these pipes can be intelligently divided, loaded and connected seamlessly with the pipe cutter to ensure that only one pipe is transported to the delivery arm at a time. This decreases the cost of manually delivering materials
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h4 class="card-title text-center">Intelligent Recognition</h4>
    <div class="container my-4">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/mini/mini1.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-4" style="text-align: justify;">
                            With contour recognition system, it can automatically identify standard round, oval, square and other special-shaped pipes.

Tubes realize non-inductive and high-efficiency detection, and realize the position deviation of the whole meter section’s cutting accuracy within 0.15mm.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <img src=" {{ asset('Frontend/assets/images/mini/mini2.png') }}" alt="">
    </div> <br> <br>
    


    <div class="col-md-12">
        <h4 class="text-center">
            TECHNICAL PARAMETERS</h4>
    </div>
    <div class="col-md-12 ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Model No. </th>
                    <th scope="col">T-6HA</th>
                    <th scope="col">T-9HA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Laser Output Power</th>
                    <td colspan="2">1500w,2000w</td>
                   
                </tr>
                <tr>
                    <th>Effective Card Cutting Diameter</th>
                    <td colspan="2">20-230mm</td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <th>Effective Square Tube</th>
                    <td colspan="2">20*20 | 230*230mm</td>
                </tr>
                <tr>
                    <th scope="row">Single Pipe Support</th>
                    <td colspan="4">380 kg</td>
                </tr>
                <tr>
                    <th scope="row">Max Acceleration</th>
                    <td colspan="4">1.0G</td>
                </tr>
    
            </tbody>
        </table>
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
