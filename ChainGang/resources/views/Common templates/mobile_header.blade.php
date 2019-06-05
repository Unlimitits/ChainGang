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
                <div class="top-right links">
                    @auth
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    @else
                        <a class="nav-link kleur-nav" href="{{ route('login') }}">Inloggen</a>

                        {{--@if (Route::has('register'))--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
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