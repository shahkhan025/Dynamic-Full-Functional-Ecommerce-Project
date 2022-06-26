@extends('master.front.master')

@section('title')
    Login Page
@endsection


<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('/')}}front/assets/login/css/style.css">

@section('body')

    <div class="account-login section py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item">My Dashboard</a>
                            <a href="" class="list-group-item">My Profile</a>
                            <a href="" class="list-group-item">My All Order</a>
                            <a href="" class="list-group-item">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>1</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{number_format($order->order_total)}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



