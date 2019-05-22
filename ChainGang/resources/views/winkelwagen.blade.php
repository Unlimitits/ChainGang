<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @include('Layout.layout')
</head>


<body>

<div class="container-fluid ">

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


    <h1 class="winkelwagenH1Style">Winkelwagentje</h1>

        <div class="row" >
            <div class="col-2 col-sm-1 col-lg-1">
                {{--image moet er nog bij--}}
                <img class="winkelwagenMargin winkelwagenImageStyle" src="{{ asset('img/fiets.jpg') }}" alt="het werkt niet">




            </div>

            <div class="col-7 col-sm-2 col-lg-2">
                <p class="winkelwagenColorStyle winkelWagenStyleP"> Popal - Damesfiets - 28 inch - 57 cm</p>
            </div>

            <div class="col-3 col-sm-2 col-lg-2">
                <p class="colWinkelwagenStyle colwinkelWagenMarginBedragStyle bedragNaastTitel"> € 178.80</p>
            </div>

            <div class="col-7 col-sm-2  col-lg-3" >
                <p class="winkelwagenColorStyle winkelwagenMargin besteldStyle">Nu besteld, morgen in huis </p>

            </div>



            <div class="col-2 col-sm-2  col-lg-1 colWinkelwagenStyleInlineBlock" >
                <p class="colWinkelwagenStyle aantalStyle" > Aantal</p>
                <select class="selectStyle" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>

                </select>

            </div>


            <div class="col-3 col-sm-2">
                <a class="verwijderenAStyle colWinkelwagenStyleInlineBlock" href="#">verwijderen</a>
            </div>

            <div class="col-12">
                <hr class="winkelwagenHrSecond">
            </div>

        </div>

        <div class="row">


            <div class="col-9"><p class="totaalArtikelenStyle">Totaal artikelen (3)</p> </div>

            <div class="col-3">
                <p class="colWinkelwagenStyle totaalArtikelenStyle"> € 178.80</p>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <p class="verzendkostenStyle totaalArtikelenStyle">Verzendkosten</p>
            </div>

            <div class="col-3 ">
                <p class="gratisStyle colwinkelWagenMarginBedragStyle">Gratis</p>
            </div>
        </div>


         <hr class="winkelwagenHrSecond">

        <div class="row">
            <div class="col-9 ">
                <p class="totaalBedragStyle totaalBedragTekst totaalArtikelenStyle" >Totaal</p>
            </div>

            <div class="col-3 ">
                <p class="totaalBedragStyle colwinkelWagenMarginBedragStyle">€ 178.80</p>
            </div>
        </div>

        <div class="row bestellenRowStyle">
            <div class="col-12 ">
                <a class="bestellenAStyle" href="#">Verder naar bestellen</a>
            </div>
        </div>

    <hr class="winkelwagenHrSecond">

        <div class="row verderWinkelenStyleCol">
            <div class="col-12">
                <a class="verderWinkelenStyle" href="#">Verder winkelen</a>
            </div>
        </div>



</div>
</body>
</html>