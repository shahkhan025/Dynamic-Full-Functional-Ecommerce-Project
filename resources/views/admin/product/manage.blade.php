@extends('master.admin.master')

@section('title')

    Manage Product

@endsection

@section('body')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow bg-light">
                        <div class="card-body">

                            <h4 class="card-title">All Products Page</h4>
                            <p class="text-success text-center">{{Session::get('message')}}</p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Selling Price</th>
                                    <th>Stock Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{asset($product->image)}}" alt="" height="50" width="80"></td>
                                        <td>{{$product->selling_price}}</td>
                                        <td>{{$product->stock_amount}}</td>

                                        <td>{{$product->status == 1 ? 'published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-primary">
                                                <i class="fa fa-book-open"></i>
                                            </a>
                                            <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This ??')">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </section>

@endsection

