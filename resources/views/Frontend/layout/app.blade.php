<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Frontend/assets/images/logo/HIDGAR_LOGO__.png') }}">
    <title>Hidgar Template</title>
    <link href="{{ asset('Frontend/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/sass/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- Start header -->
        @include('Frontend.layout.header')
        <!-- end of header -->

       <div class="container">
        @yield('content')
       </div>

        <!-- start of wpo-site-footer-section -->
        @include('Frontend.layout.footer')
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('Frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('Frontend/assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('Frontend/assets/js/script.js') }}"></script>
</body>



</html>
