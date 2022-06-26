<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Summernote css -->
    <link href="{{asset('/')}}admin/assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">FISHBANG</a>

        <ul class="navbar-nav">
            <li><a href="{{route('dashboard')}}" class="nav-link">HOME</a></li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle hover" id="navdrop" data-bs-toggle="dropdown" aria-expanded="false" role="button">ADD ITEM</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navdrop">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Add Category</a></li>
                    <li><a href="{{route('subCategory.add')}}" class="dropdown-item">Add SubCategory</a></li>
                    <li><a href="{{route('brand.add')}}" class="dropdown-item">Add Brand</a></li>
                    <li><a href="{{route('unit.add')}}" class="dropdown-item">Add Unit</a></li>
                    <hr/>
                    <li><a href="{{route('product.add')}}" class="dropdown-item">Add Product</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle hover" id="navdrop" data-bs-toggle="dropdown" aria-expanded="false" role="button">MANAGE ITEM</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navdrop">
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Manage Category</a></li>
                    <li><a href="{{route('subCategory.manage')}}" class="dropdown-item">Manage SubCategory</a></li>
                    <li><a href="{{route('brand.manage')}}" class="dropdown-item">Manage Brand</a></li>
                    <li><a href="{{route('unit.manage')}}" class="dropdown-item">Manage Unit</a></li><hr/>
                    <li><a href="{{route('product.manage')}}" class="dropdown-item">Manage Product</a></li>
                    <hr/>
                    <li><a href="{{route('admin.order-manage')}}" class="dropdown-item">Manage Order</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle hover" id="navdrop" data-bs-toggle="dropdown" aria-expanded="false" role="button">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navdrop">
                    <li><a href="" class="dropdown-item">My Profile</a></li>
                    <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">User Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </li>
                    <li><a href="" class="dropdown-item">User Registration</a></li>
                </ul>
            </li>
{{--            <li><a href="" class="nav-link">MY SHOPPING</a></li>--}}
{{--            <li><a href="" class="nav-link">Create Order</a></li>--}}
        </ul>

    </div>
</nav>
   @yield('body')

<script src="{{asset('/')}}admin/assets/js/bootstrap.js"></script>
<script src="{{asset('/')}}admin/assets/js/jquery-3.6.0.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<!-- Summernote js -->
<script src="{{asset('/')}}admin/assets/libs/summernote/summernote-bs4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

    function getProductSubcategory(id)
    {
        $.ajax({
            method: "GET",
            url: "{{url('/get-sub-category-by-category-id')}}",
            data: {id: id},
            dataType: "JSON",
            success: function (response) {
                console.log(response);

                var subCategoryId = $('#subCategoryId');
                subCategoryId.empty();

                var option = '';
                option += '<option value=""> -- Select Product Sub Category -- </option>';
                $.each(response, function (key, value) {
                    option += '<option value=" '+value.id+' "> '+value.name+' </option>';
                });
                subCategoryId.append(option);
            }

        });
    }
</script>
</body>
</html>
