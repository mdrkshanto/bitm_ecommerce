@extends('admin.master')
@section('title')
    Add New Product
@endsection
@section('body')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add New Product</h4>
        </div>
        <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
            <div class="card-body">
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
                                    <option disabled selected>--Select Sub Category--</option>
                                    >
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
                    <div class="col-md-4">
                        <div class="row form-group my-2">
                            <label class="col-md-4 col-form-label">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="product_name"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row form-group my-2">
                                    <label class="col-md-8 col-form-label">Regular Price</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="regular_price"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row form-group my-2">
                                    <label class="col-md-8 col-form-label">Selling Price</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="selling_price"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row form-group my-2">
                                    <label class="col-md-8 form-label">Stock Amount</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="stock_amount"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row form-group my-2">
                    <label class="col-md-3 col-form-label">Short Description</label>
                    <div class="col-md-9">
                        <textarea name="short_description" class="form-control summernote"></textarea>
                    </div>
                </div>
                <div class="row form-group my-2">
                    <label class="col-md-3 col-form-label">Long Description</label>
                    <div class="col-md-9">
                        <textarea name="long_description" class="form-control summernote"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 my-2">
                        <div class="row form-group">
                            <label class="form-label col-md-4">Feature Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="feature_image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="row form-group">
                            <label class="form-label col-md-4">Other Images</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="other_images[]" multiple>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-middle justify-content-between">
                    <button class="btn btn-sm btn-success shadow-none" type="submit">Submit</button>
                    <button class="btn btn-sm btn-secondary shadow-none" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="{{asset('/')}}admin/assets/libs/tinymce/tinymce.min.js"></script>
    <script src="{{asset('/')}}admin/assets/libs/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset('/')}}admin/assets/js/pages/form-editor.init.js"></script>
    <script>
        $('.summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['fontname', ['fontname']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['codeview']],
            ],
            spellCheck: true,
            height: 150,
        });
    </script>
@endsection
@section('style')
    <link href="{{asset('/')}}admin/assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css"/>
@endsection
