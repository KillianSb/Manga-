
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Molle:400i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Almendra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Charm&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body style="background-image: url('assets/img/back.jpg')">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    @else
                        <a href="{{ route('login') }}">Connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Enregistrer</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Home
                </div>

                <div class="links">
                    <a href="{{ route('contacts.index') }}" class="btn btn-primary">Contacts</a>
                    <a href="{{ route('livres.index') }}" class="btn btn-primary">Livres</a>
            </div>

        </div>
    </body>
</html>
