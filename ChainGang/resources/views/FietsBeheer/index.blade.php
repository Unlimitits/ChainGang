{{--@include('Layout.layout')--}}


<html>
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
                        <button style="background-color: black; margin-bottom: 10px;" type="button" class="btn btn-dark"><a href="{{route('fiets-beheer.create')}}">Toevoegen</a> </button>
                    </div>
                </div>
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
                <h5 class="dashboard-h5klant">Fiets beheer</h5>
                <table class="table">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">Fiets naam</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Type</th>
                        <th scope="col">Motorpositie</th>
                        <th scope="col">Kleur</th>
                        <th scope="col">Frametype</th>
                        <th scope="col">Jaar</th>
                        <th scope="col">Motortechniek</th>
                        <th scope="col">Aanpassen</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        @foreach($fiets as  $data)
                        <tr>
                        <td>{{$data->fiets_naam}}</td>
                        <td>{{$data->fiets_merk}}</td>
                        <td>{{$data->fiets_serie}}</td>
                        <td>{{$data->fiets_type}}</td>
                        <td>{{$data->fiets_motorpositie}}</td>
                        <td>{{$data->fiets_kleur}}</td>
                        <td>{{$data->fiets_frameType}}</td>
                        <td>{{$data->fiets_jaar}}</td>
                        <td>{{$data->fiets_motortechniek}}</td>

                        {{--<td>--}}
                        {{--<form method="post" action="{{route('fiets-beheer.show', [$data->fiets_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>--}}
                        {{--</form>--}}

                        {{--</td>--}}

                        <td>
                        <form method="post" action="{{route('fiets-beheer.edit', [$data->fiets_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="Edit" class="btn btn-outline-dark">Aanpassen</button>
                        </form>

                        </td>


                        <td>
                        <form method="post" action="{{route('fiets-beheer.destroy', [$data->fiets_id])}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" value="Delete"
                        class="btn btn-outline-dark">Verwijderen</button>
                        </form>

                        </td>
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



































{{--<div class="container">--}}
    {{--<table class="table">--}}
        {{--<thead class="thead-dark">--}}
        {{--<tr style="background-color: #000000">--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
        {{--</tr>--}}
        {{--</thead>--}}

        {{--<tbody>--}}
        {{--@foreach($fiets as  $data)--}}

            {{--<tr>--}}
                {{--<td>{{$data->fiets_naam}}</td>--}}
                {{--<td>{{$data->fiets_merk}}</td>--}}
                {{--<td>{{$data->fiets_serie}}</td>--}}
                {{--<td>{{$data->fiets_type}}</td>--}}
                {{--<td>{{$data->fiets_motorpositie}}</td>--}}
                {{--<td>{{$data->fiets_kleur}}</td>--}}
                {{--<td>{{$data->fiets_frameType}}</td>--}}
                {{--<td>{{$data->fiets_jaar}}</td>--}}
                {{--<td>{{$data->fiets_motortechniek}}</td>--}}

                {{--<td>--}}
                    {{--<form method="post" action="{{route('fiets-beheer.show', [$data->fiets_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}

                {{--<td>--}}
                    {{--<form method="post" action="{{route('fiets-beheer.edit', [$data->fiets_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="Edit" class="btn btn-outline-dark">{{__('user.Edit')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}


                {{--<td>--}}
                    {{--<form method="post" action="{{route('fiets-beheer.destroy', [$data->fiets_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('DELETE')--}}
                        {{--<button type="submit" value="Delete"--}}
                                {{--class="btn btn-outline-dark">{{__('user.Delete')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</div>--}}