<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('page.welcome') }}">
                <img src="{{ asset('img/logo-web.png') }}" alt="logo" style="height: 30px;">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-paw" aria-hidden="true"></i> Pets <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'dogs']) }}">
                                Dogs
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'cats']) }}">
                                Cats
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'fish']) }}">
                                Fish
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'birds']) }}">
                                Birds
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cutlery" aria-hidden="true"></i> Pets' food <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'dogs-food']) }}">
                                Dogs' food
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'cats-food']) }}">
                                Cats' food
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'fish-food']) }}">
                                Fish' food
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'birds-food']) }}">
                                Birds' food
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cogs" aria-hidden="true"></i> Accessories <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'dogs-accessories']) }}">
                                Dogs' accessories
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'cats-accessories']) }}">
                                Cats' accessories
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'fish-accessories']) }}">
                                Fish' accessories
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('categories.show', ['category' => 'birds-accessories']) }}">
                                Birds' accessories
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench" aria-hidden="true"></i> Services <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('getGroomingForm') }}">
                                Grooming services
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('getVeterinaryForm') }}">
                                Veterinary services
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact-us.create') }}">
                        <i class="fa fa-envelope" aria-hidden="true"></i> Contact US
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}">
                            <i class="fa fa-power-off" aria-hidden="true"></i> Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">
                            <i class="fa fa-edit" aria-hidden="true"></i> Register
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>


                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->
    <hr class="colorgraph"/>
</nav>
<!--/.nav-->

{{--
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
                    <img src="{{ asset('img/logo-web.png') }}" alt="logo" style="width:80px;height:50px;">
                </a>
            </ul>

            <!-- drop down menu -->
            <ul class="nav navbar-nav" style="margin-left:10px">
                <li class="active">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pets categories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('dog.index') }}">Dog</a>
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
                    <li><a href="#"></a>test</li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"></a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                --}}
{{--<a href="{{ route('profile.show', ['user' => Auth::user()->id]) }}">
                                    <i class="fa fa-user" aria-hidden="true"></i> My Profile
                                </a>--}}{{--

                            </li>
                            <li class="divider"></li>
                            --}}
{{--<li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>--}}{{--

                        </ul>
                    </li>
                @endif
            </ul>

        </div>
        <div class="colorgraph">
        </div>
    </div>
</nav>--}}
