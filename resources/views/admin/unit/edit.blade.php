@extends('master.admin.master')


@section('title')

    Edit Unit

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Unit Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('unit.update',['id' => $unit->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Unit Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$unit->name}}" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Unit Description </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" id="">{{$unit->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"> Choose Image </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                        <img src="{{asset($unit->image)}}" alt="" height="50" width="80"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-4" >
                                    <label for="" class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success form-control w-50" id="">UPDATE UNIT</button>
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


