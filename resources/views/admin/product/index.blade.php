@extends('admin.master')
@section('title')
    Add New Product
@endsection
@section('body')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Product</h4>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Select Category</label>
                            <div class="col-md-8">
                                <select class="custom-select shadow-none text-center" name="category_id">
                                    <option disabled selected>--Select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Select Sub Category</label>
                            <div class="col-md-8">
                                <select class="custom-select shadow-none text-center" name="sub_category_id">
                                    <option disabled selected>--Select Sub Category--
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Select Brand</label>
                            <div class="col-md-8">
                                <select class="custom-select shadow-none text-center" name="brand_id">
                                    <option disabled selected>--Select A Brand--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Select Unit</label>
                            <div class="col-md-8">
                                <select class="custom-select shadow-none text-center" name="unit_id">
                                    <option disabled selected>--Select An Unit--</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="product_name"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row form-group my-2">
                            <label class="col-md-5 col-form-label">Product Code</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="product_code"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row form-group my-2">
                            <label class="col-md-5 col-form-label">Product Slug</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="product_slug"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="regular_price"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Selling Price</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="selling_price"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Stock Amount</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="stock_amount"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row form-group-my-2">
                            <label class="col-md-4 col-form-label">Short Description</label>
                            <textarea name="short_description" class="col-md-8 form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row form-group-my-2">
                            <label class="col-md-4 col-form-label">Long Description</label>
                            <textarea name="long_description" class="col-md-8 form-control"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
