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

                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="row col-2">
                <ul>
                    <li>Dashboard</li>
                    <li>Fietsen</li>
                    <li>Gebruikers</li>
                    <li>Klanten</li>
                    <li>Bestellingen</li>
                    <li>Reviews</li>
                    <li>Aanbiedingen</li>
                    <li>Nieuwsbrief</li>
                </ul>
            </div>
            <div class="col-10">
                <h5 class="dashboard-h5klant">Klantenbeheer</h5>
                <table class="table">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email
                        <th scope="col">Telefoon</th>
                        <th scope="col">Straat</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Straat</th>
                        <th scope="col">Aanpassen</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($klant as  $data)
                    <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->user_voornaam}}</td>
                    <td>{{$data->user_achternaam}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->user_telefoonnummer}}</td>
                    <td>{{$data->user_straat}}</td>
                    <td>{{$data->user_postcode}}</td>
                    <td>{{$data->user_plaats}}</td>


                    <td>
                    <form method="post" action="{{route('klant.show', [$data->id])}}">
                    {{ csrf_field() }}
                    @method('GET')
                    <button type="submit" value="View" class="btn btn-outline-dark">{{__('Aanpassen')}}</button>
                    </form>

                    </td>


                    <td>
                    <form method="post" action="{{route('klant.destroy', [$data->id])}}">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" value="Delete"
                    class="btn btn-outline-dark">{{__('Verwijderen')}}</button>
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
            {{--<th style="color: #ffffff" scope="col">{{__('user.Email')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Email')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($klant as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->user_gebruikersnaam}}</a></td>--}}
                {{--<td>{{$data->email}}</td>--}}
                {{--<td>{{$data->user_voornaam}}</td>--}}
                {{--<td>{{$data->user_achternaam}}</td>--}}
                {{--<td>{{$data->user_telefoonnummer}}</td>--}}
                {{--<td>{{$data->user_straat}}</td>--}}
                {{--<td>{{$data->user_postcode}}</td>--}}
                {{--<td>{{$data->user_plaats}}</td>--}}


                {{--<td>--}}
                    {{--<form method="post" action="{{route('klant.show', [$data->id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}


                {{--<td>--}}
                    {{--<form method="post" action="{{route('klant.destroy', [$data->id])}}">--}}
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









