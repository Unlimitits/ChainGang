<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reset wachtwoord</title>


    @include('Layout.layout')
</head>
<body>



<div class="container-fluid">


    <div class="row justify-content-center">
        <div class="col-md-8 LogincardStyleContainer">
            <div class="card roze-kleur-belangrijk">
                {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                <h1 class="loginStyleHeader"> {{ __('Wachtwoord resetten') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                    {{--<form method="POST" action="{{ route('password.reset') }}">--}}
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-10 loginStyleMargin">
                                <input id="email" type="email" placeholder="Emailadres" class="Loginform-controlStyle form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

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
                            {{--<label for="password-confirm"  class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            <div class="col-md-10 loginStyleMargin">
                                <input id="password-confirm" type="password" placeholder="Herhaal wachtwoord" class="Loginform-controlStyle form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row registerStyle">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btnEmailPasswordStyle ">
                                    {{ __('Reset Password') }}
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

