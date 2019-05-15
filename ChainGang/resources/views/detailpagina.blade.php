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
        <div class="col">
            <img class="img-fiets-size" src="{{ asset('img/fiets.jpg') }}">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 id="fiets-title">De titel van deze fiets</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p id="fiets-title">De adviesprijs: €1200,-</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h1 id="fiets-title"> €1000,-</h1>
        </div>
    </div>

    <div class="row">
        <div class="col ster-col eerste-ster-col">
            <img class="ster" src="{{ asset('img/ster.png') }}" alt="">
        </div>
        <div class="col ster-col">
            <img class="ster" src="{{ asset('img/ster.png') }}" alt="">
        </div>
        <div class="col ster-col">
            <img class="ster" src="{{ asset('img/ster.png') }}" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg btn-block">Plan een gratis proefrit</button>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg btn-block">Klik en bestelen</button>
        </div>
    </div>

    <div class="row review-title">
        <div class="col">
            <h3 id="fiets-title"> Reviews</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="review-table">
                <tr>
                    <td class="schrijf-review">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis repellendus tenetur! Aperiam deleniti facilis fugit illum modi nam neque, nulla odio odit quidem rerum sapiente, similique sit vero voluptates.
                        <br><br> geplaatst door: henk
                    </td>
                </tr>
                <tr>
                    <td class="schrijf-review">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis repellendus tenetur! Aperiam deleniti facilis fugit illum modi nam neque, nulla odio odit quidem rerum sapiente, similique sit vero voluptates.
                        <br><br> geplaatst door: henk
                    </td>
                </tr>
                <tr>
                    <td class="schrijf-review">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nobis repellendus tenetur! Aperiam deleniti facilis fugit illum modi nam neque, nulla odio odit quidem rerum sapiente, similique sit vero voluptates.
                        <br><br> geplaatst door: henk
                    </td>
                </tr>

                <tr>
                    <td class="schrijf-review">
                        <h3>Plaats review</h3>
                        <textarea class="review"></textarea>
                        <button type="button" class="btn review-button">Verzenden</button>

                        <img class="ster" src="{{ asset('img/grey-star.png') }}" alt="">
                        <img class="ster" src="{{ asset('img/grey-star.png') }}" alt="">
                        <img class="ster" src="{{ asset('img/grey-star.png') }}" alt="">
                        <img class="ster" src="{{ asset('img/grey-star.png') }}" alt="">
                        <img class="ster" src="{{ asset('img/grey-star.png') }}" alt="">

                    </td>
                </tr>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <h3 id="fiets-title"> Specificaties</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table>
                <tr>
                    <td>Merk</td>
                    <td>Brinckers</td>
                </tr>
                <tr>
                    <td>Serie</td>
                    <td>Brisbane</td>
                </tr>
                <tr>
                    <td>Type fiets</td>
                    <td>Elektrisch</td>
                </tr>
                <tr>
                    <td>Motor</td>
                    <td>Midden</td>
                </tr>
                <tr>
                    <td>Kleur</td>
                    <td>Zwart</td>
                </tr>
                <tr>
                    <td>Frametype</td>
                    <td>Damesfiets</td>
                </tr>
                <tr>
                    <td>Collectie jaar</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>Motortechniek</td>
                    <td>Midden</td>
                </tr>
                <tr>
                    <td>Kleur</td>
                    <td>Zwart</td>
                </tr>
            </table>
        </div>
    </div>


    <div class="row">
        <div class="col">
            @include('Common templates.footer')
        </div>
    </div>





</div>
</body>