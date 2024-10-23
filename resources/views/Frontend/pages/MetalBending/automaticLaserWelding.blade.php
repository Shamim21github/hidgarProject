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
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Automatic Laser Welding Machine</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Automatic Laser Welding Machine are designed with precision engineering and robust construction, ensuring powerful and reliable performance.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 100%;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/2\2.16.jpg') }}" class="card-img-top enlargeable" style="width: 70%"
                            alt="Economical Fiber Laser Cutting Machine">
                    </a>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption" class="text-center"></div>
            </div>
            <div class="col-md-6 mb-4 ">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <div class="card-body">
                            <h4 class="card-title" >Automatic Laser Welding Machine</h4>
                            <p class="card-text" style="text-align: left">Features: <br>  Our Automatic Laser Welding Machine have a cutting-edge design, delivers clean and uniform laser welding outcomes. It cuts maintenance costs and enhances work speed.</p>
                            <h6 class="card-subtitle mb-2 text-muted"style="text-align: left">Laser Power: 1500W, 2000W</h6>
                            <div>
                                <ul class="text-dark" style="text-align: left">
                                    <li>Versatile: Wide range of applications.</li>
                                    <li>Efficient: High productivity, cost-effective.</li>
                                    <li>Precise Bending: High accuracy, improved quality.</li>
                                </ul>
                            </div> <br>

                            <div>


                            </div> <br> <br> <br> 

                            {{-- <button type="submit" class="btn btn-primary">Order Now</button> --}}
                        </div>
                    </a>
                </div>
            </div> <br>
            <div class="col-md-12 mt-4 ">
                <h4 class="text-center ">Automatic Laser Welding Machine Parameters</h4>
            </div>
            <div class="col-md-12 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Model No.</th>
                            <th scope="col">LW-1000W</th>
                            <th scope="col">LW-1500W</th>
                            <th scope="col">LW-2000W</th>
                            <th scope="col">LW-3000W</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        
                       
                        <tr>
                            <th scope="row">Laser power supply</th>
                            <td>1000W</td>
                            <td> 1500W</td>
                            <td>2000W</td>
                            <td> 3000W</td>
                           
                         
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
                            <th scope="row">Welding line requirements </th>
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

            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('Frontend/assets/images/machine.png') }}" alt="Sheet Metal" class="card-img-top"
                            style="width:80%">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>LF-EA's Flexible Component Options</h4>
                        <p>Choose from a range of laser source, control system, and laser cut head for a machine that's
                            tailored just for you.</p>
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
                    <img src="{{ asset('Frontend/assets/images/machine/01.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
                    <p>Laser cut carbon steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/02.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
                    <p>Laser cut carbon steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/03.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
                    <p>Laser cut brass</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/04.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
                    <p>Laser cut stainless steel</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/05.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
                    <p>Laser cutting metal</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="image-box" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                    <img src="{{ asset('Frontend/assets/images/machine/06.png') }}" alt="Sheet Metal" class="card-img-top" style="width:100%">
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
