<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 22/01/2018
 * Time: 16:55
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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/images/favicon.ico')}}">
    <title>Teser</title>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>

<body>
<div id="desktop" class="d-none d-sm-block">
    <div class="head-home" style="background: url({{asset('/public/images/background_v2.jpg')}}) ; background-repeat: no-repeat; background-size:cover; background-position: center;">
        <div class="container-fluid" style="padding-top: 25px">
            <div class="row align-items-center" style="position: relative; z-index: 5;">
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/LOGO_officiel.png')}}" style="height: 129px; width: 129px;">
                </div>
                <div class="col-sm-2 offset-4 text-center align-self-center h-100">
                    <a class="align-middle" style="font-family: Forque; color: white; font-size: 18pt;" href="#" id="info-btn">INFORMATIONS</a>
                </div>
                <div class="col-sm-2 text-center align-self-center h-100">
                    <button type="button" class="btn btn-teser-4" id="reg-btn">INSCRIPTIONS</button>
                </div>
                <div class="col-sm-2 text-center align-self-center h-100">
                    @guest
                        <a class="align-middle" href="{{route('login')}}" style="font-family: Forque; color: white; font-size: 18pt;">SE CONNECTER</a>
                    @else
                        <a class="align-middle" href="{{route('compte')}}" style="font-family: Forque; color: white; font-size: 18pt;">MON COMPTE</a>
                    @endguest
                </div>
            </div>
            <div class="row justify-content-center" style="height: 100vh; width:  100vw; position:  absolute; top: 0; overflow: hidden">
                <div class="col-sm-12 align-self-center text-center">
                    <img src="{{asset('/public/images/titre_head.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="spacer"></div>
            <div class="row">
                <div class="col-sm-5 text-right align-self-center teser-machin-rose">
                    <p style="font-family: Lato; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px;">FIN DES INSCRIPTIONS <span style="font-family: 'Lato Black' ">LE 24 MARS 2018</span></p>
                </div>
            </div>
            <div class="spacer2"></div>
            <div class="row justify-content-center">
                <div class="col-sm-2 offset-4 align-items-center text-center">
                    <a id="info-arr"><img src="{{asset('/public/images/arrow_head.png')}}" style="height: 65px; cursor: pointer"></a>
                </div>
                <div class="col-sm-2 offset-2 text-center align-self-center h-100">
                    <button type="button" class="btn btn-teser-5" id="reg-btn">REJOINDRE LE DISCORD</button>
                </div>
            </div>
        </div>
    </div>
    <div class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 offset-4 titles text-center">
                    <h4>INFORMATIONS</h4>
                </div>
            </div>
            <div class="about-card">
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center ">
                        <h4 class="label-teser">LA TESER ? C'EST QUOI ?</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-justify mt-5 mb-5">
                        <p class="text-justify" style="font-family: Lato; font-size: 16pt;">La TESER, appelée aussi <span style="font-family: 'Lato Black' ">Tournoi ESport des Étudiants Rouennais</span> est un tournoi esport qui se concentre sur deux jeux uniquement : </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p style="font-family: Lato-Black-Italic; font-size: 16pt; color: #eb005d">LEAGUE OF LEGENDS <span style="font-family: 'Lato' ">et</span> COUNTER STRIKE GLOBAL OFFENSIVE</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-5 mb-3">
                        <p style="font-family: Lato; font-size: 16pt;">
                            Cet événement est totalement gratuit et est résérvé exclusivement à tous les étudiants
                            <span style="font-family: Lato-Black-Italic; font-size: 16pt">de la Métropole Rouen Normandie.</span>
                            Il est organisé par des étudiants de l’IUT de Rouen et du CESi EXIA. Le tournoi s’organise sous forme de différents matchs hebdomadaires offline avec les deux finales qui se joueront au caffée esport
                            <span style="font-family: Lato-Black-Italic; font-size: 16pt">le Stormwin Coffee. Pour avoir plus de précisons vous pouvez désormais rejoindre notre Discord en cliquant</span>
                            <a class="teser-link3" href="">ici.</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-5">
                        <p style="font-family: Lato-Black-Italic; font-size: 16pt;">De nombreux lots sont à gagner, si vous arrivez à vaincre toutes les équipes bien entendu. :p</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-1 teser-card pt-5">
                        <div class="row justify-content-center mb-5">
                            <div class="col-sm-4 text-center">
                                <h4 class="label-teser">LES DATES IMPORTANTES</h4>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4 offset-4 text-center">
                                <p style="font-family: 'Lato Black'; font-size: 16pt ">LEAGUE OF LEGENDS</p>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-1 offset-2" style="border-right: 2px solid #b40047; border-bottom: 2px solid #b40047;">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt ">MATCHS</p>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MER.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">28 <span style="font-size: 13.88pt">MARS</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MER.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">04 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MER.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">11 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MER.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">18 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-1 offset-2" style="border-right: 2px solid #b40047;">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt; ">FINALE</p>
                            </div>
                            <div class="col-sm-1">
                                <img style="max-height: 74px" src="{{asset('/public/images/STORMWIN_CAFFEE_LOGO_PINK.png')}}" class="img-fluid">
                            </div>
                            <div class="col-sm-2 offset-5 text-center pt-3">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">LUNDI.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">24 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4 offset-4 text-center">
                                <p style="font-family: 'Lato Black'; font-size: 16pt ">COUNTER STRIKE GO</p>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-1 offset-2" style="border-right: 2px solid #b40047; border-bottom: 2px solid #b40047;">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt ">MATCHS</p>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">27 <span style="font-size: 13.88pt">MARS</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">03 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">10 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center" style="border-bottom: 2px solid #b40047">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">17 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5em">
                            <div class="col-sm-1 offset-2" style="border-right: 2px solid #b40047;">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt; ">FINALE</p>
                            </div>
                            <div class="col-sm-1">
                                <img style="max-height: 74px" src="{{asset('/public/images/STORMWIN_CAFFEE_LOGO_PINK.png')}}" class="img-fluid">
                            </div>
                            <div class="col-sm-2 offset-5 text-center pt-3">
                                <div class="container">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MARDI.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 23.8pt ">24 <span style="font-size: 13.88pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                    <div class="col-sm-3 text-center ">
                        <h4 class="label-teser">LES FINALES</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJCWbULHje4EcROaOd_PJAMTE&key=AIzaSyBLqViswA5OpCVN5flkZuYP0AD-eCR8V5Y" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-sm-5 offset-1 text-justify">
                        <p style="font-family: Lato; font-size: 16pt;">Les deux finales auront lieux au caffée esport le <span style="font-family: 'Lato Black' ">Stormwin Coffee à Rouen. </span></p>
                        <p class="mb-5" style="font-family: Lato; font-size: 16pt;">Voici une carte (ci-contre) qui vous indiquera où se trouve le caffée.</p>
                        <div class="row mb-5">
                            <div class="col-sm-12" style="border-top: 1px solid black; margin-top: 26px; margin-bottom: -26px"></div>
                        </div>
                        <div class="row" style="margin-top: 6rem">
                            <div class="col-sm-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">COUNTER STRIKE GLOBAL OFFENSIVE : </p>
                                <p style="font-family: Forque; font-size: 18pt; color: #eb005d; margin-top: -1rem">MARDI 24 AVRIL</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">LEAGUE OF LEGENDS :</p>
                                <p style="font-family: Forque; font-size: 18pt; color: #eb005d; margin-top: -1rem">LUNDI 23 AVRIL</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">BONNE CHANCE À TOUTES ET À TOUS !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-zone" id="register-zone" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 offset-4 titles text-center">
                    <h4>INFORMATIONS</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-top: 100px; padding-left: 50px; padding-right: 75px">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row mb-5">
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <label for="name">ENTREZ LE NOM DE VOTRE ÉQUIPE</label>
                                    <input type="text" class="form-control form-control-teser" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="game">VEUILLEZ CHOISIR LE JEU</label>
                                    <select class="form-control form-control-teser" id="game" name="game" style="height: 42px;" required>
                                        <option value="Lol">League Of legend</option>
                                        <option value="Cs">Counter Strike Global Offesnive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">ENTREZ VOTRE MOT DE PASSE</label>
                                    <input type="password" class="form-control form-control-teser" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="passwordcheck">RÉÉCRIVEZ VOTRE MOT DE PASSE</label>
                                    <input type="password" class="form-control form-control-teser" id="passwordcheck" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">ENTREZ L'EMAIL DE VOTRE CHEF D'ÉQUIPE</label>
                                    <input type="email" class="form-control form-control-teser" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <label for="exampleInputEmail1">ENTREZ LE PRENOM (OU PSEUDO) DE CHACUN DES MEMBRES DE VOTRE EQUIPE :</label>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 1" name="player1" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 2" name="player2" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 3" name="player3" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 4" name="player4" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 5" name="player5" required>
                                </div>
                            </div>
                            <div class="col-sm-8" style="border-top: 1px solid white; margin-top: 26px; margin-bottom: -26px"></div>
                        </div>
                    </div>
                    <div class="col-sm-5 offset-1">
                        <div class="container-fluid" style="z-index: 1000;">
                            <div class="row">
                                <div class="col-sm-4 offset-4 register-title text-center">
                                    <h4 style="font-size: 21.87pt">ATTENTION</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row mb-5">
                                    <div class="register-text">
                                        <div class="row align-items-center">
                                            <div class="col-sm-12">
                                                <p class="text-justify" style="font-family: Lato; font-size: 16pt;">Les équipes doivent être <span style="font-family: 'Lato Black' ">obligatoirement composées de 5 joueurs sans remplacant.</span></p>
                                                <h4>&nbsp;</h4>
                                                <p class="text-justify" style="font-family: Lato; font-size: 16pt;">Les joueurs doivent <span style="font-family: 'Lato Black' ">être étudiants de la métropole Rouen Normandie. (Un certificat de scolarité vous sera demandé dans votre pannel utilisateur.)</span></p>
                                                <h4>&nbsp;</h4>
                                                <p style="font-family: Lato-Black-Italic; font-size: 16pt; color: #eb005d">L’inscription de votre équipe doit être faite qu’avec votre chef d’équipe seulement.</p>
                                                <div class="col-sm-12 text-right">
                                                    <div class="form-check">
                                                        <label class="form-check-label-teser">J'AI VU CE MESSAGE
                                                            <input class="form-checkbox-teser" type="checkbox" value="" required>
                                                            <span class="form-checkmark-teser"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-sm-2 offset-8 text-center align-self-center h-100">
                                        <button id="sub-btn" type="submit" class="btn btn-teser-4">S<span>'</span>INSCRIRE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="sponsor-zone">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center">
                    <p class="mt-5 mb-5" style="font-size: 22.73pt; color: white; font-family: Forque">MERCI A NOS PARTENAIRES</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-2 offset-1 text-center">
                    <img src="{{asset('/public/images/BDE_LABETE_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/CESPORT_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/UNIVROUEN_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/STORMWIN_CAFFEE_LOGO.png')}}" style="width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/cesi.png')}}" style="filter: brightness(0) invert(1);" class="img-fluid">
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    <footer class="footer-teser pb-5 pt-5" style="background: url({{asset('/public/images/background_v2.jpg')}}); background-repeat: no-repeat; background-size:cover; background-position: center;">
        <div class="container-fluid" style="margin-top: 3rem">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row justify-content-center mb-4">
                        <div class="col-sm-6 text-center h-100">
                            <button type="button" class="btn btn-teser-5" id="reg-btn">LIENS UTILES</button>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-sm-6 text-center">
                            <p style="font-family: Lato-Black-Italic; font-size: 10.84pt; color: white;  text-transform: uppercase">email : contact@teser.Fr</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-sm-1">
                            <img class="img-fluid" src="{{asset('/public/images/Facebook.png')}}">
                        </div>
                        <div class="col-sm-1 offset-1">
                            <img class="img-fluid" src="{{asset('/public/images/Twitter.png')}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 offset-2 text-center">
                    <p style="font-family: 'Lato Black'; font-size: 10.84pt; color: white;  text-transform: uppercase">tu veux nous poser une question ?
                        ou bien parler avec les autres participants ?</p>
                    <p style="font-family: 'Lato Black'; font-size: 14pt; color: white;  text-transform: uppercase">rejoins notre discord des maintenant :D</p>
                    <button type="button" class="btn btn-teser-4">REJOINDRE LE DISCORD</button>
                </div>
            </div>
            <div class="row" style="margin-top: 9rem">
                <div class="col-sm-4 offset-1 my-auto">
                    <p style="font-family: 'Lato Black'; font-size: 12pt; color: white;  text-transform: uppercase">la teser est un événement organisé par des étudiants de l’iut de rouen et du cesi exia.</p>
                    <p style="font-family: 'Lato Black'; font-size: 12pt; color: white;  text-transform: uppercase">cette manifestation bénéficie du soutien du Fonds de Solidarité et de Développement des Initiatives Etudiantes</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-5" style="border-top: 1px solid white; margin-top: 2.5em; margin-bottom: -2.5em"></div>
                <div class="col-sm-1">
                    <img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" class="img-fluid">
                </div>
                <div class="col-sm-5" style="border-top: 1px solid white; margin-top: 2.5em; margin-bottom: -2.5em"></div>
            </div>
            <div class="row">
                <div class="col-sm-2 offset-5 text-center">
                    <p style="font-family: Lato-Italic; font-size: 12pt; color: white">WEBDEV BY <span style="font-family: 'Lato Black' ">CES'ESPORT</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-4 text-center">
                    <p style="font-family: Lato-Italic; font-size: 12pt; color: white">LOGO ET WEBDESIGN BY <span style="font-family: 'Lato Black' ">BACHELET JULIEN</span></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4 offset-4 text-center">
                    <p style="color: white; font-family: Lato-Black; font-size: 12pt">@2018 TESER.FR</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<div id="mobile" class="d-sm-none d-block">
    <div class="head-home" style="background: url({{asset('/public/images/Bg_Mobile.png')}}) ; background-repeat: no-repeat; background-size:cover; background-position: center;">
    <div class="container-fluid" style="padding-top: 25px;">
        <div class="row justify-content-around" style="position: relative; z-index: 5;">
            <div class="col-5 text-center">
                <img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" style="width: 129px;">
            </div>
            <div class="col-5 text-center">
                <div style="position: absolute; top: 50%; left:50%; transform: translate(-50%,-50%);">
                    <img src="{{asset('/public/images/button_mobile.png')}}" style="height: 32px; width: 32px;">
                    <p style="color: white; font-family: Lato">Menu</p>
                </div>

            </div>
        </div>
        <div class="row justify-content-center" style="height: 80vh; width:  100vw; position:  absolute; top: 0; overflow: hidden">
            <div class="col-12 align-self-center text-center">
                <img src="{{asset('/public/images/titre_head.png')}}" class="img-fluid">
            </div>
        </div>
        <div class="spacer" style="height: 40vh;"></div>
        <div class="row">
            <div class="col-sm-12 text-center align-self-center">
                <p style="font-family: Lato-Black; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px;">FIN DES INSCRIPTIONS <span style="font-family: 'Lato Black' ">LE 24 MARS 2018</span></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-2 text-center align-self-center h-100">
                <button type="button" class="btn btn-teser-4" id="reg-btn">INSCRIPTIONS</button>
            </div>
            <div class="col-sm-2 text-center align-self-center h-100" style="margin-bottom: 5vh">
                <button type="button" class="btn btn-teser-5" id="reg-btn">REJOINDRE LE DISCORD</button>
            </div>
            <div class="col-sm-2 align-items-center text-center">
                <a id="info-arr"><img src="{{asset('/public/images/arrow_head.png')}}" style="height: 65px; cursor: pointer"></a>
            </div>
        </div>
    </div>
