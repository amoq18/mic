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
                <h3>Faire un transfert</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="javascript:;">Faire un transfert</a>
            </div>
        </div>
    </div>

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                <div class="section_title">
	                <!-- {{-- <h2>Entrez vos informations pour bénéficier d'un prêt</h2> --}} -->
                </div>
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">
							<form id="SignupForm" action="{{ route('front.transfert.post') }}" method="post" class="contact_us_form">
						    	@csrf
						    	{{-- @if (Session::has('success'))
						    		<script type="text/javascript">alert('Votre demande de prêt a été bien envoyée. Consultez votre mail dans les prochaines 48 heures. Nous vous contacterons afin de donner une suite a votre demande de pret. Il se peut que notre message soit dans les spams, verifiez donc.')</script>
						    		{{-- <strong style="background: green; border-radius: 40px; padding: 5px 15px 7px 15px; color: white; font-size: 16px; margin: 20px 0px 10px 0px;">{{ Session::get('success') }}</strong>
                                @endif --}}
						    	@if($errors->all())
	                                <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Le code entré est incorrecte</strong>
	                            @endif
                                <legend>INFORMATIONS DU TRANSFERT</legend>

					            <div class="row form-group">
                                    <div class="col-md-6">
                                        <label for="devise">Devise</label>
                                        <select name="devise" class="form-control">
                                            <option value="dollar">Dollar</option>
                                            <option value="euro">Euro</option>
                                        </select>
                                    </div>
				                	<div class="col-md-6">
                                        <label for="paiement_mode">Moyen de paiement</label>
                                        <select name="paiement_mode" class="form-control">
                                            <option value="Werstern">Werstern</option>
                                            <option value="Visa">Visa</option>
                                        </select>
                                    </div>
					            </div>

					        	<div class="row form-group">
				                	<div class="col-md-6">
						            	<label for="montant">Montant</label>
						            	<input id="montant" name="montant" type="number" class="form-control" required value="{{ old('montant') }}" />
						            	@if($errors->has('montant'))
					                    	<div class="invalid-feedback">{{ $errors->first('montant') }}</div>
					                    @endif
                                    </div>
                                    <div class="col-md-6">
                                        <button id="SaveAccount" class="btn btn-block btn-primary submit" style="margin-top: 23px;">Démarrer le transfert</button>
                                    </div>
					            </div>
					    	</form>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
