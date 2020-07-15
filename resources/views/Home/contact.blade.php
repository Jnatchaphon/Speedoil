@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">Contact Us</div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12 mb-2 p-0 mt-2">
            <div class="col-12">
                <p class="card-text serifont-r ml-1 mr-1">ท่านสามารถติดต่อ สอบถาม หรือแจ้งปัญหาการใช้งาน
                    ผ่านช่องทางที่สะดวกด้านล่าง เรายินดีน้อมรับคำติชม เพื่อเป็นแนวทางการพัฒนาและปรับปรุงต่อไป</p>
            </div>
            <div class="col-12">
                <p class="card-text serifont-r ml-1 mr-1">บจก. พี.สปีดออยล์ 38/139 ม.2 ต.นาดี อ.เมือง จ.สมุทรสาคร 74000</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mb-2 p-0 mt-2">
            <div class="row pl-2 pr-2 mb-2">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31024.53507921608!2d100.27421225510419!3d13.592725802470198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sth!2sth!4v1573226497678!5m2!1sth!2sth"
                        width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-4">
            <div class="row pt-2">
                <div class="col-2 ml-4">
                    <img src="{{url('img/tel.png')}}" class="rounded-0" width="50">
                </div>
                <div class="col pt-2">
                    <span class="badge badge-dark">087-561-9919</span>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-2 ml-4">
                    <img src="{{url('img/facebook.png')}}" class="rounded-0" width="50">
                </div>
                <div class="col pt-2">
                    <span class="badge badge-dark">www.facebook.com/PSpeedoil</span>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-2 ml-4">
                    <img src="{{url('img/youtube.png')}}" class="rounded-0" width="50">
                </div>
                <div class="col pt-2">
                    <span class="badge badge-dark">น้ำมันเครื่อง speedoil</span>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-2 ml-4">
                    <img src="{{url('img/line.png')}}" class="rounded-0" width="50">
                </div>
                <div class="col pt-2">
                    <span class="badge badge-dark">@Speedoil</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
