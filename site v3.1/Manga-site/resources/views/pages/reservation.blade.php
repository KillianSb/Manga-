<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Déconnecter
                    </a>

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
</body>
</html>