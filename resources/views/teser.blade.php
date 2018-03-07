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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>

{{--<body>--}}
    {{--<div class="head-home" style="background: url({{asset('/public/images/HEADER_IMG.png')}}) ; background-repeat: no-repeat; background-size:cover; background-position: center;">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-sm-5 text-center">--}}
                        {{--<p style="font-family: Forque; color: white; font-size: 33px;">OUVERTURE DES INSCRIPTIONS EN FEVRIER</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 text-center">--}}
                    {{--<img src="{{asset('/public/images/LOGO_officiel.png')}}" class="img-fluid">--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6 text-center">--}}
                            {{--<button type="button" class="btn btn-teser" id="info-btn">Information</button>--}}
                        {{--</div>--}}
                        {{--@guest--}}

                        {{--<div class="col-sm-6 text-center">--}}
                            {{--<button type="button" class="btn btn-teser" id="reg-btn">Inscription</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row justify-content-end">--}}
                        {{--<div class="col-sm-6" style="color: white; text-align: center">--}}
                            {{--<p>DEJA INSCRIT ? <a class="teser-link" href="{{route('login')}}">SE CONNECTER</a> </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@else--}}
                    {{--<div class="col-sm-6 text-center">--}}
                        {{--<button type="button" class="btn btn-teser"><a class="teser-link2" href="{{route('compte')}}">mon compte</a></button>--}}
                    {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-end">--}}
                {{--<div class="col-sm-6" style="color: white; text-align: center">--}}
                    {{--<a class="teser-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">SE DECONNECTER</a>--}}
                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--{{ csrf_field() }}--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
                {{--@endguest--}}

            {{--</div>--}}
            {{--<div class="row align-items-end thirdheight">--}}
                {{--<div class="col-sm-11 offset-1">--}}
                    {{--<h2 style="font-family: Forque; color: white; font-size: 150px; font-weight: 400">TOURNOI <span style="color: #eb005d">eSPORT</span></h2>--}}
                    {{--<h2 style="font-family: Axettac; color: white; font-size: 100px;">des Etudiants Rouennais</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row align-items-end thirdheight" style="">--}}
                {{--<div class="col-sm-4 offset-1" style="border-top: 1px solid white">--}}
                    {{--<h3 style="font-family: Forque; color: white; font-size: 40px; font-weight : 400 ;">LEAGUE OF LEGENDS & COUNTER STRIKE</h3>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 offset-5 text-center">--}}
                    {{--<img src="{{asset('/public/images/ARROW.png')}}" class="img-fluid Bounce" id="button-scroll" target="register-zone" style="filter: invert(100%); width: 60px">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="about" id="about">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 offset-4 titles text-center">--}}
                    {{--<h4>INFORMATIONS TOURNOI</h4>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="about-card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<div style="border-bottom: 1px solid black">--}}
                            {{--<h4>&nbsp;</h4>--}}
                            {{--<h4>Le TESER est un tournoi eSport qui se concentre sur deux jeux uniquement :</h4>--}}
                            {{--<h3 style="color: #eb005d">league Of Legends et Counter Strike</h3>--}}
                            {{--<h4>&nbsp;</h4>--}}
                            {{--<h4>Cet évènement est totalement gratuit et réservé exclusivement à tous les étudiants de l'université de rouen normandie.--}}
                                {{--Le tournoi s'organise sous forme de différents matchs hebdomadaires offline avec une finale au caffée esport le Stormwin Coffee--}}
                            {{--</h4>--}}
                            {{--<h4>&nbsp;</h4>--}}
                            {{--<h4>De nombreux lots a gagner, si vous arrivez jusqu'en finale bien entendu :p.</h4>--}}
                            {{--<h3>&nbsp;</h3>--}}
                            {{--<h3 style="color: #eb005d">LES INSCRIPTIONS AU TESER SERONT OUVERTES COURANT DU MOIS DE FEVRIER</h3>--}}
                            {{--<h4>&nbsp;</h4>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-4 offset-4">--}}
                                {{--<br>--}}
                                {{--<br>--}}
                                {{--<button type="button" class="btn btn-teser-2">VOIR</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 offset-1">--}}
                        {{--<h4>&nbsp;</h4>--}}
                        {{--<h4>DEBUT DU TOURNOI & FIN DU TOURNOI :</h4>--}}
                        {{--<h4>&nbsp;</h4>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6" style="border: 6px solid #eb005d; padding: 20px; padding-left: 50px">--}}
                                {{--<h3 style="color: #eb005d;">DU {DATE} AU {DATE}</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h4>&nbsp;</h4>--}}
                        {{--<h4>&nbsp;</h4>--}}
                        {{--<h4>LA FINALE DU TOURNOI AURA LIEU AU STORMWIN COFFEE LE {DATE}.</h4>--}}
                        {{--<h4>&nbsp;</h4>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-10 offset-1">--}}
                                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                    {{--<iframe class="embed-responsive-item" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJCWbULHje4EcROaOd_PJAMTE&key=AIzaSyCVeaSAfA3GMUym_i9bcV8Q7VGyCxgJMe8" allowfullscreen></iframe>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<br>--}}
    {{--</div>--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-4 offset-1 titles text-center">--}}
                {{--<h4>INSCRIPTION AU TOURNOI</h4>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="register-zone" id="register-zone">--}}
        {{--<div class="container-fluid" style="padding-top: 100px; padding-left: 50px; padding-right: 75px">--}}
            {{--<form method="POST" action="{{ route('register') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="name">ENTREZ LE NOM DE VOTRE EQUIPE</label>--}}
                            {{--<input type="text" class="form-control form-control-teser" id="name" name="name" required>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="game">VEUILLEZ CHOISIR LE JEU</label>--}}
                            {{--<select class="form-control form-control-teser" id="game" name="game" style="height: 52px;" required>--}}
                                {{--<option value="Lol">League Of legend</option>--}}
                                {{--<option value="Cs">Counter Strike Global Offesnive</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<br>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="email">ENTREZ L'EMAIL DU CHEF D'EQUIPE</label>--}}
                            {{--<input type="email" class="form-control form-control-teser" name="email" id="email" required>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<br>--}}
                        {{--<label for="exampleInputEmail1">ENTREZ LE PRENOM (OU PSEUDO) DE CHACUN DES MEMBRES DE VOTRE EQUIPE :</label>--}}
                        {{--<br>--}}
                        {{--<br>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control form-control-teser" placeholder="Joueur 1" name="player1" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control form-control-teser" placeholder="Joueur 2" name="player2" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control form-control-teser" placeholder="Joueur 3" name="player3" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control form-control-teser" placeholder="Joueur 4" name="player4" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control form-control-teser" placeholder="Joueur 5" name="player5" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-8" style="border-top: 1px solid white; margin-top: 26px; margin-bottom: -26px"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="password">ENTREZ VOTRE MOT DE PASSE</label>--}}
                                    {{--<input type="password" class="form-control form-control-teser" id="password" name="password" required>--}}
                                {{--</div>--}}
                                {{--<br>--}}
                                {{--<br>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="passwordcheck">REECRIVEZ VOTRE MOT DE PASSE</label>--}}
                                    {{--<input type="password" class="form-control form-control-teser" id="passwordcheck" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<div class="container-fluid" style="z-index: 1000;">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-4 offset-4 register-title text-center">--}}
                                    {{--<h4>ATTENTION</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row h-50">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="register-text">--}}
                                    {{--<div class="row h-100 align-items-center">--}}
                                        {{--<div class="col-sm-12 ">--}}
                                            {{--<h4>LES EQUIPES DOIVENT ETRE OBLIGATOIREMENT COMPOSEES DE 5 JOUEURS SANS REMPLACANT.</h4>--}}
                                            {{--<h4>&nbsp;</h4>--}}
                                            {{--<h4>LES JOUEURS DOIVENT ETRE ETUDIANTD A L'UNIVERSITE DE ROUEN NORMANDIE.</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--<div class="row align-items-center">--}}
                    {{--<div class="col-sm-2 offset-10">--}}
                        {{--<button type="submit" class="btn btn-teser-3">S'INSCRIRE</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<br>--}}
    {{--</div>--}}
    {{--<div class="sponsor-zone">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 offset-4 titles text-center">--}}
                    {{--<br>--}}
                    {{--<h4 style="font-weight : 400 ;">MERCI A NOS PARTENAIRES</h4>--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--<br>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-sm-2 offset-1 text-center">--}}
                    {{--<img src="{{asset('/public/images/BDE_LABETE_LOGO.png')}}" style="width: 136px">--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 text-center">--}}
                    {{--<img src="{{asset('/public/images/CESPORT_LOGO.png')}}" style="width: 136px">--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 text-center">--}}
                    {{--<img src="{{asset('/public/images/UNIVROUEN_LOGO.png')}}" style="width: 136px">--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 text-center">--}}
                    {{--<img src="{{asset('/public/images/STORMWIN_CAFFEE_LOGO.png')}}" style="width: 136px">--}}
                {{--</div>--}}
                {{--<div class="col-sm-2 text-center">--}}
                    {{--<img src="{{asset('/public/images/CESI_LOGO.png')}}" style="width: 136px; filter: brightness(0) invert(1);">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--<br>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<footer class="footer-teser" style="background: url({{asset('/public/images/FOOTER_IMG.png')}}); background-repeat: no-repeat; background-size:cover; background-position: center;">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-3 offset-1 my-auto">--}}
                    {{--<img src="{{asset('/public/images/Facebook.png')}}" style="width: 53px">--}}
                    {{--<img src="{{asset('/public/images/Instagram.png')}}" style="width: 53px; margin-left: 53px">--}}
                    {{--<img src="{{asset('/public/images/Twitter.png')}}" style="width: 53px; margin-left: 53px">--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 offset-4 text-center">--}}
                    {{--<h3 style="color: white; font-size : 40px ;font-weight : 400 ; font-family: Forque">TU VEUX NOUS POSER UNE QUESTION ?</h3>--}}
                    {{--<h4>&nbsp;</h4>--}}
                    {{--<button type="button" class="btn btn-teser-4">REJOINDRE LE DISCORD</button>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-sm-4 offset-1" style="border-top: 1px solid white; margin-top: 26px; margin-bottom: -26px"></div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<img src="{{asset('/public/images/BANNER_LOGO_DEGRADE_officiel.png')}}" class="img-fluid">--}}
                {{--</div>--}}
                {{--<div class="col-sm-4" style="border-top: 1px solid white; margin-top: 26px; margin-bottom: -26px"></div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 offset-4 text-center">--}}
                    {{--<h3 style="color: white">@2018 TESER.FR</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 offset-4 text-center">--}}
                    {{--<h5 style="color: white">LOGO ET WEBDESIGN BY BACHELET JULIEN</h5>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 offset-4 text-center">--}}
                    {{--<h5 style="color: white">WEBDEV BY CES'ESPORT</h5>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<br>--}}
    {{--</footer>--}}
{{--</body>--}}
<body>
<div class="head-home" style="background: url({{asset('/public/images/background_v2.jpg')}}) ; background-repeat: no-repeat; background-size:cover; background-position: center;">
    <div class="container-fluid" style="padding-top: 25px">
        <div class="row align-items-center">
            <div class="col-sm-2 text-center">
                <img src="{{asset('/public/images/LOGO_officiel.png')}}" style="height: 129px; width: 129px;">
            </div>
            <div class="col-sm-2 offset-4 text-center align-self-center h-100">
                <p class="align-middle" style="font-family: Forque; color: white; font-size: 18pt;">INFORMATIONS</p>
            </div>
            <div class="col-sm-2 text-center align-self-center h-100">
                <button type="button" class="btn btn-teser-4" id="reg-btn">INSCRIPTIONS</button>
            </div>
            <div class="col-sm-2 text-center align-self-center h-100">
                <p class="align-middle" style="font-family: Forque; color: white; font-size: 18pt;">SE CONNECTER</p>
            </div>
        </div>
        <div class="row justify-content-center" style="height: 100vh; width:  100vw; position:  absolute; top: 0; overflow: hidden">
            <div class="col-sm-12 align-self-center">
                <img src="{{asset('/public/images/titre_head.png')}}" class="img-fluid">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="row">
            <div class="col-sm-5 text-right align-self-center" style="background-color: #eb005d;border-bottom-right-radius: 25px;border-top-right-radius: 25px;">
                <p style="font-family: Lato; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px;">FIN DES INSCRIPTIONS <span style="font-family: 'Lato Black' ">LE 24 MARS 2018</span></p>
            </div>
        </div>
        <div class="spacer2"></div>
        <div class="row justify-content-center">
            <div class="col-sm-2 offset-4 align-items-center text-center">
                <img src="{{asset('/public/images/arrow_head.png')}}" style="height: 65px;">
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
                    <div class="col-sm-3 text-center ">
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
                    <div class="col-sm-2 text-center ">
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


</body>
</html>
