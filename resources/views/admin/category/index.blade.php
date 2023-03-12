@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('body')
    <div class="card">
        <span class="text-success text-center">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="card-title mb-4">Add Category Form</h4>

            <form action="{{ route('add.category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Category name</label>
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
