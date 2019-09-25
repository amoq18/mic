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
            <div style="display: none;">
                <input type="number" value="{{$percent}}" id="percent"/>
            </div>
            <div class="contact_us_inner">
                <div class="section_title">
	                {{-- <h2>Entrez vos informations pour bénéficier d'un prêt</h2> --}}
                </div>
                <div class="row">
					<div class="row wrap">
                        <div class="col-md-offset-2 col-md-8">
							<form id="SignupForm" action="{{ route('front.transfert.post2') }}" method="post" class="contact_us_form">
						    	@csrf
						    	@if($errors->all())
	                                <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Le code entré est incorrecte</strong>
	                            @endif
                                <legend>EVOLUTION DU TRANSFERT</legend>

					        	<div class="row">
					        		<div class="col-md-12" style="margin-bottom: 15px">
						            	<label for="code2">Entrer le code de confirmation pour achever le transfert</label>
						            	<input id="code2" name="code2" type="password" class="form-control" required value="" />
				                	</div>
					            </div>
						        {{-- <p> --}}
						        	<input type="submit" name="send" class="btn btn-danger" value="Continuer">
						        {{-- </p> --}}
					    	</form>
					    	{{-- @if (request('code2'))
					    	@endif --}}

                            <div class="row col-md-12" style="margin-bottom: 15px">
                                    Transfert en cours ...
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </div>

					    </div>
					</div>
				</div>
            </div>
        </div>
        <script type="text/javascript">
            var percent = document.getElementById("percent");
            $(document).ready(function(){
                var tim = 5000;
                $(".progress-bar").animate({
                    width: parseFloat(percent.value) + "%"
                }, tim);

                width = percent.value ;
                tim2 = (tim-800) /width ;
                setInterval(function() {
                    var pVal = parseInt($('.progress-bar').text());
                    var pCnt = pVal + 1;
                    if (pCnt > width) {
                        clearInterval(pCnt);
                    } else {
                        $('.progress-bar').text(pCnt + '%');
                    }
                }
                ,tim2);
            });
        </script>
	</section>

@endsection
