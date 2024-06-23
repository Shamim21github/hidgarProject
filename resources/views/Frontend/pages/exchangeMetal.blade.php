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
    </style>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Precision Meets Performance: Hidgar Fiber Laser Cutting Machine
                </h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">As a leading factory and manufacturer, we deliver top-tier exchange table fiber laser cutting machine, that enhance precision and productivity in metal fabrication.</h6>
            </div> <br> <br> <br>
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 100%;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images\1\19.jpg') }}" class="card-img-top"
                            alt="Product Image 1">
                    </a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <div class="card-body">
                            <h4 class="card-title">Exchange Table Fiber Laser Cutting Machine</h4>
                            <p class="card-text">Features: Boosts efficiency with its exchangeable worktable, minimizing idle time. The LF-EX enhances productivity by allowing loading and unloading during cutting, suitable for high-volume and precision tasks.
                                </p>
                            <h6 class="card-subtitle mb-2 text-muted">Laser power：2000w - 12000w</h6>
                            <div>
                                <ul class="text-dark">
                                    <li>Efficient Exchange Platform</li>
                                    <li>Cost-Effective High Value</li>
                                    <li>Broad Material Compatibility</li>
                                </ul>
                            </div> <br>

                            <div>

                                <ul class="rounded-box">
                                    <i class="ti-facebook"></i>
                    </a></li>
                    <i class="ti-instagram"></i></a></li>
                    <i class="ti-twitter-alt"></i></a></li>
                    <i class="ti-linkedin"></i></a></li>
                    </ul>

                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </div>
            </a>
        </div>
    </div> <br>
    <div class="col-md-12">
        <h4 class="text-center">Exchange Table Fiber Laser Cut Technical Specifications</h4>
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
        <h4 class="text-center">Hidgar Machine Transmission and Precision</h4 class="text-center">
    </div>


    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cast Aluminum Beam</h5>
                <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">Our beam is made from high-grade aluminum. This material is chosen for its strength. It ensures swift and agile cutting motions. Precision is maintained.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Laser Cutting Head</h5>
                <img src="{{ asset('Frontend/assets/images/head.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">The laser cutting head on our machine is state-of-the-art. It consistently produces precise cuts. It's versatile across different materials. Optimal performance is a guarantee.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Wireless Handheld Control</h5>
                <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">Wireless handheld operation for ease and sensitivity. Perfectly compatible with the latest CNC system software and hardware.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Intelligent Operating System</h5>
                <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">CNC system is cutting-edge. Its 32-inch touch screen improve user experience. Dynamic adjustments make it over 60% quicker than traditional systems.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Electrical Cabinet</h5>
                <img src="{{ asset('Frontend/assets/images/beam.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">The electrical cabinet is designed for optimal power management. It ensures that power distribution is efficient. The operation of the machine remains reliable and safe at all times.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Chiller Unit</h5>
                <img src="{{ asset('Frontend/assets/images/head.png') }}" alt="Sheet Metal" class="card-img-top">
                <p class="card-text">A chiller unit is included to regulate the laser's temperature. Consistent performance is maintained. It also extends the lifespan of the machine. Dependability is enhanced.
                </p>
            </div>
        </div>
    </div>






    </div>
    </div>




    </body>
    </div>
@endsection
