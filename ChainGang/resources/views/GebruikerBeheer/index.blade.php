

{{--@include('Layout.layout')--}}

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/stylebeheer.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="overflow-x: hidden;">

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
                        <button style="background-color: black; margin-bottom: 10px;" type="button" class="btn btn-dark"><a href="{{route('medewerker.create')}}">Toevoegen</a> </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="row col-2">
                <ul>
                    <li>Dashboard</li>
                    <li><a href="{{route('fiets-beheer.index')}}">Fietsen</a></li>
                    <li><a href="{{route('medewerker.index')}}">Gebruikers</a></li>
                    <li><a href="{{route('klant.index')}}">Klanten</a></li>
                    <li>Bestellingen</li>
                    <li><a href="{{route('review-beheer.index')}}">Reviews</a></li>
                    <li><a href="{{route('aanbieding.index')}}">Aanbiedingen</a></li>
                    <li><a href="{{route('nieuwsbrief.index')}}">Nieuwsbrieven</a></li>
                </ul>
            </div>
            <div class="col-10">
                <h5 class="dashboard-h5klant">Gebruikersbeheer</h5>
                <table class="table">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email
                        <th scope="col">Telefoon</th>
                        {{--<th scope="col">Gebruikersnaam</th>--}}
                        <th scope="col">Aanpassen</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($medewerker as  $data)
                    <tr>
                        <td><a>{{$data->gebruiker_id}}</a></td>
                    <td><a>{{$data->gebruiker_voornaam}}</a></td>
                    <td>{{$data->gebruiker_achternaam}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->gebruiker_telefoonnummer}}</td>
                    {{--<td>{{$data->gebruiker_gebruikersnaam}}</td>--}}
                    {{--<td>{{$data->password}}</td>--}}


                    {{--<td>--}}
                    {{--<form method="post" action="{{route('medewerker.show', [$data->gebruiker_id])}}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--@method('GET')--}}
                    {{--<button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>--}}
                    {{--</form>--}}

                    {{--</td>--}}

                    <td>
                    <form method="post" action="{{route('medewerker.edit', [$data->gebruiker_id])}}">
                    {{ csrf_field() }}
                    @method('GET')
                    <button type="submit" value="Edit" class="btn btn-outline-dark">Aanpassen</button>
                    </form>

                    </td>


                    <td>
                    <form method="post" action="{{route('medewerker.destroy', [$data->gebruiker_id])}}">
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




<!-- 


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
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
            {{--<th style="color: #ffffff" scope="col"></th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($medewerker as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->gebruiker_voornaam}}</a></td>--}}
                {{--<td>{{$data->gebruiker_achternaam}}</td>--}}
                {{--<td>{{$data->email}}</td>--}}
                {{--<td>{{$data->gebruiker_telefoonnummer}}</td>--}}
                {{--<td>{{$data->gebruiker_gebruikersnaam}}</td>--}}
                {{--<td>{{$data->password}}</td>--}}


                {{--<td>--}}
                    {{--<form method="post" action="{{route('medewerker.show', [$data->gebruiker_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}

                {{--<td>--}}
                    {{--<form method="post" action="{{route('medewerker.edit', [$data->gebruiker_id])}}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@method('GET')--}}
                        {{--<button type="submit" value="Edit" class="btn btn-outline-dark">{{__('user.Edit')}}</button>--}}
                    {{--</form>--}}

                {{--</td>--}}


                {{--<td>--}}
                    {{--<form method="post" action="{{route('medewerker.destroy', [$data->gebruiker_id])}}">--}}
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
 -->
