@extends('master.admin.master')

@section('title')
    Manage All Unit
@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body shadow bg-light">
                        <h4 class="card-title mb-4">Manage Unit Page</h4>
                        <p class="text-success text-center">{{Session::get('message')}}</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Unit Name</th>
                                <th>Unit description</th>
                                <th>Unit Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td><textarea>{{$unit->description}}</textarea></td>
                                    <td><img src="{{asset($unit->image)}}" alt="" height="80" width="100"></td>
                                    <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('unit.edit',['id' => $unit->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('unit.delete',['id' => $unit->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Item..??')">
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

