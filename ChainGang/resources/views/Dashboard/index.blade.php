
@extends('Common templates.headertest')


        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ asset('css/stylebeheer.css') }}" rel="stylesheet" type="text/css">--}}
    {{--@include('Layout.layout')--}}
    {{--@include('Layout.layoutbeheer')--}}
    <style type="text/css">
        body {
            color: white;
        }

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 450px;
            max-width: 500px;
            min-height: 100vh;
            height: 100%;
            background-color: #1d68a7;
            opacity: 100;
        }

        ul {
            background-color: #ef939e;
            color: #3550ff91;
            text-align: left;
            float: right;
            width: 15%;
        }

        li {
            margin-left: 10%;
            margin-top: 5%;
            width: auto;
        }

        .sidebar-list {
            position: absolute;
            height: 100%;
        }

        .sidebar-list tr {
            font-size: large;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .sidebar-header {
            margin-left: 15%;
            margin-right: 25%;
            color: white;
        }

        tr, td, th, table {
            border: 0px #ef939e;
            font-size: large;
            text-align: left;
            width: auto;
            background-color: white;
            color: black;

        }

        table {
            margin-top: 5%;
        }

        .padded {
            padding: 15px;
        }

        .newUser {
            padding: 15px;
            border: 0px;
            border-bottom: solid 1px;
        }

        .author {
            font-size: small;
            text-align: left;
            border: 0px;
            border-bottom: solid 1px;
        }

        th h3 {
            text-align: center;

        }

        table {
            min-width: 100%;
            min-height: 100%;
            height: 100%;
        }

        .sidebar-table {
            width: 10%;
            text-align: center;
            background-color: #1d68a7;
        }

        .sidebar-image {
            text-align: center;
            background-color: #1d68a7;
        }

        .sidebar-content {
            padding-top: 5%;
            padding-bottom: 5%;
            color: white;
            background-color: #1d68a7;
        }

        .whitelink {
            color: white;
            background-color: #1d68a7;
        }

        .userTable table, .userTable tr, .userTable td, .userTable th {
            background-color: #3550ff91;
        }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link href="{{ asset('css/stylebeheer.css') }}" rel="stylesheet" type="text/css" >
</head>

<div class="alert alert-danger" role="alert">
   Pagina is nog in onderhoud
</div>

<body style="overflow-x: hidden;">

<div class="wrapper">
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="sidebar-header">
            <h2>Dashboard</h2>
        </div>

        <table class="sidebar-table">
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/dashboard1.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('dashboard.index')}}" class="whitelink">Dashboard</a>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Fiets.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('fiets-beheer.index')}}" class="whitelink">Fietsen</a>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Gebruikers.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('medewerker.index')}}" class="whitelink">Gebruikers</a>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Klanten.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('klant.index')}}" class="whitelink">Klanten</a>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Bestellingen.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <h3>
                            <a href="{{route('bestelling.index')}}" class="whitelink">Bestellingen</a>
                        </h3>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Reviews.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('review-beheer.index')}}" class="whitelink">Reviews</a>
                    </h3>
                </td>
            </tr>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Aanbiedingen.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('aanbieding.index')}}" class="whitelink">Aanbiedingen</a>
                    </h3>
                </td>
            <tr>
                <td class="sidebar-image">
                    <img src="{{ asset('img/Beheer/Nieuwsbrief.png') }}">
                </td>
                <td class="sidebar-content">
                    <h3>
                        <a href="{{route('nieuwsbrief.index')}}" class="whitelink">Nieuwsbrieven</a>
                    </h3>
                </td>
            </tr>
        </table>

    </div>
    <!-- Page Content -->
    <div id="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <table>
                            <tr>
                                <th><h3>Laatste Reviews</h3></th>
                            </tr>
                            <tr>
                                <td class="padded">Lorem Ipsum film ofnsum Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum , Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum

                                </td>
                            </tr>
                            <tr>
                                <td class="author">Lorem Ipsumsus</td>
                            </tr>
                            <tr>
                                <td class="padded">Lorem Ipsum film ofnsum Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum , Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum

                                </td>
                            </tr>
                            <tr>
                                <td class="author">Lorem Ipsumsus</td>
                            </tr>
                            <tr>
                                <td class="padded">Lorem Ipsum film ofnsum Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum , Lorem Ipsum film ofnsum

                                    Lorem Ipsum film ofnsum

                                </td>
                            </tr>
                            <tr>
                                <td class="author">Lorem Ipsumsus</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-6">
                        <table class="table">
                            <tr>
                                <th colspan="3"><h3>Laatste Bestellingen</h3></th>
                            </tr>
                            <tr>
                                <td scope="row">ORDER-0001</td>
                                <td>M.Meijers</td>
                                <td>2x Damesfiets</td>
                            </tr>
                            <tr>
                                <td scope="row">ORDER-0001</td>
                                <td>M.Meijers</td>
                                <td>2x Damesfiets</td>
                            </tr>
                            <tr>
                                <td scope="row">ORDER-0001</td>
                                <td>M.Meijers</td>
                                <td>2x Damesfiets</td>
                            </tr>
                            <tr>
                                <td scope="row">ORDER-0001</td>
                                <td>M.Meijers</td>
                                <td>2x Damesfiets</td>
                            </tr>
                            <tr>
                                <td scope="row">ORDER-0001</td>
                                <td>M.Meijers</td>
                                <td>2x Damesfiets</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="userTable">
                            <tr>
                                <th><h3>Nieuwste Gebruikers</h3></th>
                            </tr>
                            <tr>
                                <td class="newUser">M. Meijers

                                </td>
                            </tr>
                            <tr>
                                <td class="newUser">G. Jansen

                                </td>
                            </tr>
                            <tr>
                                <td class="newUser">O. Otten

                                </td>
                            </tr>
                            <tr>
                                <td class="newUser">T. Vandervorst

                                </td>
                            </tr>
                            <tr>
                                <td class="newUser">A. Geritssen

                                </td>
                            </tr>
                            <tr>
                                <td class="newUser">P. Rod

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        @include('Common templates.footer')
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>



























