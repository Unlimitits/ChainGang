<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include('Layout.layout')
</head>


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
    </div>>




<div class="row">
    <div class="col-1"></div>
    <div class="col-1">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                Frame type
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($arrayFrameTypeUnique as $fietsFrameType)
                    <li><a class="list-group-item" name="link1" href="{{route('filterFrameType', ['frametype'=>$fietsFrameType])}}">{{$fietsFrameType}}</a></li>
                @endforeach
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col">
        <h1 class="h1-margin">fietsen</h1>
    </div>
</div>



<div class="row">
    <div class=" col-xl-3">
        <ul class="list-group">

            <li class="card-title">Frame Type:</li>

            @foreach($arrayFrameTypeUnique as $fietsFrameType)
                <li><a class="list-group-item" name="link1" href="{{route('filterFrameType', ['frametype'=>$fietsFrameType])}}">{{$fietsFrameType}}</a></li>
            @endforeach

            <br>
            {{--{{dd($fiets)}}--}}


            <li class="card-title">Merk:</li>
            @foreach($arrayBrandUnique as $fietsMerk)
            <li><a class="list-group-item" name="link1" href="{{route('filterBrand', ['brand'=>$fietsMerk])}}">{{$fietsMerk}}</a></li>
            @endforeach

            <br>
            {{--{{dd($fiets)}}--}}


            <li class="card-title">Prijs:</li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'0'])}}">€ 0 - 999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'1000'])}}">€ 1000 - 1999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'2000'])}}">€ 2000 - 2999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'3000'])}}">€ 3000 - 3999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'4000'])}}">€ 4000 - 4999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'5000'])}}">€ 5000 - 5999 </a></li>
            <li><a class="list-group-item" name="link1" href="{{route('filterPrice', ['priceMin'=>'6000'])}}">€ 6000 - 6999 </a></li>
        </ul>
    </div>

            @foreach ($fietsen as $fiets)
                <a  class="welcomeLinkFiets" href="fiets/{{$fiets->fiets_id}}">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" height="200" width="288">
                            <div class="card-body">
                                <h5 class="card-title">{{$fiets->fiets_naam}}</h5>
                                <p class="card-text">{{$fiets->fiets_omschrijving}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach


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
</div>

</body>
</html>