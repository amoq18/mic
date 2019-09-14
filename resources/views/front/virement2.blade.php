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
							{{-- @foreach ($virementDatas as $virement) --}}
							
			        		<div  style="margin-top: 30px">
					        	<h4 style="margin-bottom: 15px">Virement en cours ...</h4>
						        <div class="progress">
								  	<div class="progress-bar" role="progressbar" style="width: {{ $virementDatas->percent }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $virementDatas->percent }}%</div>
								</div>
							</div>
							{{-- @endforeach --}}
						<p style="color: red"><span>NB: Contactez par mail la SOCIETE GENERALE quand votre virement se bloque.</span></p>

						        
					        	
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection