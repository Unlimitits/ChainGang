<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <  </>
    @include('Layout.layout')

    <div class="container-fluid">
        @include('Common templates.header')

        {{--Carrousel--}}

        <div class="row">
            <div class="col-sm">

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
        </div>
    </div>



    {{--card menu--}}
    <div class="row card-row">
        <div class="col-sm">
    <div class="card" style="width: 20rem;">
        <div class="card-img-caption">
            <p class="card-text">Damesfietsen</p>
            <img class="card-img-top" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
        </div>

    </div>
        </div>
        <div class="col-sm">
    <div class="card" style="width: 20rem;">
        <div class="card-img-caption">
            <p class="card-text">Herenfietsen</p>
            <img class="card-img-top" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
        </div>

    </div>
        </div>
            <div class="col-sm">
    <div class="card" style="width: 20rem;">
        <div class="card-img-caption">
            <p class="card-text">kinderfietsen</p>
            <img class="card-img-top" src="{{ asset('img/dames-fiets.png') }}" alt="Card image cap">
        </div>

    </div>
            </div>
    </div>

    {{--sale tekst--}}
    <div class="row roze-kleur">
        <div class="col">
            <h1 id="h1-margin">Sale</h1>
        </div>

    </div>
    {{--card sale--}}
    <div class="row roze-kleur">
        <div class="col-">

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
        </div>
        <div class="col-">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        </div>

            <div class="col-">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
            </div>


        <div class="col-">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>


    {{--Spacer--}}
    <div class="row">
        <div class="col">
            <div class="spacer"></div>
        </div>
    </div>

    {{--Image--}}
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/actie.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    {{--Spacer--}}
    <div class="row">
        <div class="col">
            <div class="spacer"></div>
        </div>
    </div>

    {{--nieuw tekst--}}
    <div class="row roze-kleur">
        <div class="col">
            <h1 id="h1-margin">Nieuw</h1>
        </div>

    </div>

    {{--card nieuw--}}
    <div class="row roze-kleur">
        <div class="col-">

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


        <div class="col-">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/dames-fiets-card.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>


    {{--Nieuwsbrief--}}
    <div class="row nieuwsbrief">
        <div class="col">
        </div>
        <div class="col">

    <form>
        <div class="form-row align-items-center">
            <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Email</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Email">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
        </div>
            <div class="col">
            </div>
        </div>
    </div>




    </body>
</html>
