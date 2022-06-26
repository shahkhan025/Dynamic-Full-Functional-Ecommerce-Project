@extends('master.admin.master')


@section('title')

    EDIT Brand

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Brand Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('brand.update',['id' => $brand->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Brand Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$brand->name}}" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Brand Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" id="">{{$brand->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{asset($brand->image)}}" alt="" height="50" width="80"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success form-control w-50" id="">UPDATE BRAND</button>
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
