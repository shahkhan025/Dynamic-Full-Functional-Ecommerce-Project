@extends('master.admin.master')

@section('title')
    Manage All Brand
@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body shadow bg-light">
                        <h4 class="card-title mb-4">Manage All Brand Page</h4>
                        <p class="text-success text-center">{{Session::get('message')}}</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>Brand description</th>
                                <th>Brand Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td><textarea>{{$brand->description}}</textarea></td>
                                    <td><img src="{{asset($brand->image)}}" alt="" height="80" width="100"></td>
                                    <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('brand.edit',['id' => $brand->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('brand.delete',['id' => $brand->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Item..??')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