{{--<h1>index</h1>--}}

{{--@include('Layout.layout')--}}


{{--<div class="container">--}}
    {{--<table class="table">--}}
        {{--<thead class="thead-dark">--}}
        {{--<h1>Nieuwste review</h1>--}}
        {{--<tr style="background-color: #000000">--}}
            {{--<th style="color: #ffffff" scope="col">Review</th>--}}
            {{--<th style="color: #ffffff" scope="col">Waardering</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($review as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->review_omschrijving}}</a></td>--}}
                {{--<td>{{$data->review_waardering}}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}



    {{--<div class="row col-12">--}}
        {{--<div class="row col-2">--}}
            {{--<ul>--}}
                {{--<li>Dashboard</li>--}}
                {{--<li><a href="{{route('fiets-beheer.index')}}">Fietsen</a></li>--}}
                {{--<li><a href="{{route('medewerker.index')}}">Gebruikers</a></li>--}}
                {{--<li><a href="{{route('klant.index')}}">Klanten</a></li>--}}
                {{--<li>Bestellingen</li>--}}
                {{--<li><a href="{{route('review-beheer.index')}}">Reviews</a></li>--}}
                {{--<li><a href="{{route('aanbieding.index')}}">Aanbiedingen</a></li>--}}
                {{--<li><a href="{{route('nieuwsbrief.index')}}">Nieuwsbrieven</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<table class="table">--}}
        {{--<thead class="thead-dark">--}}
        {{--<h1>Nieuwste klant</h1>--}}
        {{--<tr style="background-color: #000000">--}}
            {{--<th style="color: #ffffff" scope="col">Gebruikersnaam</th>--}}
            {{--<th style="color: #ffffff" scope="col">Email</th>--}}
            {{--<th style="color: #ffffff" scope="col">Voornaam</th>--}}
            {{--<th style="color: #ffffff" scope="col">Achternaam</th>--}}
            {{--<th style="color: #ffffff" scope="col">Telefoonnummer</th>--}}
            {{--<th style="color: #ffffff" scope="col">Straat</th>--}}
            {{--<th style="color: #ffffff" scope="col">Postcode</th>--}}
            {{--<th style="color: #ffffff" scope="col">Plaats</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($user as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->user_gebruikersnaam}}</a></td>--}}
                {{--<td>{{$data->email}}</td>--}}
                {{--<td>{{$data->user_voornaam}}</td>--}}
                {{--<td>{{$data->user_achternaam}}</td>--}}
                {{--<td>{{$data->user_telefoonnummer}}</td>--}}
                {{--<td>{{$data->user_straat}}</td>--}}
                {{--<td>{{$data->user_postcode}}</td>--}}
                {{--<td>{{$data->user_plaats}}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}

    {{--<table class="table">--}}
        {{--<thead class="thead-dark">--}}
        {{--<tr style="background-color: #000000">--}}
            {{--<th style="color: #ffffff" scope="col">Voornaam klant</th>--}}
            {{--<th style="color: #ffffff" scope="col">Achternaam klant</th>--}}
            {{--<th style="color: #ffffff" scope="col">Rekeningnummer</th>--}}
            {{--<th style="color: #ffffff" scope="col">Straat</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($bestelling as  $data)--}}
            {{--<tr>--}}
                {{--<td><a>{{$data->voornaam}}</a></td>--}}
                {{--<td>{{$data->achternaam}}</td>--}}
                {{--<td>{{$data->rekeningnummer}}</td>--}}
                {{--<td>{{$data->adres}}</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</div>--}}







