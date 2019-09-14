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
	                <h2>Entrez vos informations pour bénéficier d'un prêt</h2>
                </div>
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">
							    <form action="{{ route('front.virement.post') }}" method="post" class="contact_us_form" novalidate="novalidate">
							    	@csrf
					                <div class="form-group col-md-12">
					                    <input id="prenom" name="virement" value="demander un virement" type="hidden" class="form-control" required />
					                </div>
					                <p>
							            <button id="SaveAccount" class="btn btn-primary submit">Suivre un virement</button>
							        </p>
						        </form>
						        {{-- @if(isset($percent)) --}}
						        <div  style="margin-top: 30px">
						        	<h4 style="margin-bottom: 15px">Virement en cours ...</h4>
							        <div class="progress">
									  	<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
									</div>
								</div>
								{{-- @endif --}}
								<p style="color: red"><span>NB: Contactez par mail la SOCIETE GENERALE quand votre virement se bloque.</span></p>
					        	{{-- <form action="" method="post" class="contact_us_form" novalidate="novalidate">
							    	@csrf
						            <div class="form-group">
						            	<div class="col-md-6">
						                    <label>Confirmez les codes de sécurité</label>
						                    <p>
						                    	<input id="code1" name="code1" type="password" class="form-control" placeholder="Code 1" required />
						                    </p>
						                    <p>
						                    	<input id="code2" name="code2" type="password" class="form-control" placeholder="Code 2" required />
						                    </p>
						                    <p>
						                    	<input id="code3" name="code3" type="password" class="form-control" placeholder="Code 3" required />
						                    </p>
						                </div>
						                <div class="col-md-6">
						                    <label for="code2">Email</label>
						                    <input id="code2" name="code2" type="password" class="form-control" required />
						                </div>
						            </div>
					                <div class="form-group col-md-12">
					                    <label for="prenom">Montant à envoyer</label>
					                    <input id="prenom" name="montant" type="text" class="form-control" required />
					                </div>
					                <p>
						            	<button class="btn btn-primary submit">Envoyer</button>
						        	</p>
						        </form> --}}
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection