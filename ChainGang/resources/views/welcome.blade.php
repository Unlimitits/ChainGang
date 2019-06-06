@include('Layout.layout')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >--}}


</head>


<body style="overflow-x: hidden;">
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
                            <a class="welcomeLinkFiets" href="/categoriepagina">
                            <img src="{{ asset('img/Banners/Banner_Actie.jpg') }}" class="d-block w-100" alt="...">
                            </a>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a class="welcomeLinkFiets" href="/categoriepagina">
                            <img src="{{ asset('img/Banners/Banner_Fiets.jpg') }}" class="d-block w-100" alt="...">
                            </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="colorWhite">Nieuw!</h5>
                                <p class="colorWhite">Klik hier voor onze nieuwe fietsen!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a class="welcomeLinkFiets" href="/categoriepagina">
                            <img src="{{ asset('img/Banners/Banner_Actie2.png') }}" class="d-block w-100" alt="...">
                            </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="colorWhite">Actie!</h5>
                                <p class="colorWhite">Klik hier voor onze huidige acties!</p>
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


<div class="row card-row">
    <div class="col">
        <a class="welcomeLinkFiets" href="{{route('filterFrameType', ['frametype'=>'Vrouwen'])}}">
            <div class="card" style="width: 20rem;">
                <div class="card-img-caption">
                    <p class="card-text">Damesfietsen</p>
                    <img class="card-img-top img-fluid" src="{{ asset('img/Dames Fietsen/dames-fiets 10.38.32.png') }}" alt="Card image cap">
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <div class="card" style="width: 20rem;">
            <a class="welcomeLinkFiets" href="{{route('filterFrameType', ['frametype'=>'Mannen'])}}">
            <div class="card-img-caption">
                <p class="card-text">Herenfietsen</p>
                <img class="card-img-top" src="{{ asset('img/Heren Fietsen/heren-fiets.png') }}" alt="Card image cap">
            </div>
            </a>
        </div>
    </div>

    <div class="col">
        <a class="welcomeLinkFiets" href="{{route('filterFrameType', ['frametype'=>'Kinderen'])}}">
            <div class="card" style="width: 20rem;">
                <div class="card-img-caption">
                    <p class="card-text">Kinderfietsen</p>
                    <img class="card-img-top" src="{{ asset('img/Kinder Fietsen/kinder-fiets.png') }}" alt="Card image cap">

                </div>
            </div>
        </a>
    </div>
</div>
    @if($salefietsen->count() > 0)
<div class="row roze-kleur">
    <div class="col">
        <h1 class="h1-margin">Sale</h1>
    </div>

</div>



<div class="row roze-kleur">

    @foreach($salefietsen as $salefiets)
        <div class=".col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a class="welcomeLinkFiets" href="fiets/{{$salefiets->fiets_id}}">
                <div class="card sale_card" style="width: 18rem;">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($salefiets->fiets_foto)) }}" height="200" width="286">
                    <div class="card-body">
                        <h5 class="card-title">{{$salefiets->fiets_naam}}</h5>
                        <p class="card-text">S{{$salefiets->fiets_omschrijving}}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endif
<!-- <div class="row">
    <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->

    <div class="row">
        <div class="col-12"><h3 class="colorWhite">Laatste Reviews</h3></div>
        @foreach ($reviews as $review)
            <div class="col-4"><h5 class="colorWhite">{{$review->review_id}}</h5>
                <p class="colorWhite">{{$review->review_omschrijving}}</p>
            </div>
        @endforeach
    </div>
<div class="row roze-kleur">
    <div class="col">
        <h1 class="h1-margin">Nieuw</h1>
    </div>
</div>

<div class="row roze-kleur">

    @foreach ($fietsen as $fiets)
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <a class="welcomeLinkFiets" href="fiets/{{$fiets->fiets_id}}">
                <div class="card" style="width: 18rem;">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" height="200" width="288">
                    <div class="card-body">
                        <h5 class="card-title">{{$fiets->fiets_naam}}</h5>
                        <p class="card-text">{{$fiets->fiets_omschrijving}}</p>

                    </div>
                </div>
            </a>
        </div>

    @endforeach
</div>

<!-- <div class="row">
    <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Recensie.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Recensie.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Recensie.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->


<div class="row">
    <div class="col">
        <div id="nieuwsbrief" class="my-auto">
            <form id="nieuwsbrief-form" >
                <div class="form-group">
                    <h1>Abonneer op onze nieuwsbrief!</h1>
                    <input type="email" class="form-control" placeholder="Email" id="email_form">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        @include('Common templates.footer')
    </div>
</div>



</body>

</html>