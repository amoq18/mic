@extends('back.layouts.app', [$auth = true])

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ asset('assets/front/img/logo.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Enregistrez-vous</h1>
                        <p class="account-subtitle">Accedez au back-office</p>
                        
                        <!-- Form -->
                        <form action="{{ route('back.register.post') }}" method="POST">
                            @csrf
                            {{-- Name --}}
                            <strong>{{$errors->first('nom')}}</strong>
                            <div class="form-group">
                                <input class="form-control" name="nom" value="{{ old('nom') }}" required autocomplete="name" type="text" autofocus placeholder="Name">
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <strong>{{$errors->first('email')}}</strong>
                                <input class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Email">
                            </div>

                            {{-- Pass --}}
                            <strong>{{$errors->first('password')}}</strong>
                            <div class="form-group">
                                <input class="form-control" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                            </div>

                            {{-- Confirm pass --}}
                            <div class="form-group">
                                <input class="form-control" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">S'enregistrer</button>
                            </div>
                        </form>
                        <!-- /Form -->
                        
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>
                        
                        <!-- Social Login -->
                        {{-- <div class="social-login">
                            <span>Register with</span>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div> --}}
                        <!-- /Social Login -->
                        
                        <div class="text-center dont-have">
                            Vous avez deja un compte? <a href="{{ route('back.login') }}">Connectez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
