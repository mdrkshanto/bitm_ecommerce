@extends('admin.master')
@section('title')
    Update Category
@endsection
@section('body')
    <div class="card">
        <span class="text-success text-center">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="card-title mb-4">Update Category Form</h4>

            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Category name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control">{{$category->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="image">
                        <img src="{{asset($category->image)}}" alt="" class="update-image">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Category Status</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm" name="status">
                            <option disabled>Select Status</option>
                            <option value="1"{{$category->status == 1 ? ' selected' : null}}>Active</option>
                            <option value="0" {{$category->status == 0 ? ' selected' : null}}>Inactive</option>
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
