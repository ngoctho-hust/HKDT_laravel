<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/vendors/jqvmap/dist/jqvmap.min.css') }}">

    @stack('head')

    <link rel="stylesheet" href="{{ asset('vendor/bower-hkdt/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>


<!-- Left Panel -->
@include('layouts.left_panel')
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    @include('layouts.header')
    <!-- Header-->

    <div class="content mt-3">
        @include('common.errors')
        @include('common.messages')

        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{ asset('vendor/bower-hkdt/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/sweetalert.min/index.js') }}"></script>

@stack('foot')

<script src="{{ asset('vendor/bower-hkdt/assets/js/main.js') }}"></script>

</body>

</html>
