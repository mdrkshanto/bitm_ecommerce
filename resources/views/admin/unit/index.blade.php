@extends('admin.master')
@section('title')
    Add Unit
@endsection
@section('body')
    <div class="card">
        <span class="text-center text-success">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="mb-4 card-title">Add Unit Form</h4>

            <form action="{{ route('unit.add') }}" method="post">
                @csrf
                <div class="mb-4 form-group row">
                    <label class="col-sm-3 col-form-label">Unit name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>

                <div class="mb-4 form-group row">
                    <label class="col-sm-3 col-form-label">Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="code">
                    </div>
                </div>

                <div class="mb-4 form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control"></textarea>
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
