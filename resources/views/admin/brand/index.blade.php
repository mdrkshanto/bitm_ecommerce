@extends('admin.master')
@section('title')
    Add Brand
@endsection
@section('body')
    <div class="card">
        <span class="text-center text-success">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="mb-4 card-title">Add Brand Form</h4>

            <form action="{{ route('brand.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 form-group row">
                    <label class="col-sm-3 col-form-label">Brand name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="mb-4 form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="mb-4 form-group row">
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
