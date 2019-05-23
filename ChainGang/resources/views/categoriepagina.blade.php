<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include('Layout.layout')
</head>

<body>
<div class="container-fluid">

    <div class="row header-web">
        <div class="col">
            @include('Common templates.header')
        </div>
    </div>l

    <div class="row header-mobile">
        <div class="col">
            @include('Common templates.mobile_header')
        </div>
    </div>


    <div class="row">
        <div class="col">

            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/Banners/banner.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="colorWhite">Test deze fiets</h5>
                                <p class="colorWhite">Maak een proefrit op onze nieuwe fietsen</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Banners/lukassen_home.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="colorWhite">Kom nu naar onze winkel</h5>
                                <p class="colorWhite">Ons team staat met een kopje koffie klaar</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/Banners/slider-alexander1.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="colorWhite">Nieuw binnen</h5>
                                <p class="colorWhite">Er zijn nieuwe cortina fietsen binnen gekomen!</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col spacer-height">
        <div class="spacer">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-1">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Frame type
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a class="kleur-nav" href="/categoriepagina?type=dames">Damesfietsen</a></li>
                <li><a class="kleur-nav" href="/categoriepagina?type=mannen">Herenfietsen</a></li>
                <li><a class="kleur-nav" href=/categoriepagina?type=kinderen>Kinderfietsen</a></li>
            </ul>
        </div>
    </div>
</div>




<div class="row">
    <div class="col">
        <h1 class="categorie-h1">fietsen</h1>
    </div>
</div>

<div class="row">
    <div class="col spacer-height">
        <div class="spacer">
        </div>
    </div>
</div>

<div class="row">
    <div class=" col-xl-3">
        <ul class="list-group">
            <li><a class="kleur-nav" name="link1" href="/categoriepagina?type=dames">Damesfietsen</a></li>
            <li><a class="kleur-nav" href="/categoriepagina?type=mannen">Herenfietsen</a></li>
            <li><a class="kleur-nav" href="/categoriepagina?type=kinderen">Kinderfietsen</a></li>
        </ul>
    </div>




    <!-- Vanaf hier komen database fietsen -->
    @php
        if(isset($_GET['type']))
        {
            $link = $_GET['type'];
        }
        else
        {
            $link = 'default';
        }
    @endphp

    @if(isset($link))


        @if($link == 'dames')
            @foreach ($damesfietsen as $damesfiets)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <a class="categoriepaginaA" href="/fiets/{{$damesfiets->fiets_id}}">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($damesfiets->fiets_foto)) }}" height="200" width="288">
                            <div class="card-body">
                                <h5 class="card-title colorDonkerblauw">{{$damesfiets->fiets_naam}}</h5>
                                <p class="card-text colorDonkerblauw">S{{$damesfiets->fiets_omschrijving}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @elseif($link == 'mannen')
            @foreach ($herenfietsen as $mannenfiets)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <a class="categoriepaginaA" href="/fiets/{{$mannenfiets->fiets_id}}">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($mannenfiets->fiets_foto)) }}" height="200" width="288">
                            <div class="card-body">
                                <h5 class="card-title ">{{$mannenfiets->fiets_naam}}</h5>
                                <p class="card-text">S{{$mannenfiets->fiets_omschrijving}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @elseif($link == 'kinderen')
            @foreach ($kinderfietsen as $kinderfiets)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <a class="categoriepaginaA" href="/fiets/{{$kinderfiets->fiets_id}}">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($kinderfiets->fiets_foto)) }}" height="200" width="288">
                            <div class="card-body">
                                <h5 class="card-title colorDonkerblauw">{{$kinderfiets->fiets_naam}}</h5>
                                <p class="card-text colorDonkerblauw">S{{$kinderfiets->fiets_omschrijving}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @elseif($link == 'default')
            @foreach ($fietsen as $fiets)
                <a href="/fiets/{{$fiets->fiets_id}}">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" height="200" width="288">
                            <div class="card-body">
                                <h5 class="card-title">{{$fiets->fiets_naam}}</h5>
                                <p class="card-text">S{{$fiets->fiets_omschrijving}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    @endif









































<!-- Vanaf hier komen database fietsen -->
    {{--@foreach ($fietsen as $fiets)--}}
    {{--<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">--}}
    {{--<a href="/fiets/{{$fiets->fiets_id}}">--}}
    {{--<div class="card" style="width: 18rem;">--}}
    {{--<img src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" height="200" width="288">--}}
    {{--<div class="card-body">--}}
    {{--<h5 class="card-title">{{$fiets->fiets_naam}}</h5>--}}
    {{--<p class="card-text">S{{$fiets->fiets_omschrijving}}</p>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    <div class="row">
        <div class="col spacer-height">
            <div class="spacer">
            </div>
        </div>
    </div>

    <div class="row catogoriePaginationStyle">
        <div class="col-12">
            {{$fietsen->links()}}
        </div>
    </div>

    <div class="row categoriePaginaStyle">
        <div class="col-12">
            @include('Common templates.footer')
        </div>
    </div>






</div>

</body>
</html>