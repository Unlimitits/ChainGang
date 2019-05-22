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
    </div>

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
                            <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
                <li><a class="kleur-nav" href="#">Damesfietsen</a></li>
                <li><a class="kleur-nav" href="#">Herenfietsen</a></li>
                <li><a class="kleur-nav" href="#">Kinderfietsen</a></li>
            </ul>
        </div>
    </div>
</div>




<div class="row">
    <div class="col">
        <h1 class="categorie-h1">Damesfietsen (100)</h1>
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
            <li class="list-group-item">Damesfietsen</li>
            <li class="list-group-item">Herenfietsen</li>
            <li class="list-group-item">Kinderfietsen</li>
        </ul>
    </div>

    <!-- Vanaf hier komen database fietsen -->
    @foreach ($fietsen as $fiets)
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card" style="width: 18rem;">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" height="200" width="288">
                <div class="card-body">
                    <h5 class="card-title">{{$fiets->fiets_naam}}</h5>
                    <p class="card-text">S{{$fiets->fiets_omschrijving}}</p>

                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col spacer-height">
            <div class="spacer">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('Common templates.footer')
        </div>
    </div>
{{$fietsen->links()}}

</body>
</html>