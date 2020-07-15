@extends('layouts.app')



@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('img/1.png')}}" class="d-block w-100" width="100%" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="container mt-1">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1 class="serifont">SPEED OIL PERFORMANCE</h1>
                    <h3 class="serifont-des">PREMIUM MOTOR OIL</h3>
                </div>
                <p class="card-text serifont-r">P Speed Oil Co.,Ltd เป็นผู้ผลิตและจัดจำหน่ายน้ำมันเครื่อง
                    น้ำมันเบนซิล
                    ดีเซลที่มีคุณภาพ รวมไปถึงสารหล่อลื่นต่างๆและน้ำยาล้างเครื่องภายในสำหรับลูกค้าทั่วไป
                    ในแวดวงยานยนต์ ปัจจุบัน Speed Oil มีการจัดจำหน่ายผ่านตัวแทนมากกว่า 100 ตัวแทนในแถบเอเชีย
                    ได้แก่ประเทศไทย พม่า ฟิลิปปิน อินโดนีเซีย ลาว มาเลเซีย เป็นต้น และในอนาคตมีเป้าหมาย
                    จะเพิ่มตลาดอื่นๆ
                </p>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12 serifont-des pl-0">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white" role="alert">News & Event</div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="{{ url('img/3.jpg')}}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title bg-black p-2 oppa">Card title</h5>
                        <p class="card-text bg-black p-2 oppa">This is a wider card with supporting text below as a
                            natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card p-2 mt-3">
                <blockquote class="blockquote mb-0 card-body mt-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card p-2">
                <blockquote class="blockquote mb-0 card-body mt-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="container">
            <div class="col-sm serifont-des pl-0">
                <div class="col-sm-3 pl-0">
                    <div class="alert alert-warning bgspdo text-white" role="alert">Products</div>
                </div>
            </div>
            <section class="customer-logos slider">
                @foreach($pro as $pros)
                <div class="slide">
                    <div class="card col">
                        <img src="{{url('img/upload/'.$pros->p_pic)}}" class="card-img-top" alt="{{$pros->p_name}}">
                        <div class="card-body">
                            <h5 class="card-title serifont">{{$pros->p_name}}</h5>
                            <p class="card-text serifont-r pt-3">{{$pros->p_des}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('Products.show', '1')}}"><small>View Detail</small></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
        </div>
    </div>


</div>
@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('.customer-logos').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });

</script>
@endsection
