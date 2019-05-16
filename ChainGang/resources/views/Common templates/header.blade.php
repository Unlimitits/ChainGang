
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <img class="navbar-brand" src="{{ asset('img/Logo/Fietsenwinkel-logo1.png') }}">
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item padding-nav">
                <a class="nav-link kleur-nav" href="#">Home</a>
            </li>
            <li class="nav-item padding-nav">
                <a class="nav-link kleur-nav" href="#">Producten</a>
            </li>
            <li class="nav-item padding-nav">
                <a class="nav-link kleur-nav" href="#">Contact</a>
            </li>
            {{--<li class="nav-item padding-nav">--}}
                {{--<a class="nav-link kleur-nav" href="#">Inloggen</a>--}}
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


            <li class="nav-item padding-nav">
                <a class="nav-link kleur-nav" href="#"><i class="fas fa-shopping-cart"></i></a>
            </li>

        </ul>
    </div>
</nav>

