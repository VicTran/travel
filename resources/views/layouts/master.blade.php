<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from static.crazycafe.net/crazycafe/travel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Mar 2018 02:08:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--bootstrap.min.css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!--font-awesome.min.css -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!--material-design-iconic-font.min.css -->
    <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css">
    <!--owl.carousel.min.css -->
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <!--magnific-popup.css -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <!--nice-select.css -->
    <link href="{{asset('css/nice-select.css')}}" rel="stylesheet" type="text/css">
    <!--slicknav.min.css -->
    <link href="{{asset('css/slicknav.min.css')}}" rel="stylesheet" type="text/css">
    <!--style.css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <!--responsive.css -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')


<!--jquery.min.js-->
<script src="assets/js/jquery.min.js"></script>
<!--bootstrap.min.js-->
<script src="assets/js/bootstrap.min.js"></script>
<!--owl.carousel.min.js-->

<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--magnific-popup-1.1.0.js-->
<script src="{{asset('js/magnific-popup-1.1.0.js')}}"></script>
<!--jquery.nice-select.min.js-->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!--jquery.waypoints.4.0.0.min.js-->
<script src="{{asset('js/jquery.waypoints.4.0.0.min.js')}}"></script>
<!--jquery.counterup.min.js-->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!--jquery.slicknav.min.js-->
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<!--main.js-->
<script src="{{asset('js/main.js')}}"></script>

@yield('scripts')
</body>

<!-- Mirrored from static.crazycafe.net/crazycafe/travel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Mar 2018 02:08:29 GMT -->
</html>
