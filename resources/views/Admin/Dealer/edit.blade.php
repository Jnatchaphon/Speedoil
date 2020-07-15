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
                    <li class="breadcrumb-item active">Edit Dealer</li>
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
                <h3 class="card-title">Edit Dealer</h3>
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
            <form method="post" action="{{ route('Dealer.update', $d->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Province</label>
                        <select class="form-control" name="prov" id="exampleFormControlSelect1">
                            @foreach($dd as $dds)
                            <option value="{{ $dds->PROVINCE_ID }}"
                                @if ($d->PROVINCE_ID == $dds->PROVINCE_ID)
                                    selected
                                @endif
                                >{{$dds->PROVINCE_NAME}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" name="name"  value="{{$d->d_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input type="tel" class="form-control" name="tel" value="{{$d->d_tel}}">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit Dealer</button>
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
