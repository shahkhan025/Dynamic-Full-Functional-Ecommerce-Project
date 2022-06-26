@extends('master.front.master')

@section('title')

    FishBang Market

@endsection

<link href="{{asset('/')}}front/assets/css/bootstrap.css" rel="stylesheet">


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body card-img shadow-lg">
                        <img src="{{asset('/')}}front/assets/img/f6.jpg" alt="" height="300" width="1090">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shop" class="py-5">
        <div class="container">
            <div class="row">
                <div class="shop_1 clearfix">
                    @foreach($products as $product)
                        <div class="col-sm-3 shadow">
                            <div class="shop_2">
                                <a href="{{route('product-detail',['id' => $product->id])}}"><img src="{{asset($product->image)}}" alt="abc" class="img_responsive"></a>
                            </div>
                            <div class="shop_3">
                                <a href="{{route('product-detail',['id' => $product->id])}}"><h3>{{ $product->name }}</h3></a>
                                <hr/>
                                <h4>{{ $product->category->name }}</h4>
                                <hr/>
                                <p>Tk.{{ number_format($product->selling_price) }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="shop_4">
                    <ul>
                        <li class="well_1">1</li>
                        <li class=" well_2"><a href="shop-details.html">2</a></li>
                        <li class=" well_2"><a href="shop-details.html">Next <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{--    <script src="{{asset('/')}}front/assets/js/jquery-3.6.0.js"></script>--}}

@endsection


