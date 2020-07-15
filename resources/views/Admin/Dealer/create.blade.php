@extends('Admin.app')



@section('stylesheet')
@include('Admin.stylesheet')
@endsection


@section('menuadmin')
@include('Admin.menu')
@endsection



@section('contentadmin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add Dealer</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">

    <!-- /.card-header -->
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Dealer</h3>
            </div>
            <!-- /.card-header -->
            @if (count($errors) > 0)
            <div class="alert alert-secondary" role="alert">
                <ul class="nav">
                    @foreach ($errors->all() as $error)
                    <li class="nav-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- form start -->
            <form method="post" action="{{ route('Dealer.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Province</label>
                        <select class="form-control" name="prov" id="exampleFormControlSelect1">
                            @foreach($dd as $d)
                            <option value="{{ $d->PROVINCE_ID }}">{{$d->PROVINCE_NAME}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" name="name" placeholder="Enter Topic Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input type="tel" class="form-control" name="tel" placeholder="Enter Telephone">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add Dealer</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
</div>

@endsection



@section('footer')
@include('Admin.footer')
@endsection


@section('script')
@include('Admin.script')

@endsection
