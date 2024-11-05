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
                <h1 style="text-align: center;">Exchange Platform Sheet and Tube Laser Cutting Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;"> Automatic exchange platform, continuous operation is achieved and production
                    efficiency is significantly improved.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card position-relative" style="width: 100%; text-align: center;">
                    <a href="#" onclick="openModal('{{ asset('Frontend/assets/images/ExchangeCombination/1.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/ExchangeCombination/1.jpg') }}"
                            class="card-img-top enlargeable" alt="Standard Power Fiber Laser Cutting Machine"
                            style="width:600px;height:430px">
                    </a>

                    <div class="image-thumbnails ">
                        <img src="{{ asset('Frontend/assets/images/ExchangeCombination/2.jpg') }}" alt="Thumbnail 1"
                            onclick="openModal('{{ asset('Frontend/assets/images/ExchangeCombination/2.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/ExchangeCombination/3.jpg') }}" alt="Thumbnail 2"
                            onclick="openModal('{{ asset('Frontend/assets/images/ExchangeCombination/3.jpg') }}')">
                        <img src="{{ asset('Frontend/assets/images/ExchangeCombination/4.jpg') }}" alt="Thumbnail 3"
                            onclick="openModal('{{ asset('Frontend/assets/images/ExchangeCombination/4.jpg') }}')">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body"> <br> <br>
                        <h4 class="card-title text-center">Exchange Platform Sheet and Tube Laser Cutting Machine</h4> <br>
                        <p class="card-subtitle mb-2 text-muted">Features:handle both sheet and tube, saving space and money
                            on more machines.Its advanced controls are user-friendly, making it easy to learn and maintain
                            with less downtime.It can easily adjust to various material types and thicknesses
                        </p>

                        <div>
                            <ul class="text-dark">
                                <li><i class="fas fa-check-circle"></i> User Friendly</li>
                                <li><i class="fas fa-check-circle"></i> clean cuts with smooth edges</li>
                                <li><i class="fas fa-check-circle"></i>Supports cutting of different diameters pipes</li>
                            </ul>
                        </div> <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-md">
                                <a style="color:white; text-decoration: none;" href="{{ route('contact') }}">Get a quote</a>
                            </button>
                        </div> <br> <br>
                        
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
    </div> <br> <br>

    <h4 class="card-title text-center">Fully Enclosed Design</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/ExchangeCombination/en1.png') }}"
                        alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;">
                            <li>Rack and Pinion Transmission System: Offers good rigidity and high precision.</li>
                            <li>Easy Loading and Unloading: Ensures high processing efficiency.</li>
                            <li>High Performance: Outperforms traditional sprocket chain transmission, completing exchanges
                                within 8 seconds.</li>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br> <br>


    <h4 class="card-title text-center">Double Fully-Automatic Pneumatic Chucks</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/ExchangeCombination/en2.png') }}"
                        alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;">
                            <li> High-precision clamping for precise cutting. <br> </li>
                            <li>Efficient operation, quick response, and improved production efficiency. <br> </li>
                            <li> The performance is stable and reliable, ensuring durability and reducing maintenance costs. <br> </li>
                             <li>It has strong adaptability to various pipe materials and meets diverse cutting needs.</li>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br> <br>


    <h4 class="card-title text-center">High Quality Carbon Steel Plate Welding Machine Bed</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/ExchangeCombination/en3.png') }}"
                        alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;">
                            <li> Robust stability & rigidity for high-speed and precise cutting. <br> </li>
                            <li>Excellent corrosion & wear resistance in tough environments. <br> </li>
                            <li> High precision & reliability for complex processing needs. <br> </li>
                             <li>Easy maintenance with low costs and simplicity.</li>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br> <br>



    <h4 class="card-title text-center">Auto Focus Laser Head</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom3.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;">
                            <li>Adjustable Focal Length: Quickly adjusts to accommodate different power handling needs.</li>
                            <li>Autofocus Function: Enables fast and accurate focusing.</li>
                            <li>High-Precision Design: Achieves a focusing speed of 100 m/s with a repeatability of 1 μm.
                            </li>
                            <li>IP65 Dust-Proof Standard: Equipped with a patented protective mirror cover for complete dust
                                protection without blind spots.</li>
                            <li>Multiple Protection Mechanisms: Includes three protective lenses and a two-way optical
                                water-cooling system.</li>
                            <li>Corrosion & Wear Resistance: Provides durability in tough environments.</li>
                            <li>High Precision & Reliability: Ideal for complex processing needs.</li>
                        <br>
 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    
    <h4 class="card-title text-center">Intelligent Operating System</h4>
    <div class="container my-2">
        <div class="card shadow-lg border-0">
            <div class="row no-gutters">
                <!-- Left Column with Image -->
                <div class="col-md-4">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom4.png') }}" alt="CNC Laser Pipe Cutting" class="img-fluid rounded-left" style="height: 100%; width:100%;">
                </div>
                <!-- Right Column with Text -->
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text mt-5" style="text-align: justify;">
                            <li>Automatic Nesting Function: Automatically optimizes cutting layout for efficiency.</li>
                            <li>Wireless Handle Control: Offers flexible and convenient operation.</li>
                            <li>File Compatibility: Compatible with various common file formats, such as DXF, PLT, etc.</li>
                            <li>Simple Operating System: Easy to use with fast, intuitive controls.</li>
                            <li>Accurate Cutting Instructions: Ensures high cutting accuracy and quality.</li>
                        </ul>
                        <br>
 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>










    <div class="col-md-12">
        <h4 class="text-center">
            TECHNICAL PARAMETERS</h4>
    </div>
    <div class="col-md-12 ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">F-BT</th>
                    <th scope="col"> FE-BT</th>
                    <th scope="col"> FE-BST</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Working area</th>
                    <td>3000*1500mm / 4000*2000mm / 6000*1500mm / 6000*2500mm</td>
                    <td> 3000*1500mm / 4000*2000mm / 6000*1500mm / 6000*2500mm</td>
                    <td>3000*1500mm / 4000*2000mm / 6000*1500mm / 6000*2500mm</td>
                </tr>
                <tr>
                    <th>Laser output power</th>
                    <td> 1500w / 2000w / 3000w / 4000w / 6000w /12000w / 20000w</td>
                    <td> 2000w / 3000w / 6000w / 12000w / 20000W / 30000W / 40000w / 50000w</td>
                    <td> 2000w / 3000w / 6000w / 12000w / 20000W / 30000W / 40000w / 50000w</td>
                </tr>
                <tr>
                    <th>Positioning accuracy</th>
                    <td>0.05mm </td>
                    <td>0.05mm </td>
                    <td>0.05mm </td>
                </tr>
                <tr>
                    <th>Repositioning accuracy</th>
                    <td>0.03mm</td>
                    <td>0.03mm</td>
                    <td>0.03mm</td>

                </tr>
                <tr>
                    <th scope="row">Round tube cutting diameter
                    </th>
                    <td>20mm~230mm</td>
                    <td>20mm~230mm</td>
                    <td>20mm~230mm</td>
                </tr>
                <tr>
                    <th scope="row">Square tube cutting diameter
                    </th>
                    <td>20mm~140mm</td>
                    <td>20mm~140mm</td>
                    <td>20mm~140mm</td>
                </tr>
                <tr>
                    <th scope="row">Upgrade</th>
                    <td Exchange platform / Fully enclosed</td>
                    <td> 60r/min</td>
                </tr>
                <tr>
                    <th scope="row">Equipment size</th>
                    <td>Fully enclosed</td>
                    <td> Air Conditioner, Smoke Purifier, Air Compressor,Voltage Regulator, Safety Light Curta</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br> <br>



    <div class="text-center">
        <h3>Sample Display</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom5.png') }}"
                        alt="Sheet Metal" class="card-img-top" style="width:80%">
                    <p>Plate cutting effect</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom6.png') }}"
                        alt="Sheet Metal" class="card-img-top" style="width:90%">
                    <p>Plate cutting effect</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom7.png') }}"
                        alt="Sheet Metal" class="card-img-top" style="width:75%">
                    <p>Pipe cutting effect</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/StandardCombination/standardCom8.png') }}"
                        alt="Sheet Metal" class="card-img-top" style="width:70%">
                    <p>Pipe cutting effect</p>
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
