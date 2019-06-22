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
        <div class="col-12">
            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 center-align">
            <h1 class="p-profiel"> Uw gegevens</h1>


            <form method="get" action="{{route('profielEdit')}}">
                <table class="table-profiel">
                    <tr>
                        <td>Voornaam</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_voornaam" value="{{Auth::user()->user_voornaam}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Achternaam</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_achternaam" value="{{Auth::user()->user_achternaam}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Emailadres</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="email" value="{{Auth::user()->email}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Telefoon</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_telefoonnummer" value="{{Auth::user()->user_telefoonnummer}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Straat</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_straat" value="{{Auth::user()->user_straat}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Postcode</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_postcode" value="{{Auth::user()->user_postcode}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Plaats</td>
                        <td>
                            <input class="profielPaginaInputStyle" type="text" name="user_plaats" value="{{Auth::user()->user_plaats}}">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="btn review-button profielPaginaButton" value="Gegevens Updaten">
                            {{--<input type="submit" name="submit" value="Gegevens Updaten">--}}
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-12 col-lg-4 center-align profielPaginaStyle">
            <table>
                <tr>
                    <th><h1 class="p-profiel"> Uw Reviews</h1></th>
                </tr>
                @if(!is_null($reviews))
                    @foreach ($reviews as $review)
                        <tr>
                            <td>
                                <p class="reviewP colorPink">{{$review->review_omschrijving}}</p>
                                <p class="reviewP colorPink">Waardering: {{$review->review_waardering}} sterren</p>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
        <div class="col-12 col-lg-4 center-align profielPaginaStyle">
            <table>
                <tr>
                    <th><h1 class="p-profiel"> Uw Bestellingen</h1></th>
                </tr>
                @if(!is_null($bestellingen))
                    @foreach ($bestellingen as $bestelling)
                        <tr>
                            <td>
                                <p class="reviewP colorPink">{{$bestelling->cart}}</p>
                                <p class="reviewP colorPink">{{$bestelling->created_at}}</p>
                            </td>
                        </tr>
                    @endforeach
                @endif
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