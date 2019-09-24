@extends('front.layouts.app')

@section('content')
	<!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Evènements</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="#">Evènements</a>
            </div>
        </div>
    </div>
        
    <!--================Our About Area =================-->
    <section class="our_about_area">
        <div class="container">
            <div class="row">
        		<div class="col-md-8">
                    <div class="our_about_left_content">
                        <div class="section_title">
                            <h2>{{$new->titre}} </h2>
                        </div>
                        <p style="margin-left: 100px">{{$new->contenue}}. </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our_about_image">
                        <img src="{{ asset('assets/front/img/about-right-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
