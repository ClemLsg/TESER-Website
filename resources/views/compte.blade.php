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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/images/favicon.ico')}}">
    <title>Compte</title>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/public/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/public/js/teser.js') }}" ></script>
</head>
<body>
<header style="background: url({{asset('/public/images/fond.jpg')}}) no-repeat fixed center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 text-center">
                <img src="{{asset('/public/images/LOGO_officiel.png')}}" style="height: 129px; width: 129px;">
            </div>
            <div class="col-sm-4 offset-2 text-center my-auto">
                <p class="align-middle text-uppercase" style="font-family: Lato-Black; font-size: 16pt; color: white; letter-spacing: 0.075em">{{Auth::user()->name}}</p>
            </div>
            <div class="col-sm-2 text-center align-self-center h-100">
                <a class="btn btn-teser-4" href="{{route('logout')}}">SE DECONNECTER</a>
            </div>
            <div class="col-sm-2 text-center align-self-center h-100">
                <a class="btn btn-teser-4" href="{{route('home')}}">SORTIR</a>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid" style="background-color: #eeeeee; overflow-x: hidden">
    <div class="row">
        <div class="col-sm-3" style=" background-color: white;">
            <div class="row">
                <div class="col-sm-12 text-center pt-4">
                    <p style="font-family: Forque; font-size: 24pt; color: #001846; letter-spacing: 0.075em">LISTE DES JOUEURS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 text-center teser-machin-rose mt-2">
                    <p style="font-family: Forque; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px; letter-spacing: 0.075em">{{Auth::user()->players->get(0)->name}}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('update') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-10 text-center teser-machin-bleu mt-5">
                        <p style="font-family: Forque; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px; letter-spacing: 0.075em">{{Auth::user()->players->get(1)->name}}</p>
                    </div>
                    <div class="col-sm-10 text-center mt-4 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-teser-alt" placeholder="@if (Auth::user()->players->get(1)->email == NULL)ENTREZ L'EMAIL DE CE JOUEUR
                                    @else {{Auth::user()->players->get(1)->email}}

                                    @endif" name="player1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 text-center teser-machin-bleu">
                        <p style="font-family: Forque; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px; letter-spacing: 0.075em">{{Auth::user()->players->get(2)->name}}</p>
                    </div>
                    <div class="col-sm-10 text-center mt-4 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-teser-alt" placeholder="@if (Auth::user()->players->get(2)->email == NULL)ENTREZ L'EMAIL DE CE JOUEUR
                                    @else {{Auth::user()->players->get(2)->email}}

                            @endif" name="player2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 text-center teser-machin-bleu">
                        <p style="font-family: Forque; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px; letter-spacing: 0.075em">{{Auth::user()->players->get(3)->name}}</p>
                    </div>
                    <div class="col-sm-10 text-center mt-4 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-teser-alt" placeholder="@if (Auth::user()->players->get(3)->email == NULL)ENTREZ L'EMAIL DE CE JOUEUR
                                    @else {{Auth::user()->players->get(3)->email}}

                            @endif" name="player3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 text-center teser-machin-bleu">
                        <p style="font-family: Forque; color: white; font-size: 16pt;margin-bottom: 8px;margin-top: 8px; letter-spacing: 0.075em">{{Auth::user()->players->get(4)->name}}</p>
                    </div>
                    <div class="col-sm-10 text-center mt-4">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-teser-alt" placeholder="@if (Auth::user()->players->get(4)->email == NULL)ENTREZ L'EMAIL DE CE JOUEUR
                                    @else {{Auth::user()->players->get(4)->email}}

                            @endif" name="player4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 offset-6 text-right">
                        <button type="submit" class="teser-link" style="font-family: Forque; font-size: 16pt; color: #001846; background: none; border: none" >SAUVEGARDER</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-9">
            <form method="POST" enctype="multipart/form-data" action="{{ route('update') }}">
                {{ csrf_field() }}
                <div class="row mt-4 ml-2" style="background-color: white; border-radius: 25px; margin-right: 0.5rem">
                    <div class="col-sm-4 text-justify">
                        <p class="text-center" style="font-family: Forque; font-size: 16pt; color: #001846;">ENVOI DU CERTIFICAT D'ETUDE</p>
                        <p style="color: #001846;">Cela nous permet d’avoir uniquement des étudiants de la Métropole Rouen Normandie inscrit à la TESER.</p>
                        <p style="font-family: Lato-Black; font-size: 12pt; color: #001846;">Veuillez envoyer le certificat d’étude de chacun des joueurs de votre équipe.</p>
                    </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="playerid" style="color: #001846; font-family: Lato">Entrez le pseudo du joueur</label>
                                <input type="text" class="form-control form-control-teser-alt" id="playerid" name="playerid">
                            </div>
                            <div class="form-group">
                                <input style="display: none" type="file" name="certif" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>ENVOYER LE CERTIFICAT</span></label>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right pt-5">
                            <button type="submit" class="teser-link mt-5 pt-5" style="font-family: Forque; font-size: 16pt; color: #001846; background: none; border: none" >ENVOYER</button>
                        </div>
                </div>
            </form>
            <div class="row mt-4 ml-2">
                <div class="col-sm-7 p-4" style="background-color: white; border-radius: 25px;">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://widget.toornament.com/tournaments/1245331741817806848/navigator?_locale=fr_FR&theme=light" frameborder="0" allowfullscreen="true"></iframe>
                    </div>
                </div>
                <div class="col-sm-4 ml-5 justify-content-center ">
                    <div class="row justify-content-center mb-4" style="background-color: white; border-radius: 25px;">
                        <div class="col-sm-12 text-center">
                            <p style="font-family: Forque; font-size: 16pt; color: #001846;">CHANGEMENT DE VOTRE ADRESSE EMAIL</p>
                        </div>
                        <form method="POST" action="{{ route('update') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" style="color: #001846; font-family: Lato">Nouvelle adresse email</label>
                                <input type="email" class="form-control form-control-teser-alt" placeholder="{{Auth::user()->email}}" id="email" name="email">
                            </div>
                            <div class="col-sm-4 offset-6 text-right">
                                <button type="submit" class="teser-link" style="font-family: Forque; font-size: 16pt; color: #001846; background: none; border: none" >MODIFIER</button>
                            </div>
                        </form>
                    </div>
                    <div class="row justify-content-center" style="background-color: white; border-radius: 25px;">
                        <div class="col-sm-12 text-center">
                            <p style="font-family: Forque; font-size: 16pt; color: #001846;">CHANGEMENT DE VOTRE MOT DE PASSE</p>
                        </div>
                        <form method="POST" action="{{ route('update') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="passwordold" style="color: #001846; font-family: Lato">Ancien mot de passe</label>
                                    <input type="password" class="form-control form-control-teser-alt" id="passwordold" name="passwordold">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="passwordnew" style="color: #001846; font-family: Lato">Nouveau mot de passe</label>
                                    <input type="password" class="form-control form-control-teser-alt" id="passwordnew" name="passwordnew">
                                </div>
                            </div>
                            <div class="col-sm-4 offset-6 text-right">
                                <button type="submit" class="teser-link" style="font-family: Forque; font-size: 16pt; color: #001846; background: none; border: none" >MODIFIER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>