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
            <img class="img-fiets-size" src="data:image/png;base64,{{ chunk_split(base64_encode($fiets->fiets_foto)) }}" >
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3 id="fiets-title">{{$fiets->fiets_naam}}</h3>
        </div>
    </div>

    {{--<div class="row">--}}
        {{--<div class="col">--}}
            {{--<p id="fiets-title">De advies=prijs: €1200,-</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="row">
        <div class="col">
            <h1 id="fiets-title"> € {{$fiets->fiets_prijs}},-</h1>
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
                    {{--@foreach($review as $reviews)--}}
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
                {{--@endforeach--}}

                <tr>
                    <td class="schrijf-review">
                        <form action="{{ route('review.store') }}" method="post" >
                            @csrf
                        <h3>Plaats review</h3>
                        <input type="hidden" name="fietsData" value="{{$fiets->fiets_id}}">
                        <textarea class="review" name="review_omschrijving"></textarea>

                        <button type="submit" class="btn review-button">Verzenden</button>

                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>

                            </fieldset>
                        </form>

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
                    <td>{{$fiets->fiets_merk}}</td>
                </tr>
                <tr>
                    <td>Serie</td>
                    <td>{{$fiets->fiets_serie}}</td>
                </tr>
                <tr>
                    <td>Type fiets</td>
                    <td>{{$fiets->fiets_type}}</td>
                </tr>
                <tr>
                    <td>Motor</td>
                    <td>{{$fiets->fiets_motorpositie}}</td>
                </tr>
                <tr>
                    <td>Kleur</td>
                    <td>{{$fiets->fiets_kleur}}</td>
                </tr>
                <tr>
                    <td>Frametype</td>
                    <td>{{$fiets->fiets_frameType}}</td>
                </tr>
                <tr>
                    <td>Collectie jaar</td>
                    <td>{{$fiets->fiets_jaar}}</td>
                </tr>
                <tr>
                    <td>Motortechniek</td>
                    <td>{{$fiets->fiets_motortechniek}}</td>
                </tr>
                {{--<tr>--}}
                    {{--<td>Kleur</td>--}}
                    {{--<td>Zwart</td>--}}
                {{--</tr>--}}
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