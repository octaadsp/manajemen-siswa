<!DOCTYPE html>
<html>
<head>
    <!-- Meta : sebagai deskripsi / informasi singkat dari website yg dibuat-->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>LaravelApp</title>

    <!-- link href : digunakan menginput file css external-->
    <link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--[if it IE 9]>
    <script src="{{ asset('http://laravelapp/js/html5shiv_3_7_2.min.js') }}"></script>
    <script src="{{ asset('http://laravelapp/js/respond_1_4_2.min.js') }}"></script>
    <![endif]-->

</head>
<body>
    <div class="container">
    @include('navbar')
    @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>

</body>
</html>