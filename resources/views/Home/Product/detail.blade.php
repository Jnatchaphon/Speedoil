@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-5 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">{{$pp->p_name}}</div>
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
                        <img class="d-block w-100" src="{{url('/img/upload/'.$pp->p_pic)}}" alt="{{$pp->p_name}}">
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
                    @php $sum = 0; @endphp
                    @foreach($gg as $ggs)
                    <li data-target="#carousel-thumb" data-slide-to="{{$sum}}" class="active">
                        <img src="{{url('/img/upload'.$ggs->pg_pic)}}" width="100">
                    </li>
                    @php $sum++; @endphp
                    @endforeach
                </ol>
            </div>
            <!--/.Carousel Wrapper-->
        </div>
        <div class="col">
            <div class="card-body">
                {!! $pp->p_detail !!}
            </div>
        </div>
    </div>


</div>
@endsection
