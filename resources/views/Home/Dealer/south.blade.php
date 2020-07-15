<?php use App\Http\Controllers\HomeController; ?>
@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">ภาคใต้</div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 mb-2 p-0 mt-2">
            <div class="row pl-2 pr-2 mb-2">
                <img src="{{url('/img/south.png')}}" class="card-img rounded-0">
            </div>
        </div>


        <div class="col-sm-6 mb-4">
            <div id="accordion">

                @php $sum = 1; @endphp
                @foreach($bb as $object)
                @foreach($object as $dd)

                <div class="card">
                    <div class="card-header" id="heading{{$sum}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse{{$sum}}" aria-expanded="true" aria-controls="collapse{{$sum}}">
                                @foreach (HomeController::getprov($dd->PROVINCE_ID) as $prov)
                                {{ $prov->PROVINCE_NAME }}
                                @endforeach
                            </button>
                        </h5>
                    </div>

                    <div id="collapse{{$sum}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            @foreach (HomeController::getval($dd->PROVINCE_ID) as $rx)
                            <div class="row">
                                <div class="col text-left">{{$rx->d_name }}</div>
                                <div class="col-1 text-right"><i class="fas fa-tty mt-1 text-danger"></i></div>
                                <div class="col-3 text-right"><span
                                        class="badge badge-dark mt-1">{{ $rx->d_tel }}</span></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @php $sum++; @endphp
                @endforeach
                @endforeach

            </div>
        </div>







    </div>

</div>
@endsection
