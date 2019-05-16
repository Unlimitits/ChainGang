<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
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

    <div class="row">
        <div class="col-12 col-lg-4 center-align">
            <img class="img-profiel" src="" alt=""><br>
            <button type="button" class="btn review-button btn-profiel">Uploaden</button>
        </div>
        <div class="col-12 col-lg-4 center-align">
            <h1 class="p-profiel"> Uw gegevens</h1>
            <table class="table-profiel">
                <tr>
                    <td>Voornaam </td>
                    <td>John</td>
                </tr>
                <tr>
                    <td>Achternaam </td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>Email-Adres </td>
                    <td>totallylegit@email.com</td>
                </tr>
                <tr>
                    <td>Telefoon </td>
                    <td>1234-567890</td>
                </tr>
                <tr>
                    <td>Straat </td>
                    <td>Straatnaam 8c</td>
                </tr>
                <tr>
                    <td>Postcode </td>
                    <td>4242 GG</td>
                </tr>
                <tr>
                    <td>Plaats </td>
                    <td>Stad</td>
                </tr>
            </table>
        </div>
        <div class="col-12 col-lg-4 center-align">
            <h1 class="p-profiel"> Uw Bestellingen</h1>
            <textarea class="text-area-profiel"></textarea>
        </div>
    </div>



    <div class="row">
        <div class="col">
            @include('Common templates.footer')
        </div>
    </div>
</div>
</body>