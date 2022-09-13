<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <link rel="icon" type="image/png" href="{{URL::asset('images/favicon.png')}}" />
    <meta charSet="utf-8" />
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="next-head-count" content="7" />
    <link rel="stylesheet" href="{{URL::asset('css/meanmenu.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('css/95ec97780f5a3d3d899e.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <!--SECTION: NavBar -->
        @yield('navbar')

        <!-- SECTION: BANNER -->
        @yield('banner')

        <!-- Page-Content -->
        @yield('page-content')

        <!-- SECTION: FOOTER -->
        @includeIf('layouts.footer')

        <div class="go-top "><i class="bx bx-chevrons-up"></i><i class="bx bx-chevrons-up"></i></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>

    <script src="{{URL::asset('js/meanmenu.min.js')}}"></script>

    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>

    <script src="{{URL::asset('js/wow.min.js')}}"></script>

    <script src="{{URL::asset('js/magnific-popup.min.js')}}"></script>

    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>