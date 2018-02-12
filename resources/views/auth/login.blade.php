<!doctype html>
<html lang="fr">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Teser</title>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>
<body>
    <div class="container-fluid" style="background: url({{asset('/public/images/HEADER_IMG.png')}}); height: 100vh; width: 100vw; z-index: 20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 offset-5">
                    <img src="{{asset('/public/images/LOGO_officiel.png')}}" class="img-fluid" style="z-index: 20">
                </div>
            </div>
            <div class="row" style="margin-top: -55px; z-index: 1">
                <div class="col-sm-4 offset-4 login-card" align="center">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">EMAIL DU CHEF DE L'EQUIPE</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control form-control-teser" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">MOT DE PASSE</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control form-control-teser" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-teser">
                                    SE CONNECTER
                                </button>

                                <a class="btn teser-link" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div style="position: fixed; bottom: 0px; width: 100vw; left: 0px">
                <div class="row justify-content-center">
                    <div class="col-sm-1">
                        <img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 offset-4" style="color: white; text-align: center">
                        <h4>@2018 TESER.FR</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
