@extends('admin.master')
@section('title')
    Add Sub Category
@endsection
@section('body')
    <div class="card">
        <h5 class="text-success text-center">{{ session('message') }}</h5>
        <div class="card-body">
            <h4 class="card-title mb-4">Add Sub Category Form</h4>

            <form action="{{ route('sub-category.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Select Category</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm shadow-none" name="category_id">
                            <option disabled selected>--Select Category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Sub Category name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="image">
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
