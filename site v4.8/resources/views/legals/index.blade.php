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
<body id="home" data-spy="scroll" data-target=".navbar-collapse" class="legal_notice">

    <!-- Header -->
    <header class="header_auth">
        <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
        <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
    </header>
    <!-- End Header -->

    <!-- start legal notice -->
    <section id="about" class="templatemo-section templatemo-top-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-uppercase">Mentions Légales</h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="Conditions_of_use">
                        <h2 class="text-uppercase padding-bottom-10">Conditions d'utilisation</h2>
                        <p>Les visiteurs de www.Manga++.fr reconnaissent :</p>
                        <ul class="conditions_terms">
                            <li>avoir pris connaissance des présentes informations légales 
                            et s’engagent à les respecter,</li>
                            <li>disposer de la compétence et des moyens nécessaires pour accéder et utiliser les informations figurant sur le site,</li>
                            <li>avoir vérifié que la configuration informatique utilisée ne contient aucun virus et qu’elle est en bon état de fonctionnement.</li>
                        </ul>
                    </div>

                    <div class="project_contributors">
                        <h2>Conception, réalisation, Graphisme</h2>
                        <ul class="contributors">
                            <li>Robard Germain</li>
                            <li>Riffi Philippe</li>
                            <li>Sienski Killian</li>
                            <li>Sugranes Nicolas</li>
                            <li>Tardy Nicolazic</li>
                        </ul>
                    </div>

                    <div class="publication_director">
                        <h2>Directeur de publication</h2>
                        <p>Mr N’Guyen Chumpon</p>
                    </div>

                    <div class="rights">
                        <h2>Droits d’auteur</h2>
                        <p>Les droits de l’auteur de ce site sont réservés pour toute forme d’utilisation. En particulier, la reproduction des éléments graphiques du site, le téléchargement complet du site pour son enregistrement sur un support de diffusion, ainsi que toute utilisation des visuels et textes qu’il contient autre que la consultation individuelle et privée sont interdits sans autorisation.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end mention légal -->


    <!-- Start footer -->
    <footer class="legal_page_footer">
        <div class="legal_footer_container">
            <p>Copyright &copy; 2020 Manga++</p>
            <a href="{{ route('legal') }}" class="legal_notice">Mentions légales</a>
        </div>
    </footer>
<!-- End footer -->
</body>
</html>
