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
                <h1 class="loginStyleHeader"> {{ __('Registreer') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="name" type="text" placeholder="Gebruikersnaam" class="Loginform-controlStyle form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="password" type="password" placeholder="Wachtwoord" class="Loginform-controlStyle form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="password-confirm" placeholder="Herhaal wachtwoord" type="password" class="Loginform-controlStyle form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin loginStyleMarinPersoonlijk">
                                <input id="First-name" placeholder="Voornaam" type="text" class="Loginform-controlStyle form-control">
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="Last-name" placeholder="Achternaam" type="text" class="Loginform-controlStyle form-control">
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="email" type="email" placeholder="Emailadres" class="Loginform-controlStyle form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="Telehpone" placeholder="Telefoonnummer" type="text" class="Loginform-controlStyle form-control">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="Telehpone" placeholder="Straat" type="text" class="Loginform-controlStyle form-control">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-10 loginStyleMargin">
                                <input id="Telehpone" placeholder="Postcode" type="text" class="Loginform-controlStyle form-control">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <a class="btn btn-primary loginStyleMargin loginBtnStyle loginRegisterenBtnStyle" href="#">Registreren</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('Common templates.footer')
</div>

</body>
</html>





{{--@endsection--}}
