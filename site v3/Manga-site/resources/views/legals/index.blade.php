<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Manga++</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- custom -->
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>

</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse">

	<!-- start navigation -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a href="#home" class="navbar-brand smoothScroll"><strong>MANGA++</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">ACCUEIL</a></li>
					<li><a href="#about" class="smoothScroll">A PROPOS</a></li>
					<li><a href="#gallery" class="smoothScroll">GALERIE</a></li>
					<li><a href="#contact" class="smoothScroll">NOUS CONTACTER</a></li>
					@if (Route::has('login'))
                    @auth
                    	<li>
                    		<a href="{{ url('/logout') }}"
                        		onclick="event.preventDefault();
                           		document.getElementById('logout-form').submit();">
                        		SE DECONNECTER
                    		</a>
                    	</li>


                    	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                       		{{ csrf_field() }}
                    	</form>
                    	@else
                        	<li><a href="{{ route('login') }}">SE CONNECTER</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">S'INSCRIRE</a></li>
                        @endif
                    @endauth
           			@endif
				</ul>
			</div>
		</div>
	</div>
	<!-- end navigation -->

	<!-- start mention légal -->
    <section id="about" class="templatemo-section templatemo-top-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-uppercase">Mention Légal</h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2 class="text-uppercase padding-bottom-10"></h2>
                    <p>Mettre les mentions ici</p>
                    <p>...</p>

                </div>
            </div>
        </div>
    </section>
    <!-- end mention légal -->


	<!-- start footer -->
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 Manga++</p>
                    <a href="{{ route('legal') }}" class="legal_notice">Mentions légales</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>
