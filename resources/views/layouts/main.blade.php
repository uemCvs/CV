<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        @yield('title')

    </title>
    @section('links')
        <link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
        <link href="{{URL::asset('Start/css/meuStyle.css')}} " rel="stylesheet">
        <link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
        <script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

    @show


</head>
<body>


@section('header')
    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">UEM CV'S</a>
            </div>
            <div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cutlery"></span> Restaurantes</a></li>
                </ul>
            </div>
        </div>
    </nav>

@show

@yield('body')

@yield('script')

@section('footer')
<div class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    Copyright &copy; UEM CV'S 2015
                </div>
            </div>
        </div>
    </div>
</div>
@show
</body>
</html>