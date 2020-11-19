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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{ asset('vendor/bower-hkdt/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

@stack('foot')

<script src="{{ asset('vendor/bower-hkdt/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/assets/js/widgets.js') }}"></script>
<script src="{{ asset('vendor/bower-hkdt/assets/js/main.js') }}"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
