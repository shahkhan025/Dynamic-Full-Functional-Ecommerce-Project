@extends('master.admin.master')

@section('title')

    Add New Sub-Category

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Add SubCategory Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('subCategory.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category_id">
                                            <option value="" >--select Category Name--</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> SubCategory Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> SubCategory Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" id=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success form-control w-50" id="">CREATE NEW SUB-CATEGORY</button>
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
