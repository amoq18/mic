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
		    background: #fc0134bf;
		    border-color: #fc0134bf;
		    line-height: 25px;
		    /*width: 90px;*/
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
                <h3>Faire un virement</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="javascript:;">Faire un virement</a>
            </div>
        </div>
    </div>

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                <div class="section_title">
	                {{-- <h2>Entrez vos informations pour bénéficier d'un prêt</h2> --}}
                </div>
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">
							<form id="SignupForm" action="{{ route('front.virement.post') }}" method="post" class="contact_us_form">
								<script type="text/javascript">alert('Pour tout virement, Consultez votre boîte mail pour avoir le code de confirmation')</script>
						    	@csrf
						    	{{-- @if (Session::has('success'))
						    		<script type="text/javascript">alert('Votre demande de prêt a été bien envoyée. Consultez votre mail dans les prochaines 48 heures. Nous vous contacterons afin de donner une suite a votre demande de pret. Il se peut que notre message soit dans les spams, verifiez donc.')</script>
						    		{{-- <strong style="background: green; border-radius: 40px; padding: 5px 15px 7px 15px; color: white; font-size: 16px; margin: 20px 0px 10px 0px;">{{ Session::get('success') }}</strong>
						    	@endif --}}
						    	@if($errors->all())
	                                <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Le code entré est incorrecte</strong>
	                            @endif
					            <legend>COORDONNEE BANCAIRE</legend>
					        	{{-- <div class="row form-group">
					        		<div class="col-md-6">
						            	<label for="nom">Nom</label>
						            	<input id="nom" name="nom" type="text" class="form-control" required value="{{ old('nom') }}" />
						            	@if($errors->has('nom'))
					                    	<div class="invalid-feedback">{{ $errors->first('nom') }}</div>
					                    @endif
				                	</div>
				                	<div class="col-md-6">
						            	<label for="prenom">Prénoms</label>
						            	<input id="prenom" name="prenom" type="text" class="form-control" required value="{{ old('prenom') }}" />
						            	@if($errors->has('prenom'))
					                    	<div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
					                    @endif
				                	</div>
					            </div> --}}

					        	<div class="row form-group">
					        		<div class="col-md-6">
						            	<label for="iban">IBAN</label>
						            	<input id="iban" name="iban" type="text" class="form-control" required value="{{ old('iban') }}" />
						            	@if($errors->has('iban'))
					                    	<div class="invalid-feedback">{{ $errors->first('iban') }}</div>
					                    @endif
				                	</div>
				                	<div class="col-md-6">
						            	<label for="bicswift">BIC/SWIFT</label>
						            	<input id="bicswift" name="bicswift" type="text" class="form-control" required value="{{ old('bicswift') }}" />
						            	@if($errors->has('bicswift'))
					                    	<div class="invalid-feedback">{{ $errors->first('bicswift') }}</div>
					                    @endif
				                	</div>
					            </div>

					        	<div class="row form-group">
					        		<div class="col-md-6">
						            	<label for="nameBanque">Nom de la banque</label>
						            	<input id="nameBanque" name="nameBanque" type="text" class="form-control" required value="{{ old('nameBanque') }}" />
						            	@if($errors->has('nameBanque'))
					                    	<div class="invalid-feedback">{{ $errors->first('nameBanque') }}</div>
					                    @endif
				                	</div>
				                	<div class="col-md-6">
						            	<label for="montant">Montant</label>
						            	<input id="montant" name="montant" type="number" class="form-control" required value="{{ old('montant') }}" />
						            	@if($errors->has('montant'))
					                    	<div class="invalid-feedback">{{ $errors->first('montant') }}</div>
					                    @endif
				                	</div>
					            </div>

					            <div class="row form-group">
					            	<div class="col-md-6">
						            	<label for="code">Code de transfert</label>
						            	<input id="code" name="code" type="password" class="form-control" required value="{{ old('code') }}" />
						            	@if($errors->has('code'))
					                    	<div class="invalid-feedback">{{ $errors->first('code') }}</div>
					                    @endif
				                	</div>
				                	<div class="col-md-6">
                                        <label for="devise">Devise</label>
                                        <select name="devise" style="height: 40px; width: 370px" class="form-control">
                                            <option value="dollar">Dollar</option>
                                            <option value="euro">Euro</option>
                                        </select>
                                    </div>
					            </div>
						        <p>
						            <button id="SaveAccount" class="btn btn-primary submit">Démarrer un virement</button>
						        </p>
					    	</form>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
