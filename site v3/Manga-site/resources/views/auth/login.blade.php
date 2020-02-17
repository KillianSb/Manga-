<!DOCTYPE html>
<html class="login_page_html">
<head>
    <!-- custom -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- Google font -->
    <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
</head>

<body class="login_page" style="background-image: url('../public/images/back.jpg');">
@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Header -->
    <header class="header_auth">
        <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
        <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
    </header>
    <!-- End Header -->

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Login') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=" Adresse E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder=" Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ce souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Connexion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <br>
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start footer -->
    <footer class="login_page_footer">
        <div class="login_footer_container">
            <p>Copyright &copy; 2020 Manga++</p>
            <a href="#" class="legal_notice">Mentions légales</a>
        </div>
    </footer>
<!-- End footer -->
@endsection
</body>
</html>