@extends('master.front.master')

@section('title')

Fish Bang

@endsection

@section('header')
    <section id="header" class="clearfix">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-target="#dropdown-thumbnail-preview">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="fa fa-tree"></i>FISHERIES</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        {{--                    <li><a href="about.html">About</a></li>--}}
                        <li><a href="services.html">Services</a></li>
                        <li><a href="{{route('fishbang-home')}}">FishBang Ecommerce</a></li>
                        {{--                    <li><a href="gallery.html">Gallery</a></li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-expanded="false">
                                All Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                @foreach($categories as $category)

                                    <li>
                                        <a class="dropdown-item" href="{{route('category-product',['id' => $category->id])}}">
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
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <h5> DashBoard</h5>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <h5> Login</h5>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <h5> Logout</h5>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <h5> Registration</h5>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-large">
                                <a href="#" class="hvr-pulse" data-toggle="dropdown">Recent News <b class="caret"></b></a>
                                <ul class="dropdown-menu dropdown-menu-large row">
                                    <div class="col-sm-4">
                                        <div class="header_4">
                                            <div class="ih-item square effect14 top_to_bottom"><a href="#">
                                                    <div class="img"><img src="{{asset('/')}}front/assets/img/f1.jpg" alt="img"></div>
                                                    <div class="info">
                                                        <h3>Heading here</h3>
                                                        <p>dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header_4">
                                            <div class="ih-item square effect14 top_to_bottom"><a href="#">
                                                    <div class="img"><img src="{{asset('/')}}front/assets/img/ex1.jpg" alt="img"></div>
                                                    <div class="info">
                                                        <h3>Heading here</h3>
                                                        <p>dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header_4">
                                            <div class="ih-item square effect14 top_to_bottom"><a href="#">
                                                    <div class="img"><img src="{{asset('/')}}front/assets/img/fishbang.jpg" alt="img"></div>
                                                    <div class="info">
                                                        <h3>Heading here</h3>
                                                        <p>dummy text of the printing and typesetting industry.
                                                            Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </section>
@endsection

@section('body')


    <section id="center" class="center_home">
        <div class="banner">
            <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="4000" data-pause="hover">
                <!-- Wrapper-for-Slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><!-- First-Slide -->
                        <img src="{{asset('/')}}front/assets/img/katol.jpg" alt="" class="img-responsive">
                        <div class="carousel-caption kb_caption kb_caption_right">
                            <h1 data-animation="animated flipInX" class="">Lorem Ipsum Is Simply Dummy</h1>
                            <p data-animation="animated flipInX" class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
                            <h4><a href="#"class="button hvr-shutter-out-horizontal">Read More</a></h4>
                        </div>
                    </div>
                    <div class="item"> <!-- Second-Slide -->
                        <img src="{{asset('/')}}front/assets/img/f5.jpg" alt="" class="img-responsive">
                        <div class="carousel-caption kb_caption kb_caption_right">
                            <h1 data-animation="animated fadeInDown">We Provide Our best Service</h1>
                            <p data-animation="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
                            <h4><a href="#"class="button hvr-shutter-out-horizontal">Read More</a></h4>
                        </div>
                    </div>
                    <div class="item"><!-- Third-Slide -->
                        <img src="{{asset('/')}}front/assets/img/f6.jpg" alt="" class="img-responsive">
                        <div class="carousel-caption kb_caption kb_caption_right">
                            <h1 data-animation="animated fadeInDown">Printing And Typesetting</h1>
                            <p data-animation="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
                            <h4><a href="#"class="button hvr-shutter-out-horizontal">Read More</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Left-Button -->
                <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                    <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- Right-Button -->
                <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                    <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <script src="js/custom.js"></script>
        </div>
    </section>
    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="middle_1">
                    <h3>Step into the World of Organics Fish Bang !</h3>
                    <h2><a href="#">Let the first step</a> be firmly anchored!</h2>
                    <p>Organic Fisheries offers an alternative agricultural system.  It initially began in the early in the 20th century.
                        The advent of<br/> pesticides brought in its benefits and pitfalls simultaneously.
                        It is more healthy relying on compost manure, green<br/> manure, and bone meal.</p>
                </div>
                <div class="middle_2 clearfix">
                    <div class="col-sm-4">
                        <div class="middle_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/katol.jpg" alt="abc" class="img_responsive"></a>
                            <h3>Organic Fisheries</h3>
                            <p>Lorem ipsum dolor sit amet, consectuerter adipiscing elit diam, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="middle_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/h1.jpg" alt="abc" class="img_responsive"></a>
                            <h3>Increased Biodiversity</h3>
                            <p>Lorem ipsum dolor sit amet, consectuerter adipiscing elit diam, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="middle_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/fish2.jpg" alt="abc" class="img_responsive"></a>
                            <h3>Interdependent Culture</h3>
                            <p>Lorem ipsum dolor sit amet, consectuerter adipiscing elit diam, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our">
        <div class="container">
            <div class="row">
                <div class="our_1 clearfix">
                    <div class="col-sm-4">
                        <div class="our_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/8.jpg" alt="abc" class="img_responsive"></a>
                            <h3>DUCK FARMING</h3>
                            <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam porttitor mauris sit amet orci.
                                Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.</p>
                        </div>
                        <div class="our_3">
                            <i class="fa fa-tree"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/9.jpg" alt="abc" class="img_responsive"></a>
                            <h3>ORGANIC APPLES</h3>
                            <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam porttitor mauris sit amet orci.
                                Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.</p>
                        </div>
                        <div class="our_3">
                            <i class="fa fa-dribbble"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/10.jpg" alt="abc" class="img_responsive"></a>
                            <h3>FARMFRESH EGGS</h3>
                            <p>Donec nec justo eget felis facilisis ferme ntum. Aliquam porttitor mauris sit amet orci.
                                Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.</p>
                        </div>
                        <div class="our_3">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="facts">
        <div class="container">
            <div class="row">
                <div class="facts_3">
                    <h3>All News Around Us</h3>
                    <h2><a href="#">Our</a> Blog</h2>
                </div>
                <div class="facts_1 clearfix">
                    <div class="col-sm-4">
                        <div class="facts_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/11.jpg" alt="abc" class="img-responsive"></a>
                            <h3>Gallery With Images</h3>
                            <ul>
                                <li class="date">June 7, 2014</li>
                                <li>!</li>
                                <li>Sergey Kosenko</li>
                            </ul>
                            <p>Over the course of my career, I have had the opportunity to lead various Web design and development teams, including</p>
                            <a href="#" class="button_1">More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="facts_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/12.jpg" alt="abc" class="img-responsive"></a>
                            <h3>Fullwidth Image Post</h3>
                            <ul>
                                <li class="date">June 7, 2014</li>
                                <li>!</li>
                                <li>Sergey Kosenko</li>
                            </ul>
                            <p>Over the course of my career, I have had the opportunity to lead various Web design and development teams, including</p>
                            <a href="#" class="button_1">More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="facts_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/13.jpg" alt="abc" class="img-responsive"></a>
                            <h3>Beautiful new dress. Sale!</h3>
                            <ul>
                                <li class="date">June 7, 2014</li>
                                <li>!</li>
                                <li>Sergey Kosenko</li>
                            </ul>
                            <p>Over the course of my career, I have had the opportunity to lead various Web design and development teams, including</p>
                            <a href="#" class="button_1">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="place">
        <div class="place_main clearfix">
            <div class="container">
                <div class="row">
                    <div class="place_1">
                        <h4>Our Volunteers</h4>
                        <h2>Join Our Team</h2>
                        <p>Kasd gubergre sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,<br> consetetur sadipscing elitr, sed diam nonumy.</p>
                        <a href="#" class="button_1">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="request">
        <div class="container">
            <div class="row">
                <div class="request_1 clearfix">
                    <div class="col-sm-3">
                        <div class="request_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/15.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                        <div class="request_3">
                            <h3>Sed Augue</h3>
                            <p>conubia</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="request_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/16.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                        <div class="request_3">
                            <h3>Lorem Ipsum</h3>
                            <p>cursus</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="request_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/17.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                        <div class="request_3">
                            <h3>Integer</h3>
                            <p>lacinia</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="request_2">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/18.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                        <div class="request_3">
                            <h3>Eget Nulla</h3>
                            <p>mauris</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plant">
        <div class="plant_1 clearfix">
            <div class="col-sm-6 space_all">
                <div class="plant_2 clearfix">
                    <div class="col-sm-6 space_all">
                        <div class="plant_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/f1.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 space_all">
                        <div class="plant_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/f2.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                    </div>
                </div>
                <div class="plant_2 clearfix">
                    <div class="col-sm-6 space_all">
                        <div class="plant_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/f4.jpg" alt="abc" class="img_responsive"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 space_all">
                        <div class="plant_3">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/g1.jpg" alt="abc" class="img_responsive" height="223"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 space_all">
                <div class="plant_4 clearfix">
                    <div class="col-sm-8 space_all">
                        <div class="plant_5">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/ex1.jpg" alt="abc" class="img_responsive" height="444"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 space_all">
                        <div class="plant_5">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/f6.jpg" alt="abc" class="img_responsive" height="224"></a>
                        </div>
                        <div class="plant_5">
                            <a href="#"><img src="{{asset('/')}}front/assets/img/fish2.jpg" alt="abc" class="img_responsive" height="220"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 @endsection
