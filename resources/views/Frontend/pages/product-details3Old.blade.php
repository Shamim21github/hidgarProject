@extends('Frontend.layout.app')

@section('content')
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }

        .product-images {
            flex: 1;
        }

        .product-images img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .product-details {
            flex: 1;
            margin-left: 20px;
        }

        .wpo-breadcumb-area {
            background-color: #f5f5f5;
            padding: 20px;
        }

        .wpo-breadcumb-wrap ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .wpo-breadcumb-wrap ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .wpo-breadcumb-wrap ul li:last-child {
            margin-right: 0;
        }

        .wpo-breadcumb-wrap ul li a {
            text-decoration: none;
            color: #333;
        }

        .wpo-breadcumb-wrap ul li span {
            color: #999;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-description {
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 18px;
            font-weight: bold;
        }

        .product-details {
            padding-left: 50px;
        }
    </style>
    
    <!-- start of breadcumb-section -->

    <!-- end of wpo-breadcumb-section-->

    <!-- wpo-Products-single-area start -->
    <div class="wpo-Products-single-area section-padding">
      <h1 class="product-title" style="text-align: center; font-size:60px;">Laser Welding Equipment</h1> <br> <br>
        <div class="container">
            <div class="product-images">
                <img src="{{ asset('Frontend/assets/images/laserWelder01.jpg') }}" alt="Product Image 1">
                {{-- <img src="image2.jpg" alt="Product Image 2">
              <img src="image3.jpg" alt="Product Image 3"> --}}
            </div>
            <div class="product-details"> <br> <br>
                <h2 class="product-title">Ultra-light Laser Welding Machine</h2>
                <ul style="padding-left: 20px;">
                    <li>High demand, profitability.</li>
                    <li>Meeting market needs.</li>
                    <li>Upgrading, staying competitive.</li>
                    <li>Scaling production capabilities.</li>
                    <li>Diversifying product offerings.</li>
                    <li> Selling older models.</li>
                    <li> Capitalizing on investment.</li>
                    <li> Meeting customer requirements.</li>
                    <li>Industry Trends: Adapting to market changes.</li>
                </ul>
                <p> <b>Laser Power:</b> 1700W, 2300W</p>
            </div>
        </div>

        <div class="container">
          <div class="product-images">
              <img src="{{ asset('Frontend/assets/images/laserWelder02.jpg') }}" alt="Product Image 2">
              {{-- <img src="image2.jpg" alt="Product Image 2">
            <img src="image3.jpg" alt="Product Image 3"> --}}
          </div>
          <div class="product-details"> <br> <br>
              <h2 class="product-title">Exchange Platform Laser Cutting Machine Features</h2>
              <ul style="padding-left: 20px;">
                  <li>Carbon steel: 3mm</li>
                  <li> Stainless steel: 3mm</li>
                  <li>UAluminum: 1mm</li>
                  <li>Scaling production capabilities.</li>
                  <li>Diversifying product offerings.</li>
                  <li> Selling older models.</li>
                  <li> Capitalizing on investment.</li>
                  <li> Meeting customer requirements.</li>
                  <li>Industry Trends: Adapting to market changes.</li>
              </ul>
              <p> <b>Laser Power:</b> 1700W, 2300W</p>
          </div>
      </div>

      <div class="container">
        <div class="product-images">
            <img src="{{ asset('Frontend/assets/images/laserWelder03.jpg') }}" alt="Product Image 1">
            {{-- <img src="image2.jpg" alt="Product Image 2">
          <img src="image3.jpg" alt="Product Image 3"> --}}
        </div>
        <div class="product-details"> <br> <br>
            <h2 class="product-title">Extreme Power Fiber Laser Cutting Machine</h2>
            <ul style="padding-left: 20px;">
                <li>High demand, profitability.</li>
                <li>Meeting market needs.</li>
                <li>Upgrading, staying competitive.</li>
                <li>Scaling production capabilities.</li>
                <li>Diversifying product offerings.</li>
                <li> Selling older models.</li>
                <li> Capitalizing on investment.</li>
                <li> Meeting customer requirements.</li>
                <li>Industry Trends: Adapting to market changes.</li>
            </ul>
            <p> <b>Laser Power:</b> 2200W, 2800W</p>
        </div>
    </div>



        </body>
    </div>
    <!-- wpo-service-single-area end -->
@endsection
