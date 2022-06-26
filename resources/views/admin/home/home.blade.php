@extends('master.admin.master')

@section('body')

    <section class="bg-white mb-5 my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 my-5">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h1 class="text-white text-center">Shop Now</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h1 class="text-center text-success">WelCome To FishBang</h1></div>
                        <div class="card-body">
                            <img src="{{asset('/')}}admin/assets/images/homeFish.jpg" alt="" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-5">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h1 class="text-white">Enjoy Quality Aqua Fish</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
