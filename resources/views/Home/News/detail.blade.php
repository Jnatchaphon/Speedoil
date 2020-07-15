@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">News & Event Name</div>
            </div>
        </div>
    </div>



    <div class="row mt-2 mb-2">
        <div class="col-sm-6">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{url('/img/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/img/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/img/3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                        <img src="{{url('/img/1.jpg')}}" width="100">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="1">
                        <img src="{{url('/img/2.jpg')}}" width="100">
                    </li>
                    <li data-target="#carousel-thumb" data-slide-to="2">
                        <img src="{{url('/img/3.jpg')}}" width="100">
                    </li>
                </ol>
            </div>
            <!--/.Carousel Wrapper-->
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>


</div>
@endsection
