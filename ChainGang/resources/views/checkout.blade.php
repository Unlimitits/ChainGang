@include('Layout.layout')



        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitchecken</title>
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

    <div class="row justify-content-center">
        <div class="col-md-8 LogincardStyleContainer">
            <div class="card roze-kleur-belangrijk">
                <div class="LoginStyleHeader ">{{ __('Uitchecken') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('checkout-from-winkelwagen') }}">
                        @csrf


                        <div class="row" >

                            <table id="cart" class="table table-hover table-condensed tableStyle">
                                <tbody>

                                <?php $total = 0 ?>


                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)

                                        <?php $total += $details['fiets_prijs'] * $details['quantity'] ?>
                                    @endforeach
                                @endif


                                <strong class="text-center checkoutBlauw checkoutMargin">Uw totaal €{{ $total}}</strong>

                            </table>
                        </div>



                        <div class="form-group row">


                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_voornaam" type="text" readonly="readonly" placeholder="Voornaam" class="Loginform-controlStyle form-control{{ $errors->has('user_voornaam') ? ' is-invalid' : '' }}" name="user_voornaam" value="{{Auth::user()->user_voornaam}}" required autofocus>

                                @if ($errors->has('user_voornaam'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_voornaam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_achternaam" type="text" readonly="readonly" placeholder="Achternaam" class="Loginform-controlStyle form-control{{ $errors->has('user_achternaam') ? ' is-invalid' : '' }}" name="user_achternaam" value="{{Auth::user()->user_achternaam}}" required autofocus>

                                @if ($errors->has('user_achternaam'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_achternaam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_telefoonnummer" readonly="readonly" placeholder="Telefoonnummer" type="text" class="Loginform-controlStyle form-control{{ $errors->has('user_telefoonnummer') ? ' is-invalid' : '' }}" name="user_telefoonnummer" value="{{Auth::user()->user_telefoonnummer}}" required autofocus>

                                @if ($errors->has('user_telefoonnummer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_telefoonnummer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_straat" type="text" placeholder="Straat" class="Loginform-controlStyle form-control{{ $errors->has('user_straat') ? ' is-invalid' : '' }}" name="user_straat" value="{{Auth::user()->user_straat}}" required autofocus>

                                @if ($errors->has('user_straat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_straat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">


                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_postcode" type="text" placeholder="Postcode" class="Loginform-controlStyle  form-control{{ $errors->has('user_postcode') ? ' is-invalid' : '' }}" name="user_postcode" value="{{Auth::user()->user_postcode}}" required autofocus>

                                @if ($errors->has('user_postcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            {{--<label for="user_plaats" class="col-md-4 col-form-label text-md-right">{{ __('Plaats') }}</label>--}}

                            <div class="col-md-10 loginStyleMargin">
                                <input id="user_plaats" type="text" placeholder="Plaats" class="Loginform-controlStyle form-control{{ $errors->has('user_plaats') ? ' is-invalid' : '' }}" name="user_plaats" value="{{Auth::user()->user_plaats}}" required autofocus>

                                @if ($errors->has('user_plaats'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_plaats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--<label for="user_plaats" class="col-md-4 col-form-label text-md-right">{{ __('Plaats') }}</label>--}}

                            <div class="col-md-10 loginStyleMargin">
                                <input id="rekeningnummer" type="text" placeholder="rekeningnummer bijv. NLRABO32 12345678" class="Loginform-controlStyle form-control{{ $errors->has('rekeningnummer') ? ' is-invalid' : '' }}" name="rekeningnummer" required autofocus>

                                @if ($errors->has('rekeningnummer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rekeningnummer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row registerStyle">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary loginBtnStyle loginRegisterenBtnStyle ">
                                    {{ __('Bestellen') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
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
