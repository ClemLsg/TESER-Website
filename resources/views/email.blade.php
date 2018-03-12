<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 12/03/2018
 * Time: 00:43
 */
?>

<!doctype html>
<html lang="fr">
<html lang="en">
<head>
    <link href="{{ asset('/public/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/public/css/teser.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 offset-1">
            <img class="img-fluid" src="<?php echo $message->embed({{asset('/public/images/logo_email.jpg')}}); ?>">
        </div>
    </div>
    <div class="row" style="margin-top: 9rem">
        <div class="col-sm-10 offset-1">
            <h2 style="font-family: 'Montserrat', sans-serif; color: #001846; font-weight: bolder;">MERCI DE VOUS ETRE INSCRIT AU TESER !</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 offset-1" style="border-bottom: solid 2px #001846">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-10 offset-1">
            <p style="font-family: 'Montserrat', sans-serif; color: #001846; font-weight: bolder;">VOUS POUVEZ DÉSORMAIS VOUS CONNECTER A TOUT MOMENT POUR ACCÉDER AU PANEL DE VOTRE ÉQUIPE? C'EST PAS BEAU CA ?</p>
            <p style="font-family: 'Montserrat', sans-serif; color: #001846; font-weight: bolder;">ËTES VOUS PRËTS A VOUS BATTRE POUR REMPORER LE TESER ? TOUT LE STAFF DU TESER VOUS SOUHAITE BON COURRAGE !</p>
            <p style="font-family: 'Montserrat', sans-serif; color: #001846; font-weight: bolder;">ET N'OUBLIEZ PAS, LE PRINCIPAL C'EST DE S'AMUSER ! (MDR T'AS CRU? GAGNER C'EST MIEUX...)</p>
        </div>
    </div>
</div>
<footer style="position: absolute; width: 100vw; bottom: 0">
    <div class="row justify-content-center">
        <div class="col-sm-3 text-center">
            <h4 style="font-family: 'Montserrat', sans-serif; color: #eb005d; font-weight: bolder;">WWW.TESER.FR</h4>
        </div>
        <div class="col-sm-3 text-center">
            <h4 style="font-family: 'Montserrat', sans-serif; color: #eb005d; font-weight: bolder;">CONTACT@TESER.FR</h4>
        </div>
        <div class="col-sm-3 text-center">
            <h4 style="font-family: 'Montserrat', sans-serif; color: #eb005d; font-weight: bolder;">FACEBOOK</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-2 text-center">
            <p style="font-family: 'Montserrat', sans-serif; color: grey; font-weight: bolder;">ÉVÉNEMENT ORGANISÉ PAR DES ÉTUDIANTS DE L'IUT DE ROUEN ET DU CESI EXIA</p>
            <p style="font-family: 'Montserrat', sans-serif; color: grey; font-weight: bolder;">CETTE MANIFESTATION BÉNÉFICIE DU SOUTIEN DU FONDS DE SOLIDARITÉ ET DE DÉVELOPPEMENT DES INITIATIVES ÉTUDIANTES</p>
        </div>
    </div>
</footer>
</body>
</html>

