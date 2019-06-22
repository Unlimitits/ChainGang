<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review-beheer</title>

    <link href="{{ asset('css/stylebeheer.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                            <img class="liMarginFiets" src="{{ asset('img/Beheer/user.png') }}">

                        </div>
                        <div class="col-8">
                            <li class="LineheightStyle">{{Auth::user()->user_gebruikersnaam}}</li>
                        </div>
                    </div>


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
                <h5 class="dashboard-h5klant">Reviewbeheer</h5>
                <table class="table">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">#</th>
                        {{--<th scope="col">Foto</th>--}}
                        {{--<th scope="col">Titel</th>--}}
                        <th scope="col">Omschrijving</th>
                        <th scope="col">Waardering</th>
                        <th scope="col">Verwijderen</th>
                        {{--<th scope="col">Goedkeuren</th>--}}
                        {{--<th scope="col">Afkeuren</th>--}}
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($review as  $data)
                        <tr>
                            <td><a>{{$data->review_id}}</a></td>
                            <td><a>{{$data->review_omschrijving}}</a></td>
                            <td>{{$data->review_waardering}}</td>

                            <td>
                                <form method="post" action="{{route('review-beheer.destroy', [$data->review_id])}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" value="Delete"
                                            class="btn btn-outline-dark">{{('user.Delete')}}</button>
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
            {{--<th style="color: #ffffff" scope="col">{{__('user.Lastname')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($review as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->review_omschrijving}}</a></td>--}}
                {{--<td>{{$data->review_waardering}}</td>--}}

                {{--<td>--}}
                    {{--<form method="post" action="{{route('review-beheer.destroy', [$data->id])}}">--}}
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









{{--<table style="width:100%" border="1">--}}
{{--<tr>--}}
{{--<th>Id</th>--}}
{{--<th>First name</th>--}}
{{--<th>Prefix</th>--}}
{{--<th>Last name</th>--}}
{{--<th>Email</th>--}}
{{--<th>Department</th>--}}
{{--<th>Edit</th>--}}
{{--<th>Delete</th>--}}
{{--</tr>--}}

{{--</table>--}}

