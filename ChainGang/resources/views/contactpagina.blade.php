<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >--}}
    @include('Layout.layout')

</head>
<body>


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


    <div class="row card-row">

        <div class="col-sm-12 col-md-12 col-lg-4  contactstyleCol">
            <div class="card contactCardStyle" >
                <div class="card-body">
                    <h1 class="card-title contactStyleH1">Adres</h1>
                    <p class="card-text contactStyle">Eenstraat 11</p>
                    <p class="card-text contactStyle">1234 AA</p>
                    <p class="card-text contactStyle">Groenlo</p>
                </div>
            </div>
        </div>

        <div class=" col-sm-12  col-md-12 col-lg-4 contactstyleCol">
        <div class="card contactCardStyle">
            <div class="card-body">
                <h1 class="card-title contactStyleH1">Telefoon</h1>
                <p class="card-text contactStyle">06-12345678</p>
            </div>
        </div>
        </div>

        <div class="col-sm-12  col-md-12 col-lg-4 contactstyleCol">
        <div class="card contactCardStyle">
            <div class="card-body">
                <h1 class="card-title contactStyleH1">E-mail</h1>
                <p class="card-text contactStyle">contact@chaingang.com</p>
            </div>
        </div>
        </div>

    </div>


    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4" >

            <img class="contactOverOnsGoogleMaps" src="{{ asset('img/googlemaps.png') }}" alt="Googlemaps werkt niet">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-8">

            <h1 class="contactOveronsStyle">over ons</h1>
            <p class="contactStyleP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error iusto necessitatibus tempora? Adipisci animi consequuntur, deleniti dolor doloremque eaque excepturi impedit inventore, magnam, minus pariatur perspiciatis rerum soluta velit voluptates?

            </p>

        </div>


    </div>

    @include('Common templates.footer')
</div>
</body>