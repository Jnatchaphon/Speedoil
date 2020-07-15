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

            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">News Event Gallery</li>
                </ol>

            </div>

            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">
    <div class="card-header">
        <div class="row mb-0">
            <div class="col-sm-10">
                <h3>แสดงข้อมูลอัลบั้ม [ทั้งหมด {{$count}} รูป]</h3>
            </div>
            <div class="col-sm-2 text-right">
                <form method="post" action="{{ route('NewsGallery.update', $id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input multiple="multiple" type="file" class="custom-file-input" name="image[]"
                                id="image[]">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-success ml-2">Add Images</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">News Event Gallery</h3>
            </div>
        </div>

        <div class="card-columns">
            @foreach($gal as $pg)
            <div class="card">
                <div class="card-img-top"><img src="{{url('/img/upload/'.$pg->ng_pic)}}" class="card-img-top img-thumbnail"></div>
                <form action="{{ route('NewsGallery.destroy', $pg->id)}}" method="post" onclick="return confirm('Are you sure.')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link p-1" type="submit"><i class="fas fa-trash text-danger"></i></button>
                    </form>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection


@section('footer')
@include('Admin.footer')
@endsection

@section('script')
@include('Admin.script')
@endsection
