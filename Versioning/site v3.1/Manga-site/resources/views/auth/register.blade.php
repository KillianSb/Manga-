<<<<<<< HEAD
<!DOCTYPE html>
<html class="register_page_html">
<head>
    <!-- custom -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- Google font -->
    <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
</head>

=======
>>>>>>> 22e47be633c5325521057ca8aaf276938c1c94d9
<body class="register_page" style="background-image: url('../public/images/bleach.jpg');">

@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
@section('content')
<div class="container">
<<<<<<< HEAD
     <!-- Header -->
    <header class="header_auth">
        <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
        <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
    </header>
    <!-- End Header -->
=======
    <div>
        <span>
            <a href="{{ route('home')}}" class="return">Retour home</a>
        </span>
    </div>
>>>>>>> 22e47be633c5325521057ca8aaf276938c1c94d9
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('S\'inscrire') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mots de passe') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation mots de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<!-- Start footer -->
    <footer class="register_page_footer">
        <div class="register_footer_container">
            <p>Copyright &copy; 2020 Manga++</p>
            <a href="#" class="legal_notice">Mentions légales</a>
        </div>
    </footer>
<!-- End footer -->
@endsection
</body>
</html>
=======
@endsection
</body>
>>>>>>> 22e47be633c5325521057ca8aaf276938c1c94d9
