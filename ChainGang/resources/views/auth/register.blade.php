@include('Layout.layout')



<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                    <div class="LoginStyleHeader ">{{ __('Registreer') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_gebruikersnaam" type="text" placeholder="Gebruikersnaam" class="Loginform-controlStyle form-control{{ $errors->has('user_gebruikersnaam') ? ' is-invalid' : '' }}" name="user_gebruikersnaam" value="{{ old('user_gebruikersnaam') }}" required autofocus>

                                    @if ($errors->has('user_gebruikersnaam'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_gebruikersnaam') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-10 loginStyleMargin">
                                    <input id="email" type="email" placeholder="Emailadres" class="Loginform-controlStyle form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-10 loginStyleMargin">
                                    <input id="password" type="password" placeholder="Wachtwoord" class="Loginform-controlStyle form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">


                                <div class="col-md-10 loginStyleMargin">
                                    <input id="password-confirm" type="password" placeholder="Herhaal wachtwoord" class="Loginform-controlStyle form-control" name="password_confirmation" required>
                                </div>
                            </div>


                            <div class="form-group row">


                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_voornaam" type="text" placeholder="Voornaam" class="Loginform-controlStyle form-control{{ $errors->has('user_voornaam') ? ' is-invalid' : '' }}" name="user_voornaam" value="{{ old('user_voornaam') }}" required autofocus>

                                    @if ($errors->has('user_voornaam'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_voornaam') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_achternaam" type="text" placeholder="Achternaam" class="Loginform-controlStyle form-control{{ $errors->has('user_achternaam') ? ' is-invalid' : '' }}" name="user_achternaam" value="{{ old('user_achternaam') }}" required autofocus>

                                    @if ($errors->has('user_achternaam'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_achternaam') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_telefoonnummer" placeholder="Telefoonnummer" type="text" class="Loginform-controlStyle form-control{{ $errors->has('user_telefoonnummer') ? ' is-invalid' : '' }}" name="user_telefoonnummer" value="{{ old('user_telefoonnummer') }}" required autofocus>

                                    @if ($errors->has('user_telefoonnummer'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_telefoonnummer') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_straat" type="text" placeholder="Straat" class="Loginform-controlStyle form-control{{ $errors->has('user_straat') ? ' is-invalid' : '' }}" name="user_straat" value="{{ old('user_straat') }}" required autofocus>

                                    @if ($errors->has('user_straat'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_straat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">


                                <div class="col-md-10 loginStyleMargin">
                                    <input id="user_postcode" type="text" placeholder="Postcode" class="Loginform-controlStyle  form-control{{ $errors->has('user_postcode') ? ' is-invalid' : '' }}" name="user_postcode" value="{{ old('user_postcode') }}" required autofocus>

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
                                    <input id="user_plaats" type="text" placeholder="Plaats" class="Loginform-controlStyle form-control{{ $errors->has('user_plaats') ? ' is-invalid' : '' }}" name="user_plaats" value="{{ old('user_plaats') }}" required autofocus>

                                    @if ($errors->has('user_plaats'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_plaats') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row test">
                                    <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary loginBtnStyle loginRegisterenBtnStyle ">
                                        {{ __('Registreren') }}
                                    </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
