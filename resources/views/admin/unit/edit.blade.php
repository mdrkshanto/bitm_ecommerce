@extends('admin.master')
@section('title')
    Update Unit
@endsection
@section('body')
    <div class="card">
        <span class="text-success text-center">{{ session('message') }}</span>
        <div class="card-body">
            <h4 class="card-title mb-4">Update Unit Form</h4>

            <form action="{{route('unit.update',['id'=>$unit->id])}}" method="post">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Unit name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{$unit->name}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="code" value="{{$unit->code}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control">{{$unit->description}}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-sm-3 col-form-label">Unit Status</label>
                    <div class="col-sm-9">
                        <select class="custom-select custom-select-sm" name="status">
                            <option disabled>--- Select Status ---</option>
                            <option value="1"{{$unit->status == 1 ? ' selected' : null}}>Active</option>
                            <option value="0"{{$unit->status == 0 ? ' selected' : null}}>Inactive</option>
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
