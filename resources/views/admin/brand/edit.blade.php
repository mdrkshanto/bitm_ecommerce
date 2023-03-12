@extends('admin.master')
@section('title')
    Brand Category
@endsection
@section('body')
    <div class="card">
        <span class="text-success text-center">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="card-title mb-4">Update Brand Form</h4>

            <form action="{{route('brand.update',['id'=>$brand->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Brand name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{$brand->name}}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control">{{$brand->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="image">
                        <img src="{{asset($brand->image)}}" alt="" class="update-image">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Brand Status</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm" name="status">
                            <option disabled>Select Status</option>
                            <option value="1"{{$brand->status == 1 ? ' selected' : null}}>Active</option>
                            <option value="0"{{$brand->status == 0 ? ' selected' : null}}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .update-image{
            height: 3rem;
            width: 3rem;
        }
    </style>
@endsection
