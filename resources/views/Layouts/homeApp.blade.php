<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Pets Nest' }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')


</head>

<body @section('body-class')
      class="main-body"
        @show>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-web.png') }}" alt="logo" style="width:90px;height:60px;">
                </a>
            </ul>

            <!-- drop down menu -->
            <ul class="nav navbar-nav" style>
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pets categories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Dog</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="#">Cat</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Fish</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Birds</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pet's services <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Grooming services</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="#">Veterinary services</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#">Delivery services</a>
                </li>
                <li>
                    <a href="#">Contact US</a>
                </li>
            </ul>




            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li> <a href="#" ></a>test</li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-dashboard" aria-hidden="true"></i> chiwawa
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
        <div class="colorgraph">
    </div>
</nav>


@yield('content')

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@yield('js')

</body>
</html>
