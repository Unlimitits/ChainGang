
{{--<h1>index</h1>--}}

{{--@include('Layout.layout')--}}


        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/stylebeheer.css') }}" rel="stylesheet" type="text/css" >



</head>
<body>
<div class="container-fluid">

    <div class="row header-web">
        <div class="col-4">
            <img class="dashboard-image" src="{{asset('img/Logo/Fietsenwinkel-logo1.png')}}">
        </div>
        <div class="row col-12">
            <div class="row col-2">
                <h5 class="dashboard-title">Dashboard</h5>
            </div>
            <div style="background-color: lightgrey; margin: 0;" class="row col-10">
                <div class="topnav">
                    <div class="search-container">

                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="row col-2">
                <ul>


                    <div class="row">
                        <div class="col-4">
                            <img class="liMarginFiets" src="{{ asset('img/Beheer/dashboard1.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('dashboard.index')}}">Dashboard</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMarginFiets" src="{{ asset('img/Beheer/Fiets.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('fiets-beheer.index')}}">Fietsen</a></li>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Gebruikers.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a  class="LineheightStyle" href="{{route('medewerker.index')}}">Gebruikers</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Klanten.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('klant.index')}}">Klanten</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Bestellingen.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('bestelling.index')}}">Bestellingen</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Reviews.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('review-beheer.index')}}">Reviews</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Aanbiedingen.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('aanbieding.index')}}">Aanbiedingen</a></li>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img class="liMargin" src="{{ asset('img/Beheer/Nieuwsbrief.png') }}">

                        </div>
                        <div class="col-8">
                            <li><a class="LineheightStyle" href="{{route('nieuwsbrief.index')}}">Nieuwsbrieven</a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-10">
                <h5 class="dashboard-h5klant">Bestelling beheer</h5>
                <table class="table">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Straat</th>
                        <th scope="col">Winkel kar</th>
                        <th scope="col">Rekeningnummer</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bestelling as  $data)
                        <tr>
                            <td>{{$data->bestelling_id}}</td>
                            <td>{{$data->voornaam}}</td>

                            <td>{{$data->achternaam}}</td>


                            <td>{{$data->straat}}</td>


                            <td>{{$data->cart}}</td>


                            <td>{{$data->rekeningnummer}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row col-12">
            <h6 class="dashboard-footer">Copyright 2019 - ChainGang</h6>
        </div>
    </div>
</div>









</body>
</html>

