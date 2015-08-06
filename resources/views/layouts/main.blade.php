<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        @yield('title')

    </title>
    @section('links')
        <link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
        <link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
        {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    @show


</head>
<body>


@section('header')
    <nav class="navbar navbar-default ideia ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">UEM CV's</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/home') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Registar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

@show



@yield('script')

@yield('body')

@section('footer')

{{--<div class="text-center">
    <div class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    Copyright &copy; UEM CV'S 2015
                </div>
            </div>
        </div>
    </div>
</div>--}}
@show
</body>
</html>