<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thời trang ANH ĐIỆP - @yield('title')</title>

    <!-- BEGIN: script -->
    <script src="{{URL::to('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{URL::to('admin/assets/js/plugins.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/main.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/widgets.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::to('admin/assets/js/popper.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <!-- END: script -->


    <!-- BEGIN: stylesheet -->
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/normalize.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" type='text/css' href="{{URL::to('admin/assets/scss/style.css')}}">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800'>
    <link rel='stylesheet' type='text/css' href="{{URL::to('admin/assets/css/lib/vector-map/jqvmap.min.css')}}">
    <!-- END: stylesheet -->
</head>

<body class="bg-light">
<div id="main-content-login">
    @yield('content')
</div>
</body>
</html>