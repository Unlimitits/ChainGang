{{--@extends('layouts.app')--}}
@include('Layout.layout')
    <div class="container">
        <h1>Maak een nieuwe medewerker aan</h1>
        <form action="{{ route('medewerker.store') }}" method="post" >
            @csrf

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
                    <input type="text" class="form-control" name="Voornaam" placeholder="Voornaam" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="Achternaam">Achternaam</label>
                    <input type="text" class="form-control" name="Achternaam" placeholder="Achternaam">
                </div>

                <div class="form-group col-md-4">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="Email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Telefoonnummer">Telefoonnummer</label>
                    <input type="text" class="form-control" name="Telefoonnummer" placeholder="Telefoonnummer" required>
                </div>
            </div>

            {{--<div class="form-row">--}}
                {{--<div class="form-group col-md-12">--}}
                    {{--<label for="Gebruikersnaam">Gebruikersnaam</label>--}}
                    {{--<input type="text" class="form-control" name="Gebruikersnaam" placeholder="Gebruikersnaam" required>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Wachtwoord">Wachtwoord</label>
                    <input type="password" class="form-control" name="Wachtwoord" placeholder="wachtwoord" required>
                </div>
            </div>


            <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>


        </form>

    </div>



