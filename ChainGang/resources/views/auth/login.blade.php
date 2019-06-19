@include('Layout.layout')

        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

                <h1 class="loginStyleHeader"> {{ __('Inloggen') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-10 loginStyleMargin">
                                <input id="email" type="text" placeholder="Emailadres" class="Loginform-controlStyle form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 loginStyleMargin">
                                <input id="password" type="password" placeholder="Wachtwoord" class="Loginform-controlStyle form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row " >
                            <div class="col-md-6 offset-md-0">
                                <div class="form-check loginStyleMargin">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Onthoud wachtwoord') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-0">
                                <button type="submit" class="btn btn-primary loginStyleMargin loginBtnStyle">
                                    {{ __('Inloggen') }}
                                </button>
                            </div>
                        </div>

                        <div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-0 ">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link loginWachtwoordVergetenStyle " href="{{ route('password.request') }}">
                                            {{ __('Wachtwoord vergeten?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="form-group row mb-12">
                                <div class="col-md-12 offset-md-0 ">
                                    <hr class="loginHr">
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="form-group row mb-0">
                                <p class="loginGeenAccount">Nog geen account?</p>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <a class="btn btn-primary loginStyleMargin loginBtnStyle loginRegisterenBtnStyle" href="{{ route('register') }}">Registreren</a>
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