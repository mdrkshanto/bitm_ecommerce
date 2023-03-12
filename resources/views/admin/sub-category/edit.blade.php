@extends('admin.master')
@section('title')
    Edit Sub Category
@endsection
@section('body')
    <div class="card">
        <h5 class="text-success text-center">{{ session('message') }}</h5>
        <div class="card-body">
            <h4 class="card-title mb-4">Edit Sub Category Form</h4>
            <form action="{{ route('sub-category.update',['id'=>$sub_category->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Select Category</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm shadow-none" name="category_id">
                            <option disabled selected>--Select Category--</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"{{$category->id == $sub_category->category->id ? ' selected' : null}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Sub Category name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{$sub_category->name}}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control">{{$sub_category->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="image">
                        <img src="{{asset($sub_category->image)}}" alt="" class="edit-image">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Category Status</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm" name="status">
                            <option disabled>Select Status</option>
                            <option value="1"{{$sub_category->status == 1 ? ' selected' : null}}>Active</option>
                            <option value="0" {{$sub_category->status == 0 ? ' selected' : null}}>Inactive</option>
                        </select>
{{--                        <div class="custom-control custom-switch">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customSwitchsizesm" value="true" name="status">--}}
{{--                            <label class="custom-control-label" for="customSwitchsizesm">Small Size Switch</label>--}}
{{--                        </div>--}}
                    </div>
                </div>

{{--                <div class="custom-control custom-switch mb-3" dir="ltr">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="customSwitchsizesm" checked>--}}
{{--                    <label class="custom-control-label" for="customSwitchsizesm">Small Size Switch</label>--}}
{{--                </div>--}}

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
        .edit-image{
            height: 3rem;
            width: 3rem;
        }
    </style>
@endsection
