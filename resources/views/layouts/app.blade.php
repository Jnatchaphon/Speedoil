<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Speed Oil Co.,Ltd</title>

    <!-- Scripts -->
    @include('Admin.stylesheet')
    <style>
        @font-face {
            font-family: seri;
            src: url('{{ url('css/Fonts/Serithai-Regular.ttf')}}');
        }

        .serifont {
            font-family: seri;
            font-size: 28px;
            font-weight: bold;
        }

        .serifont-des {
            font-family: seri;
            font-size: 24px;
            font-weight: bold;
        }

        .serifont-r {
            font-family: seri;
            font-size: 18px;
        }

        .serifont-s {
            font-family: seri;
            font-size: 16px;
        }

        .bgspdo {
            background-color: #112066;
        }

        .oppa {
            opacity: 90%;
        }

        a:hover {
            color: white;
        }

        h2 {
            text-align: center;
            padding: 20px;
        }

        /* Slider */

        .slick-slide {
            margin: 0px 5px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

    </style>
</head>

<body>
    <div class="container-fluid bgspdo fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bgspdo mt-0 mb-0 ml-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('img/logo.png') }}" class="rounded-0" width="120"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('About')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('Products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('NewsEvents')}}">News & Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dealers
                            </a>
                            <div class="dropdown-menu serifont-s" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{url('Dealers/Northern')}}">ภาคเหนือ</a>
                                <a class="dropdown-item" href="{{url('Dealers/NorthEastern')}}">ภาคตะวันออกเฉียงเหนือ</a>
                                <a class="dropdown-item" href="{{url('Dealers/Western')}}">ภาคตะวันตก</a>
                                <a class="dropdown-item" href="{{url('Dealers/Central')}}">ภาคกลาง</a>
                                <a class="dropdown-item" href="{{url('Dealers/Eastern')}}">ภาคตะวันออก</a>
                                <a class="dropdown-item" href="{{url('Dealers/Southern')}}"">ภาคใต้</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('Contact')}}">Contacts</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="#"><i class="fab fa-facebook-f text-white mr-3"></i></a>
                        <a href="#"><i class="fab fa-youtube text-white"></i></a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    @yield('maincontent')
    <div class="container-fluid bgspdo">
        <div class="container">
            <div class="row pt-2 pb-2">
                <div class="col-sm-4">
                    <nav class="nav flex-column text-center">
                        <a class="nav-link text-gray text-sm" href="#">Premium Synthetic 5W-30</a>
                        <a class="nav-link text-gray text-sm" href="#">Synthetic 5W-30</a>
                        <a class="nav-link text-gray text-sm" href="#">Jumbo Oil SAE15W-40</a>
                    </nav>
                </div>
                <div class="col-sm-4">
                    <nav class="nav flex-column text-center">
                        <a class="nav-link text-gray text-sm" href="#">Premium Synthetic 5W-40</a>
                        <a class="nav-link text-gray text-sm" href="#">Synthetic 5W-30</a>
                        <a class="nav-link text-gray text-sm" href="#">Flushing Oil</a>
                    </nav>
                </div>
                <div class="col-sm-4">
                    <nav class="nav flex-column text-center">
                        <a class="nav-link text-gray text-sm" href="#">Premium Synthetic 15W-40</a>
                        <a class="nav-link text-gray text-sm" href="#">Jumbo Oil SAE10W-30</a>
                        <a class="nav-link text-gray text-sm" href="#">100% Synthetic 2T</a>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col text-center text-white pb-4">© Copyright 2019 Speed Oil Co.,Ltd</div>
            </div>
        </div>
    </div>
</body>


</html>

@include('Admin.script')

@yield('script')
