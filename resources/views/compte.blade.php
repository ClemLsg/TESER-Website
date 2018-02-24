<?php
/**
 * Created by PhpStorm.
 * User: theda
 * Date: 24/02/2018
 * Time: 13:33
 */
?>
        <!doctype html>
<html lang="fr">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compte</title>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>
<body>
    <div class="container-fluid" style="background: url('{{asset('/public/images/BACKGROUND.png')}}')">
        <div class="row" style="height: 100vh">
            <div class="col-sm-2 left-compte text-center">
                <div class="row justify-content-center">
                    <div class="col-sm-8 text-center">
                        <img src="{{asset('/public/images/LOGO_officiel.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <p style="font-family: Lato; color: white; ">BIENVENUE DANS <br> LE PANNEL DE VOTRE EQUIPE</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8" style="border-top: 1px solid white"></div>
                </div>
                <div class="row justify-content-center" style="margin-top: 26px">
                    <p style="font-family: Lato; color: white; ">NOM DE L'EQUIPE</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->name}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top: 26px">
                    <p style="font-family: Lato; color: white; ">JOUEURS</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display2">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->player1}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display2">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->player2}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display2">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->player3}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display2">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->player4}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-display2">
                            <p style="font-family: Lato; color: white;">{{Auth::user()->player5}}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center">
                        <img src="{{asset('/public/images/OUT_BUTTON.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-center" style="position:absolute; bottom: 0px; width: 100%;">
                    <div class="col-sm-8" style="border-top: 1px solid white"></div>
                    <p style="font-family: Lato; color: white;">@2018 TESER.FR</p>
                </div>
            </div>
            <div class="col-sm-8">

            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>
</body>