</div>
    <div class="about" id="about">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 titles text-center">
                    <h4>INFORMATIONS</h4>
                </div>
            </div>
            <div class="about-card" style="padding:25px 25px;">
                <div class="row">
                    <div class="col-sm-12 text-justify mt-5">
                        <p class="text-justify" style="font-family: Lato; font-size: 16pt;">La TESER, appelée aussi <span style="font-family: 'Lato Black' ">Tournoi ESport des Étudiants Rouennais</span> est un tournoi esport qui se concentre sur deux jeux uniquement : </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-justify">
                        <p style="font-family: Lato-Black-Italic; font-size: 16pt; color: #eb005d">LEAGUE OF LEGENDS <span style="font-family: 'Lato' ">et</span> COUNTER STRIKE GLOBAL OFFENSIVE</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-5 mb-3 text-justify">
                        <p style="font-family: Lato; font-size: 16pt;">
                            Cet événement est totalement gratuit et est résérvé exclusivement à tous les étudiants
                            <span style="font-family: Lato-Black-Italic; font-size: 16pt">de la Métropole Rouen Normandie.</span>
                            Il est organisé par des étudiants de l’IUT de Rouen et du CESi EXIA. Le tournoi s’organise sous forme de différents matchs hebdomadaires offline avec les deux finales qui se joueront au caffée esport
                            <span style="font-family: Lato-Black-Italic; font-size: 16pt">le Stormwin Coffee. Pour avoir plus de précisons vous pouvez désormais rejoindre notre Discord en cliquant</span>
                            <a class="teser-link3" href="">ici.</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-5 text-justify">
                        <p style="font-family: Lato-Black-Italic; font-size: 16pt;">De nombreux lots sont à gagner, si vous arrivez à vaincre toutes les équipes bien entendu. :p</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row justify-content-center mb-5">
                            <div class="col-11 text-center">
                                <h4 class="label-teser" style="font-size: 16pt;">LES DATES IMPORTANTES</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-1 text-center align-center" style="background-color: #eb005d; color: white; font-family: Lato-Black">
                                <p style="font-family: Lato-Black">LEAGUE OF LEGENDS</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-left">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt ">MATCHS</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">28 <span style="font-size: 10pt">MARS</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">04 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">11 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em;">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">18 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-left">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt;">FINALE</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">24 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-1 text-center align-center" style="background-color: #eb005d; color: white; font-family: Lato-Black">
                                <p style="font-family: Lato-Black">COUNTER STRIKE GO</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-4 text-left">
                                <p style="font-family: 'Lato Black'; font-size: 13.87pt ">MATCHS</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">27 <span style="font-size: 10pt">MARS</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">03 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">10 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="container-fluid">
                                    <div class="row">
                                        <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                                    </div>
                                    <div class="row" style="margin-top: -1.7em;">
                                        <p style="font-family: 'Lato Black'; font-size: 12pt ">17 <span style="font-size: 9pt">AVRIL</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-left">
                        <p style="font-family: 'Lato Black'; font-size: 13.87pt;">FINALE</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="container-fluid">
                            <div class="row">
                                <p style="font-family: 'Lato'; font-size: 11.9pt ">MAR.</p>
                            </div>
                            <div class="row" style="margin-top: -1.7em">
                                <p style="font-family: 'Lato Black'; font-size: 12pt ">24 <span style="font-size: 9pt">AVRIL</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                    <div class="col-sm-3 text-center ">
                        <h4 class="label-teser">LES FINALES</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-justify">
                        <p style="font-family: Lato; font-size: 16pt;">Les deux finales auront lieux au caffée esport le <span style="font-family: 'Lato Black' ">Stormwin Coffee à Rouen. </span></p>
                        <p class="mb-5" style="font-family: Lato; font-size: 16pt;">Voici une carte (ci-contre) qui vous indiquera où se trouve le caffée.</p>
                        <div class="row mb-5">
                            <div class="col-sm-12" style="border-top: 1px solid black; margin-top: 26px; margin-bottom: -26px"></div>
                        </div>
                        <div class="row" style="margin-top: 6rem">
                            <div class="col-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">COUNTER STRIKE GLOBAL OFFENSIVE : </p>
                                <p style="font-family: Forque; font-size: 18pt; color: #eb005d; margin-top: -1rem">MARDI 24 AVRIL</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">LEAGUE OF LEGENDS :</p>
                                <p style="font-family: Forque; font-size: 18pt; color: #eb005d; margin-top: -1rem">LUNDI 23 AVRIL</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJCWbULHje4EcROaOd_PJAMTE&key=AIzaSyBLqViswA5OpCVN5flkZuYP0AD-eCR8V5Y" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                                <p style="font-family: 'Lato-Black'; font-size: 16pt;">BONNE CHANCE À TOUTES ET À TOUS !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-zone" id="register-zone" >
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8 titles text-center">
                    <h4>INFORMATIONS</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-top: 100px;">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-12">
                            <div class="container-fluid" style="z-index: 1000;">
                                <div class="row justify-content-center">
                                    <div class="col-6 register-title text-center">
                                        <h4 style="font-size: 21.87pt">ATTENTION</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row mb-5">
                                        <div class="register-text">
                                            <div class="row align-items-center">
                                                <div class="col-sm-12">
                                                    <p class="text-justify" style="font-family: Lato; font-size: 16pt;">Les équipes doivent être <span style="font-family: 'Lato Black' ">obligatoirement composées de 5 joueurs sans remplacant.</span></p>
                                                    <h4>&nbsp;</h4>
                                                    <p class="text-justify" style="font-family: Lato; font-size: 16pt;">Les joueurs doivent <span style="font-family: 'Lato Black' ">être étudiants de la métropole Rouen Normandie. (Un certificat de scolarité vous sera demandé dans votre pannel utilisateur.)</span></p>
                                                    <h4>&nbsp;</h4>
                                                    <p style="font-family: Lato-Black-Italic; font-size: 16pt; color: #eb005d">L’inscription de votre équipe doit être faite qu’avec votre chef d’équipe seulement.</p>
                                                    <div class="col-sm-12 text-right">
                                                        <div class="form-check">
                                                            <label class="form-check-label-teser">J'AI VU CE MESSAGE
                                                                <input class="form-checkbox-teser" type="checkbox" value="" required>
                                                                <span class="form-checkmark-teser"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="name">ENTREZ LE NOM DE VOTRE ÉQUIPE</label>
                                    <input type="text" class="form-control form-control-teser" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="game">VEUILLEZ CHOISIR LE JEU</label>
                                    <select class="form-control form-control-teser" id="game" name="game" style="height: 42px;" required>
                                        <option value="Lol">League Of legend</option>
                                        <option value="Cs">Counter Strike Global Offesnive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password">ENTREZ VOTRE MOT DE PASSE</label>
                                    <input type="password" class="form-control form-control-teser" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="passwordcheck">RÉÉCRIVEZ VOTRE MOT DE PASSE</label>
                                    <input type="password" class="form-control form-control-teser" id="passwordcheck" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="email">ENTREZ L'EMAIL DE VOTRE CHEF D'ÉQUIPE</label>
                                    <input type="email" class="form-control form-control-teser" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <label for="exampleInputEmail1">ENTREZ LE PRENOM (OU PSEUDO) DE CHACUN DES MEMBRES DE VOTRE EQUIPE :</label>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 1" name="player1" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 2" name="player2" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 3" name="player3" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 4" name="player4" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-teser" placeholder="Joueur 5" name="player5" required>
                                </div>
                            </div>
                            <div class="col-sm-8"></div>
                        </div>
                        <div class="row mb-5 justify-content-center">
                            <div class="col-2 text-center align-self-center h-100">
                                <button id="sub-btn" type="submit" class="btn btn-teser-4">S<span>'</span>INSCRIRE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="sponsor-zone">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 text-center">
                    <p class="mt-5 mb-5" style="font-size: 22.73pt; color: white; font-family: Forque">MERCI A NOS PARTENAIRES</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-2 offset-1 text-center">
                    <img src="{{asset('/public/images/BDE_LABETE_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/CESPORT_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/UNIVROUEN_LOGO.png')}}" style="max-width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/STORMWIN_CAFFEE_LOGO.png')}}" style="width: 136px">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{asset('/public/images/cesi.png')}}" style="filter: brightness(0) invert(1);" class="img-fluid">
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    <footer class="footer-teser pt-5" style="background: url({{asset('/public/images/Bg_Mobile.png')}}); background-repeat: no-repeat; background-size:cover; background-position: center;">
        <div class="container-fluid" style="margin-top: 3rem">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p style="font-family: 'Lato Black'; font-size: 10.84pt; color: white;  text-transform: uppercase">tu veux nous poser une question ?
                        ou bien parler avec les autres participants ?</p>
                    <p style="font-family: 'Lato Black'; font-size: 14pt; color: white;  text-transform: uppercase">rejoins notre discord des maintenant :D</p>
                    <button type="button" class="btn btn-teser-4">REJOINDRE LE DISCORD</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-6 text-center">
                            <p style="font-family: Lato; font-size: 20pt; color: white;  text-transform: uppercase">EMAIL :</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-sm-6 text-center">
                            <p style="font-family: Lato-Black-Italic; font-size: 10.84pt; color: white;  text-transform: uppercase">contact@teser.Fr</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 text-center">
                            <p style="font-family: Lato; font-size: 20pt; color: white;  text-transform: uppercase">SUIVEZ NOUS :</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-2">
                            <img class="img-fluid" src="{{asset('/public/images/Facebook.png')}}">
                        </div>
                        <div class="col-2 offset-1">
                            <img class="img-fluid" src="{{asset('/public/images/Twitter.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <p style="font-family: Lato-Italic; font-size: 12pt; color: white">WEBDEV BY <span style="font-family: 'Lato Black' ">CES'ESPORT</span></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <p style="font-family: Lato-Italic; font-size: 12pt; color: white">LOGO ET WEBDESIGN BY <span style="font-family: 'Lato Black' ">BACHELET JULIEN</span></p>
                </div>
            </div>
            <div class="row mt-1 justify-content-center">
                <div class="col-10 text-center">
                    <p style="color: white; font-family: Lato-Black; font-size: 12pt">@2018 TESER.FR</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>
