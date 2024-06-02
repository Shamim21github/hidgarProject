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
                        <img src="{{ asset('Frontend/assets/images/laserCutting01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Economical Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">Features: A cost-effective and accurate fiber laser cutter, perfect for small production settings. The LF-EA features easy controls design, reducing both operation time and upkeep expenses.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('LargeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/laserCutting02.jpg') }}" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Large Size Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">Features: It offers a big-size option for construction and car sectors. Its high-power laser source with air compressors for efficient and affordable cutting.Very Powerful Product & maintaince easy.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/laserCutting01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Exchange Platform Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000W, 3000W, 6000W, 12000W, 20000W</h6>
                            <p class="card-text">Features: Boosts efficiency with its exchangeable worktable, minimizing idle time. The LF-EX enhances productivity by allowing loading and unloading during cutting, suitable for high-volume</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/laserCutting01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Enclosed Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">The Large Cutting Machine merges safety with efficiency, boasting a big enclosure that lessens noise and boosts safety. It makes accurate cuts and keeps the workspace tidy and safe.It is very Powrful</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/laserCutting01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Large Size Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000W - 50000W</h6>
                            <p class="card-text">LF-L offers a big-size option for construction and car sectors. Its high-power laser source with air compressors for efficient and affordable cutting.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="#">
                        <img src="{{ asset('Frontend/assets/images/laserCutting01.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Single Bed Enclosed Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1000W, 1500W, 3000W</h6>
                            <p class="card-text">Features: 2023 launch, the LF-SE, designed for the European market, offers an enclosed, safe, and eco-friendly design. Very easy to ship and install.</p>
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
