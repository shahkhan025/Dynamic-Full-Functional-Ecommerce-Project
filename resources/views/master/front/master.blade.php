<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('/')}}front/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}front/assets/css/style.css"  rel="stylesheet">
    <link href="{{asset('/')}}front/assets/css/global.css" rel="stylesheet">
    <link href="{{asset('/')}}front/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/assets/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="{{asset('/')}}front/assets/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}front/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/xzoom.css" media="all"/>


</head>
<body>

<section id="header_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 space_all">
                <div class="col-sm-3 space_all">
                    <div class="header_main_1">
                        <a href="index.html"><i class="fa fa-tree"></i>FISHBANG</a>
                    </div>
                </div>
                <div class="col-sm-9 space_all">
                    <div class="header_main_2 clearfix">
                        <div class="col-sm-4 space_all">
                            <div class="header_main_3 clearfix">
                                <div class="col-sm-2">
                                    <div class="header_main_4">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="header_main_5">
                                        <p>291,Arshinagar <br/>
                                            Keraniganj,Dhaka-1312</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 space_all">
                            <div class="header_main_3 clearfix">
                                <div class="col-sm-2">
                                    <div class="header_main_4">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="header_main_5">
                                        <p>(1123) 224 366 <br/>
                                            <a href="#">shahkhantsot@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 space_all">
                            <div class="header_main_3 clearfix">
                                <div class="col-sm-2">
                                    <div class="header_main_4">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="header_main_5">
                                        <p>6 hours - 21 hours <br/>
                                            *Weekends working</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="header">
    <nav class="navbar navbar-default navbar-expand-md" role="navigation">
        <div class="container">

            <div class="navbar-collapse ms-auto" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    {{--                    <li><a href="about.html">About</a></li>--}}
                    <li><a href="services.html">Services</a></li>
                    <li><a href="{{route('fishbang-home')}}">FishBang Ecommerce</a></li>
                    {{--                    <li><a href="gallery.html">Gallery</a></li>--}}
                    <li class="">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-expanded="false">
                            All Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            @foreach($categories as $category)

                                <li>
                                    <a class="dropdown-item" href="{{route('category-product',['id' => $category->id])}}" role="button">
                                        <h5>{{$category->name}} &raquo;</h5>
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach($category->subCategories as $subCategory)
                                            <li>
                                                <a class="dropdown-item" href="{{route('subCategory-product',['id' => $subCategory->id])}}"><h5>{{$subCategory->name}}</h5></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-expanded="false">
                            User
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @if(Session::get('customer_id'))
                            <li>
                                <a class="dropdown-item" href="{{route('customer-dashboard')}}">
                                    <h5> DashBoard</h5>
                                </a>
                            </li>
                                <li>
                                    <a class="" href="{{route('customer-logout')}}">
                                        <h5> Logout</h5>
                                    </a>
                                </li>

                                @else
                            <li>
                                <a class="" href="{{route('customer-login')}}">
                                    <h5> Login</h5>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{route('customer-register')}}">
                                    <h5> Registration</h5>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-expanded="false">
                            View Cart
                        </a>

                        {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
                        {{--                                <li>--}}
                        {{--                                    <a class="dropdown-item" href="#">--}}
                        {{--                                        <h5> DashBoard</h5>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>>--}}
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <div class="card-title"><a href="{{route('show-cart-product')}}"><h4 class="text-center text-success">My Cart</h4></a></div>
                                <div class="card card-body">
                                    <ul>
                                        @php($total = 0)
                                        @foreach($cartProducts as $cartProduct)
                                            @php($total = $total + ($cartProduct->quantity * $cartProduct->price))
                                        @endforeach
                                        <li><b>Cart Subtotal</b>-> <span> Tk. {{number_format($total)}}</span></li>
                                        @php($tax = round((($total*15)/100)))
                                        <li><b>Tax Amount</b>-><span> Tk. {{ number_format($tax)  }}</span></li>
                                        <li><b>Shipping</b>-><span> Tk. {{$shipping = 100}}</span></li>
                                        <hr/>
                                        @php($grandTotal = $total + $tax + $shipping)
                                        <li class="last"><b>Total Payable</b>-><span> Tk. {{ number_format($grandTotal) }}</span></li>
                                    </ul>
                                    <br/>
                                    <div class="button">
                                        <a href="{{route('checkout')}}" class="btn">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>


@yield('body')

<section id="footer">
    <div class="footer_inner clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3">
                        <div class="footer_1">
                            <h3>AGRICULTURAL</h3>
                            <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum..Praesent mauris. Fusce nec tellus</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer_2">
                            <h3>Head Office</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Sed Dignissim Lacinia Nunc</li>
                                <li><i class="fa fa-phone"></i> Phone: +1 (2) 345 6789</li>
                                <li><i class="fa fa-envelope"></i> <a href="#">info@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer_3">
                            <h3>FOLLOW US ON</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer_2">
                            <h3>KEEP IN TOUCH</h3>
                        </div>
                        <div class="footer_4">
                            <p>Enter your email and we’ll send you latest..</p>
                        </div>
                        <div class="footer_3">
                            <p><input type="text" class="form-control" placeholder="Your Email Address"></p>
                            <a href="#" class="button">SIGN UP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer_main" class="clearfix">
    <div class="col-sm-12">
        <div class="footer_main_1">
            <p>© 2022 Your Website Name. All Rights Reserved. Design by<a href="http://www.fishBang.com"> Shah Khan On Web/a></p>
        </div>
    </div>
</section>

<script src="{{asset('/')}}front/assets/js/bootstrap.js"></script>
<script src="{{asset('/')}}front/assets/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}front/assets/js/jquery-2.1.1.min.js"></script>
<script src="{{asset('/')}}front/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}front/assets/js/xzoom.min.js"></script>

{{--<script src="js/jquery-2.1.1.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}

</body>
