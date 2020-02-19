@extends('pages.base')
@include('cookieConsent::index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Panel</title>

        <!-- custom -->
        <link rel="stylesheet" href="css/templatemo-style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Molle:400i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Almendra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Charm&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body class="admin_page" style="background-image: url('../public/images/back.jpg');">

        <!-- Header -->
        <header class="header_auth">
            <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
            <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
        </header>
    <!-- End Header -->

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @else
                        <a href="{{ route('login') }}">Connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Enregistrer</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <div class="admin_reservation_link">
                        <a href="{{ route('reservations.index') }}" class="admin_reservation">Réservations</a>
                    </div>
                    <div class="admin_contact_link">
                        <a href="{{ route('contacts.index') }}" class="admin_contact">Contacts</a>
                    </div>
                    <div class="admin_book_link">
                        <a href="{{ route('livres.index') }}" class="admin_book">Livres</a>
                    </div>
               </div>
            </div>
        </div>

        <!-- Start footer -->
            <footer class="admin_page_footer">
                <div class="admin_footer_container">
                    <p>Copyright &copy; 2020 Manga++</p>
                    <a href="{{ route('legal') }}" class="legal_notice">Mentions légales</a>
                </div>
            </footer>
        <!-- End footer -->
    </body>
</html>
