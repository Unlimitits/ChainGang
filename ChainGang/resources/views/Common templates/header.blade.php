

{{--<nav class="navbar navbar-expand-md navbar-light bg-light">--}}
    {{--<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">--}}
        {{--<a href="{{ route('home') }}">--}}
            {{--<img class="navbar-brand" src="{{ asset('img/Logo/Fietsenwinkel-logo1.png') }}">--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">--}}
        {{--<ul class="navbar-nav ml-auto">--}}
            {{--<li class="nav-item padding-nav">--}}

                {{--<a class="nav-link kleur-nav" href="{{ route('home') }}">Home</a>--}}

            {{--</li>--}}
            {{--<li class="nav-item padding-nav">--}}
                {{--<a class="nav-link kleur-nav" href="{{route('categoriepagina')}}">Producten</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item padding-nav">--}}
                {{--<a class="nav-link kleur-nav" href="{{ route('contact') }}">Contact</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item padding-nav">--}}
                {{--<a class="nav-link kleur-nav" href="#">Inloggen</a>--}}
            {{--</li>--}}



            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a class="nav-link kleur-nav" href="{{ route('login') }}">Inloggen</a>--}}

                        {{--@if (Route::has('register'))--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}


            {{--<li class="nav-item padding-nav">--}}
                {{--<a class="nav-link kleur-nav" href="{{ route('winkelwagen') }}"><i class="fas fa-shopping-cart"></i></a>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}


<!--Navbar-->
<nav class="navbar navbar-light light-blue lighten-4">

    <!-- Navbar brand -->
    <a href="{{ route('home') }}">
        <img class="navbar-brand" src="{{ asset('img/Logo/Fietsenwinkel-logo1.png') }}">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                    class="fas fa-bars fa-1x"></i></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            {{--<li class="nav-item active">--}}
            {{--<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{route('categoriepagina')}}">Producten</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Inloggen</a>--}}
            {{--</li>--}}



            @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                        {{--<a href="{{ url('/home') }}">Home</a>--}}


                        <div class="btn-group dropdownMarginStyle">
                            <button type="button" class="btn kleur-nav dropdown-toggle dropdownColor dropdownMargin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->user_gebruikersnaam }} <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">


                                {{--Moet nog gelinkt worden naar de profiel pagina--}}
                                <a class="dropdown-item" href="{{route('profiel')}}">
                                    Profiel pagina
                                </a>



                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>




                            </div>
                        </div>

                    @else
                        <a class="nav-link kleur-nav" href="{{ route('login') }}">Inloggen</a>
                    @endauth
                </div>
            @endif







            <li class="nav-item">
                <a class="nav-link" href="{{ route('winkelwagen') }}">Winkelwagen <i class="fas fa-shopping-cart"></i></a>
            </li>

        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

