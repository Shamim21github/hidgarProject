@extends('Frontend.layout.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Pipe Bending Equipment</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Hidgar's Metal Bending machines blend top efficiency with precision.</h6>
            </div> <br> <br> <br>

            <div class="col-md-12 mt-3" style="text-align: center;color:white">
                <h3>Press Break Machine Products</h3>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('economicalMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/3\3.6.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Press Brake Smart Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">Features: A cost-effective and accurate fiber laser cutter, perfect for small production settings. The LF-EA features easy controls design, reducing both operation time and upkeep expenses.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('largeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/3\3.7.jpg') }}" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Pipe Bending Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 20000w</h6>
                            <p class="card-text">Features :Designed for challenging, dense materials and intricate jobs. The LF-B delivers up to 20000W of power for quick and precise results — ideal for extensive, high-precision industrial demands.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/3\3.8.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Automatic Laser Welding Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 50000w</h6>
                            <p class="card-text">Features: The LF-PE is engineered for smart, accurate tasks. It has an advanced CNC system for automatic operations. It's ideal for cutting a variety of metals, including carbon steel, stainless steel.</p>
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
