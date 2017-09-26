<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Butuan Prime</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    @yield('styles')
    <!-- Theme style -->
    <link href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.css')}}" rel="stylesheet" >
    <link href="{{ asset('/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        html,body {height:100%;}
        .content-wrapper {height:100%;}
    </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

        @include('layouts.partials.header')
        @include('layouts.partials.main-sidebar')
        <div class="content-wrapper clearfix">
            @include('layouts.partials._message')
            @yield('content-header')
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('layouts.partials.footer')

    </div><!-- ./wrapper -->
    
    <script src="{{ asset("/bower_components/AdminLTE/plugins/jquery/jquery-2.2.3.min.js") }}"></script>
    <script src="{{ asset('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
    @yield('scripts')
</body>
</html>