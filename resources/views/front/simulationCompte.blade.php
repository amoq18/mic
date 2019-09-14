@extends('front.layouts.app')

@section('stylesheets')
<style type="text/css">
.contact_us_form .form-group input{
  height: 40px;
}

#step1Prev, #step2Prev {
	background: #333;
    border-color: #333;
    color: #fff;
    line-height: 25px;
    width: 90px;
    border-radius: 0px;
    margin-right: 20px;
}

#step1Next, #step0Next {
    background: #d1ab7fbf;
    border-color: #d1ab7fbf;
    line-height: 25px;
    width: 90px;
    border-radius: 0px;
    margin-right: 20px;
}

#SaveAccount {
    background: #369c15;
    border-color: #369c15;
    line-height: 25px;
    width: 90px;
    border-radius: 0px;
    margin-right: 20px;
}

table,td,th	{	font-family:Courier New;
								font-size:12px;
								font-weight:bold;
								color:#400040;
							}
	td,th	{	text-align:right;	}
</style>

@endsection

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Simuler un compte</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a href="javascript:;">Simulation de crédit</a>
            </div>
        </div>
    </div>
    
    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">

						    <div id='progress'><div id='progress-complete'></div></div>

						    {{-- <form id="SignupForm" action="" method="post" class="contact_us_form" novalidate="novalidate"> --}}
						    <form	name="Saisie" method="post"
					action="javascript:Calcul();">
						    	@csrf
					        	@if(isset($succes))
				                	<span style="color: white; background: #369c15; margin: 20px 0px 0px 0px;">{{ $succes }}</span>
				                @endif
						        <fieldset style="margin: 10px">
						            <legend>ENTREZ VOS INFORMATIONS</legend>
						            <div class="row form-group">
						            	<div class="col-md-6">
						                    <label for="nom">Nom</label>
						                    <input id="nom" name="nom" type="text" class="form-control" required />
						                </div>
						            	<div class="col-md-6">
						                    <label for="Montant">Montant</label>
						                    <input id="Montant" name="Montant" type="number" class="form-control" required />
						                </div>
						            </div>

						            <div class="row form-group">
						            	<div class="col-md-6">
						                    <label for="Duree">Délai de remboursement (en Mois)</label>
						                    <input id="Duree" name="Duree" type="number" class="form-control" required />
						                </div>
						                <div class="col-md-6">
						                    <label for="devise">Devise</label>
						                    <select name="devise">
						                    	<option value="usd">Dollar usd</option>
						                    </select>
						                </div>
						            </div>

						            <div class="row form-group">
						                <div class="col-md-12">
						                    <input id="Taux" name="Taux" type="hidden" value="3" class="form-control" required />
						                </div>
						                <input type="checkbox" name="imprimer" /> Imprimer
						            </div>
						        </fieldset>
						        <p>
						            <input class="btn btn-success"	type="submit" name="Lancer" value="Cliquer ici pour lancer le calcul" />
						        </p>
						    </form>
						    <div class="col-md-8" style="margin-top: 40px">
						    	<h3>Résultats du la simulation</h3>
						    	<div id="result"></div>
						    </div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/front/js/pret.js') }}"></script>
@endsection