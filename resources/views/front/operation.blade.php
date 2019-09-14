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
		    background: #fc0134bf;
		    border-color: #fc0134bf;
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
	</style>
@endsection

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Démarrer une opération</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a href="javascript:;">Démarrer une opération</a>
            </div>
        </div>
    </div>
    
    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                <div class="section_title">
	                <h2>Entrez vos informations pour bénéficir d'un prêt</h2>
                </div>
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">

					    <div id='progress'><div id='progress-complete'></div></div>

					    <form id="SignupForm" action="{{ route('front.operationPost') }}" method="post" class="contact_us_form">
					    	@csrf
					    	@if(Session::has('success'))
                                <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">{{ Session::get('success') }}</strong>
                            @endif
					        <fieldset style="margin-top: 10px">
					            <legend>1. Informations Personnelles</legend>
					            <div class="row form-group">
					            	<div class="col-md-6">
					                    <label for="nom">Nom</label>
					                    <input id="nom" name="nom" type="text" class="form-control" required value="{{ old('nom') }}" />
						                @if($errors->has('nom'))
						                	{{ $errors->first('nom') }}
						                @endif
					                </div>
					                <div class="col-md-6">
					                    <label for="prenom">Prénom</label>
					                    <input id="prenom" name="prenom" type="text" class="form-control" value="{{ old('prenom') }}" required />
					                    @if($errors->has('prenom'))
					                    	{{ $errors->first('prenom') }}
					                    @endif
					                </div>
					            </div>

					            <div class="row form-group">
					            	<div class="col-md-6">
					                    <label for="telephone">Téléphone</label>
					                    <input id="telephone" name="telephone" type="text" class="form-control"  value="{{ old('telephone') }}" required />
					                    @if($errors->has('telephone'))
					                    	{{ $errors->first('telephone') }}
					                    @endif
					                </div>
					                <div class="col-md-6">
					                    <label for="date_naissance">Date de naissance</label>
					                    <input id="date_naissance" name="date_naissance" type="date" class="form-control"  value="{{ old('date_naissance') }}" required />
					                    @if($errors->has('date_naissance'))
					                    	{{ $errors->first('date_naissance') }}
					                    @endif
					                </div>
					            </div>

					            <div class="row form-group">
					            	<div class="col-md-6">
					                    <label for="adresse">Adresse</label>
					                    <input id="adresse" name="adresse" type="text" class="form-control"  value="{{ old('adresse') }}" required />
					                    @if($errors->has('adresse'))
					                    	{{ $errors->first('adresse') }}
					                    @endif
					                </div>
					                <div class="col-md-6">
					                    <label for="pays">Pays</label>
					                    <input id="pays" name="pays" type="text" class="form-control"  value="{{ old('pays') }}" required />
					                    @if($errors->has('pays'))
					                    	{{ $errors->first('pays') }}
					                    @endif
					                </div>
					            </div>
					            <div class="row form-group">
					            	<div class="col-md-6">
					                    <label for="ville">Ville</label>
					                    <input id="ville" name="ville" type="text" class="form-control"  value="{{ old('ville') }}" required />
					                    @if($errors->has('ville'))
					                    	{{ $errors->first('ville') }}
					                    @endif
					                </div>
					                <div class="col-md-6">
					                    <label for="region">Région</label>
					                    <input id="region" name="region" type="text" class="form-control"  value="{{ old('region') }}" required />
					                    @if($errors->has('region'))
					                    	{{ $errors->first('region') }}
					                    @endif
					                </div>
					            </div>

					            <div class="form-group">
					            	<label for="codePostal">Code Postal</label>
					            	<input id="codePostal" name="codePostal" type="text" class="form-control"  value="{{ old('codePostal') }}" required />
					            	@if($errors->has('codePostal'))
				                    	{{ $errors->first('codePostal') }}
				                    @endif
					            </div>
					        </fieldset>

					        <fieldset>
					            <legend>2. Information sur le prêt</legend>
					            <div class="form-group">
					            	<label for="montantPret">Montant du prêt désiré</label>
					            	<input id="montantPret" name="montantPret" type="number" class="form-control"  value="{{ old('montantPret') }}" required />
					            	@if($errors->has('montantPret'))
				                    	{{ $errors->first('montantPret') }}
				                    @endif
					            </div>

					            <div class="form-group">
					            	<label for="rolePret">A quoi vous servira le prêt ?</label>
					            	<input id="rolePret" name="rolePret" type="text" class="form-control" value="{{ old('rolePret') }}" />
					            	@if($errors->has('rolePret'))
				                    	{{ $errors->first('rolePret') }}
				                    @endif
					            </div>

					            <div class="form-group">
					            	<label for="idCard">ID Card</label>
					            	<input id="idCard" name="idCard" type="text" class="form-control" required value="{{ old('idCard') }}" />
					            	@if($errors->has('idCard'))
				                    	{{ $errors->first('idCard') }}
				                    @endif
					            </div>

					            <div class="form-group">
					            	<label for="codeBancaire">Code bancaire</label>
					            	<input id="codeBancaire" name="codeBancaire" type="text" class="form-control" required value="{{ old('codeBancaire') }}" />
					            	@if($errors->has('codeBancaire'))
				                    	{{ $errors->first('codeBancaire') }}
				                    @endif
					            </div>

					            <div class="form-group">
					            	<label for="delaiRemboursement">Délai de paiement (en mois)</label>
					            	<input id="delaiRemboursement" name="delaiRemboursement" type="number" class="form-control" value="{{ old('delaiRemboursement') }}" required />
					            	@if($errors->has('delaiRemboursement'))
				                    	{{ $errors->first('delaiRemboursement') }}
				                    @endif
					            </div>
					        </fieldset>

					        <fieldset class="form-horizontal" role="form">
					            <legend>3. Emploi et Finance</legend>
					        	<div class="form-group">
					            	<label for="statutProfessionnel">Statut Professionnel</label>
					            	<input id="statutProfessionnel" name="statutProfessionnel" type="text" class="form-control" required value="{{ old('statutProfessionnel') }}" />
					            	@if($errors->has('statutProfessionnel'))
				                    	{{ $errors->first('statutProfessionnel') }}
				                    @endif
					            </div>

					        	<div class="form-group">
					            	<label for="email">Email</label>
					            	<input id="email" name="email" type="text" class="form-control" required value="{{ old('email') }}" />
					            	@if($errors->has('email'))
				                    	{{ $errors->first('email') }}
				                    @endif
					            </div>

					        	<div class="form-group">
					            	<label for="revenuAnnuel">Revenu Annuel</label>
					            	<input id="revenuAnnuel" name="revenuAnnuel" type="number" class="form-control" required value="{{ old('revenuAnnuel') }}" />
					            	@if($errors->has('revenuAnnuel'))
				                    	{{ $errors->first('revenuAnnuel') }}
				                    @endif
					            </div>

					            <div class="form-group">
					            	<label for="revenuAnnuel">Comment avez-vous entendu parler de nous ?</label>
					            	<input id="revenuAnnuel" name="nousConnaitre" type="text" class="form-control" />
					            </div>
					        </fieldset>
					        <p>
					            <button id="SaveAccount" class="btn btn-primary submit">Envoyer</button>
					        </p>
					    </form>

						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
	<script src="{{ asset('assets/front/js/jquery.formtowizard.js') }}"></script>
	<script>
	    $( function() {
	        var $signupForm = $( '#SignupForm' );
	        
	        $signupForm.validate({errorElement: 'em'});
	        
	        $signupForm.formToWizard({
	            submitButton: 'SaveAccount',
	            nextBtnClass: 'btn btn-primary next',
	            prevBtnClass: 'btn btn-default prev',
	            buttonTag:    'button',
	            validateBeforeNext: function(form, step) {
	                var stepIsValid = true;
	                var validator = form.validate();
	                $(':input', step).each( function(index) {
	                    var xy = validator.element(this);
	                    stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
	                });
	                return stepIsValid;
	            },
	            progress: function (i, count) {
	                $('#progress-complete').width(''+(i/count*100)+'%');
	            }
	        });
	    });
	</script>
@endsection