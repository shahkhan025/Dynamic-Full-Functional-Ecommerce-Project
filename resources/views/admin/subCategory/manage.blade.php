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
                        <h4 class="card-title mb-4">Manage Sub-Category Page</h4>
                        <p class="text-success text-center">{{Session::get('message')}}</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>SubCategory Name</th>
                                <th>SubCategory description</th>
                                <th>SubCategory Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subCategory->category->name}}</td>
                                    <td>{{$subCategory->name}}</td>
                                    <td><textarea>{{$subCategory->description}}</textarea></td>
                                    <td><img src="{{asset($subCategory->image)}}" alt="" height="80" width="100"></td>
                                    <td>{{$subCategory->status}}</td>
                                    <td>
                                        <a href="{{route('subCategory.edit',['id' => $subCategory->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('subCategory.delete',['id' => $subCategory->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Item..??')">
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
