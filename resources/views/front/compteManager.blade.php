@extends('front.layouts.app')

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
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="our_about_left_content">
                        <div class="section_title">
                            <h2>Vos informations</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
