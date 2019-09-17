@extends('front.layouts.app')

@section('stylesheets')
    <style type="text/css">
        p{
            font-size: 18px;
            padding: 7px;
        }
        .well2 {
            min-height: 20px;
            color: white;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #ce0027;
            border: 1px solid #ce0027;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
        }
    </style>
@endsection

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Gérer son compte</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="#">Gérer son compte</a>
            </div>
        </div>
    </div>

    <!--================Our About Area =================-->
    <section class="our_about_area">
        <div class="container-fluid">
            <div class="section_body">
                <center><h1 style="margin-bottom: 50px">Mon Compte</h1></center>
                <div class="col-sm-3 well" style="margin-right: 20px; padding: 20px">
                    <div class="row"><center style="margin-bottom: 20px"><img src="{{ asset('') }}assets/front/img/avatar.png"></center></div>
                    <p style="color: #606060">Nom: {{$user->nom}}</p>
                    <p style="color: #606060">Prénoms: {{$user->prenom}}</p>
                    <p style="color: #606060">Email: {{$user->email}}</p>
                    <p style="color: #606060">Pays: {{$user->pays}}</p>
                </div>
                <div class="col-sm-8 well">
                    <div class="row well2"><center><h3>Votre solde actuel est de: {{$user->montantCompte}} {{$user->devise}}s</h3></center></div>
                    <legend>Informations comptes</legend>
                    <div>
                        <p>Nom: {{$user->nom}}</p>
                        <p>Prénoms: {{$user->prenom}}</p>
                        <p>Téléphone: {{$user->telephone}}</p>
                        <p>Code Postal: {{$user->codePostal}}</p>
                        @if (isset($virement))
                            <p>Nom de la banque: {{$banque->nameBanque}}</p>
                            <p>IBAN: {{$banque->iban = $banque->iban}}</p>
                            <p>SWIFT: {{$banque->bicswift = $banque->bicswift}}</p>
                        @endif
                    </div>
                </div>
                <center>
                    <a href="{{url('virement')}}" class="btn green_submit_btn form-control">Faire un virement</a>
                </center>
            </div>
        </div>
    </section>
@endsection
