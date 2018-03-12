<!doctype html>
<html lang="fr">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/images/favicon.ico')}}">
    <title>Login</title>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>
<body>
<div class="container-fluid" style="background: url({{asset('/public/images/fond.jpg')}}); height: 100vh; width: 100vw; z-index: 20 ; background-repeat: no-repeat; background-size:cover; background-position: center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-4 text-center mb-5" style="margin-top: 6rem">
                <p style="font-family: Forque; font-size: 30pt; color: white;">RESET MOT DE PASSE</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 offset-4" align="center">
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-8 control-label">Adresse Email</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control form-control-teser" name="email" value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-8 control-label">Entrez votre mot de passe</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control form-control-teser" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-8 control-label">Réécrivez votre mot de passe</label>
                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control form-control-teser" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-teser-4">
                                CHANGER LE MOT DE PASSE
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div style="position: fixed; bottom: 0px; width: 100vw; left: 0px" class="mb-3">
            <div class="row justify-content-center">
                <div class="col-sm-1">
                    <img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4 offset-4" style="color: white; text-align: center;">
                    <p style="font-family: Lato-Black; font-size: 12pt">@2018 TESER.FR</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


