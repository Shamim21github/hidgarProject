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
      <h1 class="product-title" style="text-align: center; font-size:50px;">Combination sheet and tube laser cutting Equipment</h1> <br> <br>
        <div class="container">
            <div class="product-images">
                <img src="{{ asset('Frontend/assets/images/tubelaser01.jpg') }}" alt="Product Image 1">
                {{-- <img src="image2.jpg" alt="Product Image 2">
              <img src="image3.jpg" alt="Product Image 3"> --}}
            </div>
            <div class="product-details"> <br> <br>
                <h2 class="product-title">Auto Loading Tube Laser Cutter</h2>
                <ul style="padding-left: 20px;">
                    <li> Streamlines Operations</li>
                    <li> Allowing single-operator control</li>
                    <li>Automated feeding system</li>
                    <li>bus signal transmission Support</li>
                    <li>Rapid response and precision</li>
                </ul>
                <p> <b>Laser Power:</b> 3000W/ 6000W</p>
            </div>
        </div>

        <div class="container">
          <div class="product-images">
              <img src="{{ asset('Frontend/assets/images/tubelaser03.jpg') }}" alt="Product Image 2">
              {{-- <img src="image2.jpg" alt="Product Image 2">
            <img src="image3.jpg" alt="Product Image 3"> --}}
          </div>
          <div class="product-details"> <br> <br>
              <h2 class="product-title">Powerful Laser Cutting Machine Features</h2>
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
              <p> <b>Laser Power:</b> 2400W, 2800W</p>
          </div>
      </div>

      <div class="container">
        <div class="product-images">
            <img src="{{ asset('Frontend/assets/images/tubelaser02.jpg') }}" alt="Product Image 3">
            {{-- <img src="image2.jpg" alt="Product Image 2">
          <img src="image3.jpg" alt="Product Image 3"> --}}
        </div>
        <div class="product-details"> <br> <br>
            <h2 class="product-title">Smart  Laser Cutting Machine</h2>
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
