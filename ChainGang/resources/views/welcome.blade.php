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

    <div class="row">
        <div class="col">
            @include('Common templates.mobile_header')
        </div>
    </div>

    <div class="row card-row">
        <div class="col">
            <div class="card" style="width: 20rem;">
                <div class="card-img-caption">
                    <p class="card-text">Damesfietsen</p>
                    <img class="card-img-top img-fluid" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 20rem;">
                <div class="card-img-caption">
                    <p class="card-text">Herenfietsen</p>
                    <img class="card-img-top" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 20rem;">
                <div class="card-img-caption">
                    <p class="card-text">Kinderfietsen</p>
                    <img class="card-img-top" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>

    <div class="row roze-kleur">
        <div class="col">
            <h1 class="h1-margin">Sale</h1>
        </div>

    </div>

    <div class="row card roze-kleur">
        <div class=".col-3">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=".col-3">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>




        </div>
        <div class=".col-12">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=".col-12">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row roze-kleur">
        <div class="col">
            <h1 class="h1-margin">Nieuw</h1>
        </div>

    </div>

    <div class="row card roze-kleur">
        <div class=".col-3">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=".col-3">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>




        </div>
        <div class=".col-12">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=".col-12">
            <div class="card sale_card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div id="nieuwsbrief" class="my-auto">
                <form id="nieuwsbrief-form" >
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="email_form">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @include('Common templates.footer')
        </div>
    </div>


</div>


</body>
</html>