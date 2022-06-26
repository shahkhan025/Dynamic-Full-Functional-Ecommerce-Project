@extends('master.front.master')

@section('title')

    Product Detail Page

@endsection

<link href="{{asset('/')}}front/assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/')}}front/assets/css/main.css" />

@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h4 class="page-title">Complete Order</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="{{route('fishbang-home')}}">Shop</a></li>
                        <li>Complete Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

