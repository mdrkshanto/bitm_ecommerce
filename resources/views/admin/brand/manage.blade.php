@extends('admin.master')
@section('title')
    Manage Brand
@endsection
@section('style')
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <style>
        .table-img{
            height: 3rem;
            width: 100%;
        }
    </style>
@endsection
@section('body')
    <div class="card">
        <h5 class="text-center text-success">{{session('message')}}</h5>
        <div class="card-body">
            <h4 class="card-title">{{count($brands) > 1?'Show all brands.':(count($brands) == 1?'Show a brand':'There is no brand.')}}</h4>

            <table id="datatable-buttons" class="table table-dark table-striped table-bordered table-hover table-sm nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>


                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $brand->name }}</td>
                        <td class="align-middle">{{ $brand->description }}</td>
                        <td class="align-middle">@if($brand->image) <img src="{{ asset($brand->image) }}" alt="{{ $brand->name }}" class="table-img"> @endif</td>
                        <td class="{{ $brand->status == 1 ? 'text-success' : 'text-danger' }} align-middle">{{ $brand->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td class="align-middle">
                            <div class="row justify-content-center">
                                <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <form action="{{route('brand.delete',['id'=>$brand->id])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('/')}}admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="{{asset('/')}}admin/assets/js/pages/datatables.init.js"></script>
@endsection
