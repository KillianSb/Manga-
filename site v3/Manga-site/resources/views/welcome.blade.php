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
                   			<a href="{{ route('reservations.index') }}">RESERVER UN OUVRAGE</a>
                   		</li>
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

	<!-- start banner -->
		<img src="images/banniere.jpg" class="banner">
	<!-- end banner -->

	<!-- start flexslider -->
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="images/slider-img1.jpg" alt="Pizza Image 1">
				<div class="flex-caption">
					<h2 class="slider-title">We make Pizza</h2>
					<h3 class="slider-subtitle">Fresh, clean, and delicious.</h3>
					<p class="slider-description">Praesent tincidunt neque semper elementum gravida. Donec id euismod magna. Ut erat ligula, malesuada eu quam a, fringilla auctor augue.</p>
				</div>
			</li>
			<li>
				<img src="images/slider-img2.jpg" alt="Pizza Image 2">
				<div class="flex-caption">
					<h2 class="slider-title">Freshly Baked Pizza</h2>
					<h3 class="slider-subtitle">Premium Quality, Finest Ingredients</h3>
					<p class="slider-description">Donec id euismod magna. Ut erat ligula, malesuada eu quam a, fringilla auctor augue. Praesent tincidunt neque semper elementum gravida.</p>
				</div>
			</li>
		</ul>
	</div>
	<!-- end flexslider -->

	<!-- start about -->
    <section id="about" class="templatemo-section templatemo-top-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-uppercase">Bienvenue sur Manga++</h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3 class="text-uppercase padding-bottom-10"></h3>
                    <p>Manga++ est spécialisé dans la location de mangas et bandes dessinées.
                       Réservez en ligne et venez récupérer votre ouvrage en magasin.</p>
                    <p>Disponibilité des nouveautés le jour de leur sorties</p>

                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="images/tintin_tibet_n1.jpg" class="img-responsive img-bordered img-about" alt="about img" width="250px" height="250px">
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

	<!-- start gallery -->
	<section id="gallery" class="templatemo-section templatemo-light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-uppercase">Nos plus grands succès</h2>
					<hr>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/dragon_ball_n1.jpg" class="img-responsive gallery-img" alt="Manga 1">
						<div class="gallery-des">
							<h3>Dragon ball</h3>
							<h5>Cras in ante mattis, elementum nunc sed.</h5>
						</div>
					</div>
				</div>	
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/naruto_n1.jpg" class="img-responsive gallery-img" alt="Manga 2">
						<div class="gallery-des">
							<h3>Naruto</h3>
							<h5>In ullamcorper gravida enim id pulvinar</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/one_piece_n1.jpg" class="img-responsive gallery-img" alt="Manga 3">
						<div class="gallery-des">
							<h3>One piece</h3>
							<h5>Maecenas efficitur nisi id sapien</h5>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!-- end gallery -->

	<!-- start contact -->
	<section id="contact" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-uppercase text-center">Nous contacter</h2>
					<hr>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="#" method="post" role="form">
						<div class="col-md-6 col-sm-6">
							<input name="name" type="text" class="form-control" id="name" maxlength="60" placeholder="Nom">
					    	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							<input name="message" type="text" class="form-control" id="message" placeholder="Sujet">
						</div>
						<div class="col-md-6 col-sm-6">
							<textarea class="form-control" rows="5" placeholder="Message"></textarea>
						</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
							<input name="submit" type="submit" class="form-control" id="submit" value="Envoyer">
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4 col-sm-4">
					<h3 class="padding-bottom-10 text-uppercase">La librairie</h3>
					<p><i class="fa fa-map-marker contact-fa"></i>Centre Pierre Cointreau CCI, 132 Avenue de Lattre de Tassigny, 49000 Angers</p>
					<p>
						<i class="fa fa-phone contact-fa"></i> 
						<a href="tel:0241666766" class="contact-link">02 41 66 67 66</a> 
					</p>			
					<p><i class="fa fa-envelope-o contact-fa"></i> 
                    	<a href="mailto:philippe.riffi@students.campus.academy" class="contact-link">philippe.riffi@students.campus.academy</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<h3 class="text-uppercase">HORAIRES</h3>
					<p><i class="fa fa-clock-o contact-fa"></i> 9:00  - 18:30 </p>
					<p><i class="fa fa-bell-o contact-fa"></i> Du Lundi au Samedi</p>
                    
			  	</div>
				<div class="col-md-4 col-sm-4">
					<div class="google_map">
						<div id="map-canvas" class="map"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->


	<!-- start footer -->
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 Manga++</p>
                    <a href="*" class="legal_notice">Mentions légales</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>