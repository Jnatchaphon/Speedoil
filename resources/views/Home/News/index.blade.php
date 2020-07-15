@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">News & Events</div>
            </div>
        </div>
    </div>
    <div class="row mb-2 pl-2 pr-2">
        <a href="{{route('NewsEvents.show' , '1')}}" class="text-primary">
            <div class="row mt-2 border-bottom">
                <div class="col-sm-2"><img class="card-img" src="{{url('/img/2.jpg')}}" alt="Card image cap"></div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Title</h5>
                        <p class="card-text text-dark">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text text-right"><small>Read More</small></p>
                    </div>
                </div>
            </div>
        </a>

        <a href="{{route('NewsEvents.show' , '1')}}" class="text-primary">
            <div class="row mt-2 border-bottom">
                <div class="col-sm-2"><img class="card-img" src="{{url('/img/p1.jpg')}}" alt="Card image cap"></div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Title</h5>
                        <p class="card-text text-dark">This is a wider card with supporting text below as a natural
                            lead-in
                            to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text text-right"><small>Read More</small>
                        </p>
                    </div>
                </div>
            </div>
        </a>

        <a href="{{route('NewsEvents.show' , '1')}}" class="text-primary">
            <div class="row mt-2 border-bottom">
                <div class="col-sm-2"><img class="card-img" src="{{url('/img/1.png')}}" alt="Card image cap"></div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Title</h5>
                        <p class="card-text text-dark">This is a wider card with supporting text below as a natural
                            lead-in
                            to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text text-right"><small>Read More</small>
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{route('NewsEvents.show' , '1')}}" class="text-primary">
            <div class="row mt-2 border-bottom">
                <div class="col-sm-2"><img class="card-img" src="{{url('/img/3.jpg')}}" alt="Card image cap"></div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Title</h5>
                        <p class="card-text text-dark">This is a wider card with supporting text below as a natural
                            lead-in
                            to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text text-right"><small>Read More</small>
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{route('NewsEvents.show' , '1')}}" class="text-primary">
            <div class="row mt-2 border-bottom">
                <div class="col-sm-2"><img class="card-img" src="{{url('/img/p2.jpg')}}" alt="Card image cap"></div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Title</h5>
                        <p class="card-text text-dark">This is a wider card with supporting text below as a natural
                            lead-in
                            to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text text-right"><small>Read More</small>
                        </p>
                    </div>
                </div>
            </div>
        </a>
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
