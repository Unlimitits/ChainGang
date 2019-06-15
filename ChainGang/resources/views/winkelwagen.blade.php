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


    @if(session('success'))

        <div class="alert alert-success alertStyleWinkelwagen">
            {{ session('success') }}
        </div>

    @endif

    <div class="row" >


        <table id="cart" class="table table-hover table-condensed tableStyle">
            <thead>
            <tr>

                <th style="width:50%"><p class="winkelwagenP">Product</p></th>
                <th style="width:10%">Prijs</th>
                <th style="width:8%">Aantal</th>
                <th style="width:22%" class="text-center">Subtotaal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>

            <?php $total = 0 ?>

            @if(session('cart'))
                @foreach(session('cart') as $id => $details)

                    <?php $total += $details['fiets_prijs'] * $details['quantity'] ?>

                    <tr>
                        <td data-th="Product">
                            <div class="row">

                                {{--<div class="col-2 col-sm-1 col-lg-3 winkelwagenP"><img src="data:image/png;base64,{{ chunk_split(base64_encode($fietsen->fiets_foto)) }}" width="100" height="100"/></div>--}}
                                {{--<div class="col-2 col-sm-1 col-lg-3 winkelwagenP"><img src="{{ $details['fiets_foto'] }}" width="100" height="100"/></div>--}}
                                <div class="col-2 col-sm-1 col-lg-3 winkelwagenP"><img class="winkelwagenWidthHeightStyle" src="data:image/png;base64,{{ chunk_split(base64_encode($details['fiets_foto'])) }}"/></div>


                                <div class="col-sm-12 col-md-12 col-lg-8">
                                    <h4 class="winkelwagenNameStyle">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">€{{ $details['fiets_prijs'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" min="1" max="100" value="{{ $details['quantity'] }}" oninput="validity.valid||(value='');" class="form-control quantity quantityStyle" />
                        </td>
                        <td data-th="Subtotal" class="text-center">€{{ $details['fiets_prijs'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
            <tfoot>
            <tr>
                <td class="tdStyle"><a href="{{ url('/') }}" class="btn verderWinkelenStyle"><i class="fa fa-angle-left"></i> Verder winkelen</a></td>
                <td colspan="2" class="hidden-xs tdStyle"></td>
                <td class="hidden-xs text-center tdStyle"><strong>Totaal €{{ $total }}</strong></td>
                <td colspan="2" class="hidden-xs tdStyle"></td>
            </tr>
            </tfoot>
        </table>
    </div>











                {{--<div class="col-7 col-sm-2 col-lg-2">--}}
                    {{--<p class="winkelwagenColorStyle winkelWagenStyleP"> Popal - Damesfiets - 28 inch - 57 cm</p>--}}
                {{--</div>--}}

                {{--<div class="col-3 col-sm-2 col-lg-2">--}}
                    {{--<p class="colWinkelwagenStyle colwinkelWagenMarginBedragStyle bedragNaastTitel"> € 178.80</p>--}}
                {{--</div>--}}

                {{--<div class="col-7 col-sm-2  col-lg-3" >--}}
                    {{--<p class="winkelwagenColorStyle winkelwagenMargin besteldStyle">Nu besteld, morgen in huis </p>--}}

                {{--</div>--}}



                {{--<div class="col-2 col-sm-2  col-lg-1 colWinkelwagenStyleInlineBlock" >--}}
                    {{--<p class="colWinkelwagenStyle aantalStyle" > Aantal</p>--}}
                    {{--<select class="selectStyle" >--}}
                        {{--<option>1</option>--}}
                        {{--<option>2</option>--}}
                        {{--<option>3</option>--}}
                        {{--<option>4</option>--}}
                        {{--<option>5</option>--}}
                        {{--<option>6</option>--}}
                        {{--<option>7</option>--}}
                        {{--<option>8</option>--}}
                        {{--<option>9</option>--}}
                        {{--<option>10</option>--}}
                        {{--<option>15</option>--}}
                        {{--<option>20</option>--}}
                        {{--<option>25</option>--}}

                    {{--</select>--}}

                {{--</div>--}}





        {{--<div class="col-3 col-sm-2">--}}
            {{--<a class="verwijderenAStyle colWinkelwagenStyleInlineBlock" href="#">verwijderen</a>--}}
        {{--</div>--}}

        {{--<div class="col-12">--}}
            {{--<hr class="winkelwagenHrSecond">--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="row">--}}


        {{--<div class="col-9"><p class="totaalArtikelenStyle">Totaal artikelen (3)</p> </div>--}}

        {{--<div class="col-3">--}}
            {{--<p class="colWinkelwagenStyle totaalArtikelenStyle"> € 178.80</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="col-9">--}}
            {{--<p class="verzendkostenStyle totaalArtikelenStyle">Verzendkosten</p>--}}
        {{--</div>--}}

        {{--<div class="col-3 ">--}}
            {{--<p class="gratisStyle colwinkelWagenMarginBedragStyle">Gratis</p>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<hr class="winkelwagenHrSecond">--}}

    {{--<div class="row">--}}
        {{--<div class="col-9 ">--}}
            {{--<p class="totaalBedragStyle totaalBedragTekst totaalArtikelenStyle" >Totaal</p>--}}
        {{--</div>--}}

        {{--<div class="col-3 ">--}}
            {{--<p class="totaalBedragStyle colwinkelWagenMarginBedragStyle">€ 178.80</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row bestellenRowStyle">--}}
        {{--<div class="col-12 ">--}}
            {{--<a class="bestellenAStyle" href="#">Verder naar bestellen</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<hr class="winkelwagenHrSecond">--}}

    {{--<div class="row verderWinkelenStyleCol">--}}
        {{--<div class="col-12">--}}
            {{--<a class="verderWinkelenStyle" href="#">Verder winkelen</a>--}}
        {{--</div>--}}
    {{--</div>--}}










    <div class="row">
        <div class="col footerStyle">
            @include('Common templates.footer');
        </div>
    </div>
</div>






    <script type="text/javascript">

        $(".update-cart").click(function (e) {
            e.preventDefault();
            console.log('update');
            var ele = $(this);

            $.ajax({
                url: '{{ url('update-winkelwagen') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-winkelwagen') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();

                    }
                });
            }
        });

    </script>


</body>
</html>



