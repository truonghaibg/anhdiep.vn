<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN: script -->
    <script src="{{URL::asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <!-- END: script -->


    <!-- BEGIN: stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- END: stylesheet -->
</head>

<body class="bg-light">
<div id="main-content">
    @yield('content')
</div>
</body>
</html>