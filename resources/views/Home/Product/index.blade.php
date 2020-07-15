@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">Products</div>
            </div>
        </div>
    </div>

    <div class="card-columns">


        @foreach($aa as $pp)
        <a href="{{ route('Products.show', $pp->id) }}" class="text-primary">
            <div class="card">
                <img class="card-img-top" src="{{url('/img/upload/'.$pp->p_pic)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$pp->p_name}}</h5>
                    <p class="card-text text-dark">{{$pp->p_des}}</p>
                    <p class="card-text"><small>View Detail</small></p>
                </div>
            </div>
        </a>
        @endforeach


    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end mr-2">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

</div>
@endsection
