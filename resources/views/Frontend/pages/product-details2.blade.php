@extends('Frontend.layout.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Tube Laser Cutting Machine Tube</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">In the booming manufacturing sector, tubes and pipe are at the heart of innovation and efficiency. </h6>
            </div> <br> <br> <br>

            <div class="col-md-12 mt-3" style="text-align: center;color:white">
                <h3>Tube laser cutting Machine Products</h3>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('miniTube') }}">
                        <img src="{{ asset('Frontend/assets/images/mini\2.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Mini Laser Tube Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1000W / 2000W</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Chuck Speed: 80r/min</h6>
                            <p class="card-text" style="text-align: justify;">Features:pipe laser cutter excels with a fully automatic pneumatic chuck and precise mechanics, engineered for swift and efficient cutting of small pipes. Its compactness guarantees cost savings and ease of setup, perfect for environments where space is premium.
                            </p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('standardTubeCutting') }}">
                        <img src="{{ asset('Frontend/assets/images/standard\1.jpg') }}" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Standard Laser Tube Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W / 2000W/ 3000W/ 6000W</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Chuck Speed: 60r/min</h6>
                            <p class="card-text"  style="text-align: justify;">Features : CNC laser tube cutting machine features a 3D laser cutting head. It comes with specialized software for diverse cuts. High-powered YASKAWA servo motors ensure precision. Pneumatic chucks offer speed. It handles all tube shapes. A protective cover enhances safety. </p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('threeChuckTube') }}">
                        <img src="{{ asset('Frontend/assets/images/3Chuck/1.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Three Chuck Tube Fiber Laser Cutter</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W / 2000W/ 3000W/ 6000W</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Chuck Speed: 75r/min</h6>
                            <p class="card-text"  style="text-align: justify;" >Features: Three Chuck Fiber Laser Tube Cutting Machine boasts a unique three-chuck design, enabling 'zero waste' and expanded operations. Its gantry structure enhances stability, while the innovative support system adjusts automatically for precise pipe handling.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('autoLoadingTube') }}">
                        <img src="{{ asset('Frontend/assets/images/autoLoading\1.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Auto Loading Tube Laser Cutter</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W / 2000W/ 3000W/ 6000W</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Chuck Speed: 15 s</h6>
                            <p class="card-text">Features : Auto Loading Tube Cutting Machine streamlines operations with its automated feeding system, allowing single-operator control. Enhanced by bus signal transmission, it ensures rapid response and precision.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('suspensionTube') }}">
                        <img src="{{ asset('Frontend/assets/images/Suspension\1.png') }}" alt="Product Image 1" class="mt-5">
                        <div class="card-body">
                            <h4 class="card-title mt-5">Suspension Tube Laser Cutter</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power:  6000W</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Chuck Speed: 100r/min</h6>
                            <p class="card-text">Features : Two Chuck Suspension Automatic Loading Tube Laser Cutting Machine adopts a translation feeding mechanism, which can achieve fast and stable feeding. The side-mounted bed structure runs smoothly and without vibration during high-speed cutting.</p>
                            <button type="submit" class="btn btn-primary">Read More</button> <br> <br> <br> <br>
                        </div>
                    </a>
                </div>
            </div>
        


        </div>
    </div>




    </body>
    </div>
@endsection
