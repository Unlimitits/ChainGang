{{--@extends('layouts.app')--}}
@include('Layout.layout')
<div class="container">
    <h1>Medewerker aanpassen</h1>
    <form action="{{ route('medewerker.update', $id) }}" method="post" >

        @csrf
        <input name="_method" type="hidden" value="PATCH">

        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul class=" navbar-nav mr-auto">
                    @foreach ($errors->all() as $error)
                        <li class="nav-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="Voornaam">Voornaam</label>
                <input type="text" class="form-control" name="Voornaam" placeholder="Voornaam"  value="{{$medewerker->gebruiker_voornaam}}">
            </div>

            <div class="form-group col-md-4">
                <label for="Achternaam">Achternaam</label>
                <input type="text" class="form-control" name="Achternaam" placeholder="Achternaam" value="{{$medewerker->gebruiker_achternaam}}">
            </div>

            <div class="form-group col-md-4">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Email" required value="{{$medewerker->email}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="Telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" name="Telefoonnummer" placeholder="Telefoonnummer" required value="{{$medewerker->gebruiker_telefoonnummer}}">
            </div>
        </div>

        {{--<div class="form-row">--}}
            {{--<div class="form-group col-md-12">--}}
                {{--<label for="Gebruikersnaam">Gebruikersnaam</label>--}}
                {{--<input type="text" class="form-control" name="Gebruikersnaam" placeholder="Gebruikersnaam" required value="{{$medewerker->gebruiker_gebruikersnaam}}">--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="Wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" name="Wachtwoord" placeholder="wachtwoord" required value="{{$medewerker->gebruiker_wachtwoord}}">
            </div>
        </div>


        <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>


    </form>

</div>



