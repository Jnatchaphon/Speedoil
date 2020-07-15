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
                <h1 class="m-0 text-dark">Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card">
    <div class="card-header">
        <div class="row mb-0">
            <div class="col-sm-10">
            <h3>แสดงข้อมูลผลิตภัณฑ์ [ทั้งหมด {{$count}} รายการ]</h3>
            </div>
            <div class="col-sm-2 text-right"><a href='{{ url('/Admin/Product/create') }}'><input type="submit"
                        class="btn btn-danger" value="เพิ่มข้อมูล"></a></div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center" style="width: 8%;">#</th>
                    <th scope="col" class="text-center" style="width: 15%;">Image</th>
                    <th scope="col" class="text-center">Product Name</th>
                    <th scope="col" class="text-center" style="width: 8%;"></th>
                </tr>
            </thead>
            @foreach ($pro as $pros)
            <tr>
                <th scope="row" class="text-center" style="vertical-align: middle;">{{ ($pro ->currentpage()-1) * $pro ->perpage() + $loop->index + 1 }}</th>
                <td class="text-center" style="vertical-align: middle;">
                    <a href="{{ url('img/upload/'.$pros->p_pic) }}" data-lity><img src="{{ url('img/upload/'.$pros->p_pic) }}" class="img-thumbnail" width="30" height="30"></a>
                </td>
                <td class="text-center" style="vertical-align: middle; height: 50px;">{{$pros->p_name}}</td>
                <td style="display: flex; justify-content: center;" class="border-bottom-0 border-left-0 border-right-0">
                    @if($pros->p_show == 1)
                    <a href="{{ url('/Admin/PSet/'.$pros->id.'/0') }}" class="btn btn-link p-1"><i class="fas fa-eye"></i></a>
                    @elseif($pros->p_show == 0)
                    <a href="{{ url('/Admin/PSet/'.$pros->id.'/1') }}" class="btn btn-link-dark p-1"><i class="fas fa-eye-slash"></i></a>
                    @endif
                    <a href="{{ route('ProductGallery.show', $pros->id)}}" class="btn btn-link p-1"><i class="fas fa-images"></i></a>
                    <a href="{{ route('Product.edit' , $pros->id) }}" class="btn btn-link p-1"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('Product.destroy', $pros->id)}}" method="post" onclick="return confirm('Are you sure.')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link p-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

        <div class="row mt-3">
            <div class="col-12">
                <ul class="pagination pagination-sm m-0 float-right">
                    {!! $pro->render() !!}
                </ul>
            </div>
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
