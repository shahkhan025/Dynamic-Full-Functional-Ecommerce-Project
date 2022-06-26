@extends('master.admin.master')

@section('title')

    Add New Product

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Add Product Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3" >Category Name</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" class="form-control" id="" onchange="getProductSubcategory(this.value)">
                                            <option value="">---Select Product Category---</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3" >Sub-Category Name</label>
                                    <div class="col-sm-9">
                                        <select name="sub_category_id" class="form-control" id="subCategoryId">
                                            <option value="">---Select Product Category---</option>
                                            @foreach($sub_categories as $sub_category)
                                                <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Product Brand </label>
                                    <div class="col-sm-9">
                                        <select name="brand_id" class="form-control" id="">
                                            <option value="">---Select Product Brand---</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Product Unit </label>
                                    <div class="col-sm-9">
                                        <select name="unit_id" class="form-control" id="">
                                            <option value="">---Select Product Unit---</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-file" name="name" id="horizontal-password-input"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-file" name="code" id="horizontal-password-input"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Regular Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control-file" name="regular_price" id="horizontal-password-input"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Selling Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control-file" name="selling_price" id="horizontal-password-input"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Product Stock Amount</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control-file" name="stock_amount" id="horizontal-password-input"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Product Short Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="short_description" class="form-control" id=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3 col-form-label"> Product Long Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="long_description" class="form-control summernote" id=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Product Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Product Other Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="other_image[]" class="form-control-file" multiple/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success form-control w-50" id="">CREATE NEW PRODUCT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
