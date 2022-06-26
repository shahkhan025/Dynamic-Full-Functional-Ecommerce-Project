@extends('master.admin.master')

@section('title')

    Edit Category

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Category Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('category.update',['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Category Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Category Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" id="">{{$category->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control-file mb-2">
                                        <img src="{{asset($category->image)}}" alt="" width="80" height="50"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success form-control w-50" id="">UPDATE CATEGORY</button>
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

