@extends('front.layouts.app')

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Se Connectez</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ route('front.home') }}">Accueil</a>
                <a href="{{ route('front.register') }}">Se Connectez</a>
            </div>
        </div>
    </div>
    
    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="contact_us_inner">
                 <div class="section_title">
                        <h2>Entrez vos informations pour vous connectez</h2>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <form class="contact_us_form" action="{{ route('front.login.post') }}" method="post">
                                @if($errors->all())
                                    <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Vos identifiants sont incorrects</strong>
                                @endif
                                @csrf
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    {{-- @if($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif --}}
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn green_submit_btn form-control" name="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our_about_image">
                            <img src="{{ asset('assets/front/img/contact-us-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection