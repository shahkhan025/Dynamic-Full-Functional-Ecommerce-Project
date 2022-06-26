@extends('master.front.master')

@section('title')

    Product Detail Page

@endsection

<link href="{{asset('/')}}front/assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/')}}front/assets/css/main.css" />
<link rel="stylesheet" href="{{asset('/')}}front/assets/css/xzoom.css" media="all"/>

@section('body')

    <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">checkout</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="{{route('fishbang-home')}}">Shop</a></li>
                    <li>checkout</li>
                </ul>
            </div>
        </div>
    </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title">Your Order Info Details </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <form action="{{route('new-order')}}" method="POST">
                                        @csrf
                                        @if(!Session::get('customer_id'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Full Name</label>
                                                <div class="row">
                                                    <div class="col-md-12 form-input form">
                                                        <input type="text" placeholder="First Name" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Email Address</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Mobile Number</label>
                                                <div class="form-input form">
                                                    <input type="number" placeholder="Mobile Number" name="mobile">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Delivery Address</label>
                                                <div class="form-input form">
                                                    <input type="text" name="delivery_address" placeholder="Delivery Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="single-form ">
                                                <label>Select Payment Method</label>
                                            <div class="">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="payment_method" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">cash On Delivery</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="payment_method" value="2">
                                                    <label class="form-check-label" for="inlineRadio2">Online</label>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <div class="row">
                                                    <div class="col-md-12 form-input form">
                                                        <input type="submit" class="btn btn-success" value="Confirm Order"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        @else
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Delivery Address</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="delivery_address" placeholder="Delivery Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form ">
                                                    <label>Select Payment Method</label>
                                                    <div class="">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method" value="1">
                                                            <label class="form-check-label" for="inlineRadio1">cash On Delivery</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="payment_method" value="2">
                                                            <label class="form-check-label" for="inlineRadio2">Online</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            <input type="submit" class="btn btn-success" value="Confirm Order"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </form>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table">
                            <h5 class="title text-success">Your Cart Summery</h5>
                            <div class="sub-total-price">
                                @php($total = 0)
                                @foreach($cartProducts as $cartProduct)
                                <div class="total-price">
                                    <p class="value">{{$cartProduct->name}}-({{$cartProduct->quantity}})*({{$cartProduct->price}})</p>
                                    <p class="price">Tk. {{number_format($cartProduct->quantity * $cartProduct->price)}}</p>
                                </div>
                                    @php($total += $cartProduct->quantity * $cartProduct->price)
                                @endforeach

                            </div>

                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">SubTotal Price:</p>
                                    <p class="price">Tk. {{number_format($total)}}</p>
                                </div>

                                <div class="payable-price">
                                    <p class="value">Tax Total:</p>
                                    @php($tax = ($total*15)/100)
                                    <p class="price">Tk. {{number_format($tax)}}</p>
                                </div>

                                <div class="payable-price">
                                    <p class="value">Shipping Cost:</p>
                                    @php($shipping = 100)
                                    <p class="price">Tk. {{number_format($shipping)}}</p>
                                </div>

                                <div class="payable-price">
                                    <p class="value">Grand Total:</p>
                                    @php($grandTotal = ($total+ $shipping + $tax))
                                    <p class="price">Tk. {{number_format($grandTotal)}}</p>

                                    <?php
                                    Session::put('grand_total', $grandTotal);
                                    Session::put('tax_total', $tax);
                                    Session::put('shipping_cost', $shipping);
                                    ?>
                                </div>
                            </div>

                        <div class="">
                            <a href="product-grids.html">
                                <img src="{{asset('/')}}front/assets/img/f5.jpg" alt="#" height="150" width="350">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

@endsection
