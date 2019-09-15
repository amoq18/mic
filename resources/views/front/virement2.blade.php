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
							<form id="SignupForm" action="{{ route('front.virement.post2') }}" method="post" class="contact_us_form">
								<script type="text/javascript">alert('Pour tout virement, Consultez votre boîte mail pour avoir le code de confirmation')</script>
						    	@csrf
						    	@if($errors->all())
	                                <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Le code entré est incorrecte</strong>
	                            @endif
					            <legend>EVOLUTION DU VIREMENT</legend>
					        	<div class="row">
					        		<div class="col-md-12" style="margin-bottom: 15px">
						            	<label for="code2">Entrer le code de confirmation pour achever le virement</label>
						            	<input id="code2" name="code2" type="password" class="form-control" required value="" />
				                	</div>
					            </div>
						        {{-- <p> --}}
						        	<input type="submit" name="send" class="btn btn-danger" value="Continuer">
						        {{-- </p> --}}
					    	</form>
					    	{{-- @if (request('code2'))
					    	@endif --}}

					    	<div class="row col-md-12" style="margin-top: 40px">
		                			Virement en cours ...
		                		<div class="progress">
								  	<div class="progress-bar" role="progressbar" style="width: 75%;">75%</div>
								</div>
		                	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection