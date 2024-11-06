@extends('Frontend.layout.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Laser Cleaning Equipment</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Hidgar's Metal Bending machines blend top efficiency with precision.</h6>
            </div> <br> <br> <br>

            <div class="col-md-12 mt-3" style="text-align: center;color:white">
                <h3>Laser Cleaning Machine Products</h3>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('HandheldLaserMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/laserWelder01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title"> Handheld Laser Metal Cleaner </h4>
                            <h6 class="card-subtitle mb-2 text-muted">Power Range: 1000W - 3000W</h6>
                            <p class="card-text">Features: Suitable for scenarios with high heat dissipation efficiency and laser cleaning damage requirements are not strict.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('suitcaseMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/02.png') }}" alt="Product Image 1"style="width:50%;margin-left:80px">
                        <div class="card-body">
                            <h4 class="card-title">Suitcase Laser Cleaning Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Power Range: 100W - 300W</h6>
                            <p class="card-text">Features :Precision laser cleaning requiring strict control of substrate temperature.Suitable for molds and non-metallic materials.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('backpackPulse') }}">
                        <img src="{{ asset('Frontend/assets/images/laserCleaning/03.png') }}" class="card-img-top" alt="Product Image 1" style="width:65%;margin-left:80px">
                        <div class="card-body">
                            <h4 class="card-title">Backpack Pulse Laser Cleaning Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Weight: 12kg (compared to traditional laser cleaner at 260KG)</h6>
                            <p class="card-text">Features: Backpack-style, battery-operated, no power cords required.Outdoor operations.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
        


        </div>
    </div>




    </body>
    </div>
@endsection
