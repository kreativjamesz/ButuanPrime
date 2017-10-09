<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roost - Material Design Real Estate</title>

        <!-- Vendors -->

        <!-- Material design colors -->
        <link href="{{asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="{{asset('bower_components/animate.css/animate.min.css')}}">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">

        <!-- Slick Carousel -->
        <link rel="stylesheet" href="{{asset('bower_components/slick-carousel/slick/slick.css')}}">

        <!-- NoUiSlider - Input Slider -->
        <link rel="stylesheet" href="{{asset('bower_components/nouislider/distribute/nouislider.min.css')}}">

        <!-- Site -->
        <link rel="stylesheet" href="{{asset('css/app_1.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app_2.min.css')}}">

        <!-- Page Loader JS -->
        <script src="{{asset('js/page-loader.min.js')}}" async></script>
    <script src='/google_analytics_auto.js'></script></head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        @include('layouts.partials.bp_header')
        @yield('content')
        @include('layouts.partials.bp_footer')

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__inner">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript -->

        <!-- jQuery -->
        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Waves button ripple effects -->
        <script src="{{asset('bower_components/Waves/dist/waves.min.js')}}"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>

        <!-- Slick Carousel - Custom Alerts -->
        <script src="{{asset('bower_components/slick-carousel/slick/slick.min.js')}}"></script>

        <!-- NoUiSlider -->
        <script src="{{asset('bower_components/nouislider/distribute/nouislider.min.js')}}"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
            <script src="bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="{{asset('js/bp.min.js')}}"></script>

        <!-- Demo only -->
        <script src="{{asset('js/demo/demo.js')}}"></script>
    </body>
</html>