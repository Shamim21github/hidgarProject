@extends('Frontend.layout.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h1 style="text-align: center;">Fiber Laser Cutting Machine Features</h1>
            </div>
            <div class="col-md-12">
                <h6 style="text-align: center;">Hidgar's fiber laser cutting machines blend top efficiency with precision.We
                    promise top-notch cutting quality and a superior customer experience.</h6>
            </div> <br> <br> <br>

            <div class="col-md-12 mt-3" style="text-align: center;color:white">
                <h3> Metal Laser Cutting Machine Products</h3>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('economicalMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\9.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Standard Power Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">Features: A cost-effective and accurate fiber laser cutter, perfect for small production settings. The LF-EA features easy controls design, reducing both operation time and upkeep expenses.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('basicMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\basic2.jpg') }}" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title"> High Power Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 20000w</h6>
                            <p class="card-text">Features :Designed for challenging, dense materials and intricate jobs. The LF-B delivers up to 20000W of power for quick and precise results — ideal for extensive, high-precision industrial demands.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('enclosedMetal') }}">
                        <img src="{{ asset('Frontend/assets/images\1\19.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Enclosed Protective Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 50000w</h6>
                            <p class="card-text">Features: The LF-PE is engineered for smart, accurate tasks. It has an advanced CNC system for automatic operations. It's ideal for cutting a variety of metals, including carbon steel, stainless steel.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('exchangeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\18.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Exchange Table Fiber Laser Cutting  Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 12000w</h6>
                            <p class="card-text">Features: Boosts efficiency with its exchangeable worktable, minimizing idle time. The LF-EX enhances productivity by allowing loading and unloading during cutting, suitable for high-volume and precision tasks.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('singleMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\singlebed5.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Single Bed Enclosed Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1000w, 1500w, 2000w, 3000w</h6>
                            <p class="card-text">Features: 2023 launch, the LF-SE, designed for the European market, offers an enclosed, safe, and eco-friendly design. Easy to ship and install, it minimizes transport and setup costs. and metal furniture manufacturing industries.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('largeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\largesize6.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Large Size Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 12000w, 20000w, 50000w</h6>
                            <p class="card-text">Features: Efficient and precise large-format laser cutting machine, ideal for large-scale production processing. LF-L perfectly integrates comfortable and convenient operating space, safe product performance, interconnection experience.</p>
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
