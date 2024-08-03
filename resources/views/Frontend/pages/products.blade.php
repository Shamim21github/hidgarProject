@extends('Frontend.layout.app')

@section('content')

<style>
    .rounded-border {
    border: 1px solid #000; /* Change the color and width as needed */
    border-radius: 10px; /* Adjust the value to make the corners more or less rounded */
    padding: 2px; /* Optional: Add padding inside the border */
    background-color: #01B0FF;
    
}
</style>
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Our Products</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><span>Products</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <!-- end of wpo-breadcumb-section-->
    {{-- <li><a href="{{ route('products1') }}">Laser Cutting Sheet Metal Equipment </a></li>
                                                <li><a href="{{ route('products2') }}"> Combination sheet and tube laser cutting Equipment
                                                </a></li>
                                                <li><a href="{{ route('products3') }}">Laser Welding Equipment </a></li>
                                                <li><a href="{{ route('products4') }}">Metal Bending Equipment </a></li>
                                                <li><a href="{{ route('products5') }}">Pipe Bending Equipment </a></li>
                                                <li><a href="{{ route('products6') }}">Laser Cleaning Equipment </a></li> --}}
    <div class="container-fluid">
        <div class="row">
           
            {{-- <div class="col-md-12 mt-2 rounded-border"> 
                <h1 style="text-align: center;color:white;">Our All Product lists</h1>
            </div> --}}
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('economicalMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/1\9.jpg') }}" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Laser Cutting Sheet Metal Equipment</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1500W, 2000W</h6>
                            <p class="card-text">Features: A cost-effective and accurate fiber laser cutter, perfect for
                                small production settings. The LF-EA features easy controls design, reducing both operation
                                time and upkeep expenses.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('basicMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/2/2.5.jpg') }}" alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Combination sheet and tube laser cutting Equipment</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 20000w</h6>
                            <p class="card-text">Features :Designed for challenging, dense materials and intricate jobs. The
                                LF-B delivers up to 20000W of power for quick and precise results — ideal for extensive,
                                high-precision industrial demands.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('enclosedMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/laserWelder01.jpg') }}" class="card-img-top"
                            alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Enclosed Protective Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 50000w</h6>
                            <p class="card-text">Features: The LF-PE is engineered for smart, accurate tasks. It has an
                                advanced CNC system for automatic operations. It's ideal for cutting a variety of metals,
                                including carbon steel, stainless steel.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('exchangeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/3\3.9.jpg') }}" class="card-img-top"
                            alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Exchange Table Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 2000w - 12000w</h6>
                            <p class="card-text">Features: Boosts efficiency with its exchangeable worktable, minimizing
                                idle time. The LF-EX enhances productivity by allowing loading and unloading during cutting,
                                suitable for high-volume and precision tasks.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('singleMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/3\3.8.jpg') }}" class="card-img-top"
                            alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Single Bed Enclosed Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 1000w, 1500w, 2000w, 3000w</h6>
                            <p class="card-text">Features: 2023 launch, the LF-SE, designed for the European market, offers
                                an enclosed, safe, and eco-friendly design. Easy to ship and install, it minimizes transport
                                and setup costs. and metal furniture manufacturing industries.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 28rem;">
                    <a href="{{ route('largeMetal') }}">
                        <img src="{{ asset('Frontend/assets/images/3\3.11.jpg') }}" class="card-img-top"
                            alt="Product Image 1">
                        <div class="card-body">
                            <h4 class="card-title">Large Size Fiber Laser Cutting Machine</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Laser Power: 12000w, 20000w, 50000w</h6>
                            <p class="card-text">Features: Efficient and precise large-format laser cutting machine, ideal
                                for large-scale production processing. LF-L perfectly integrates comfortable and convenient
                                operating space, safe product performance, interconnection experience.</p>
                            <button type="submit" class="btn btn-primary">Read More</button>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
@endsection
