@extends('master.admin.master')

@section('title')
    Manage All Category
@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body shadow bg-light">
                        <h4 class="card-title mb-4">Manage Category Page</h4>
                        <p class="text-success text-center">{{Session::get('message')}}</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category description</th>
                                <th>Category Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td><textarea>{{$category->description}}</textarea></td>
                                <td><img src="{{asset($category->image)}}" alt="" height="80" width="100"></td>
                                <td>{{$category->status}}</td>
                                <td>
                                    <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Item..??')">
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
