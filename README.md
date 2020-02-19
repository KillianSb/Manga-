Informations générales :

	Manga++

	Ce projet est destiné à la création d'une application web pour monsieur N'guyen et son équipe.
	Nous ayant fait part de vos difficultés de gestion de votre librairie de manga et de BD, nous nous somme penchés sur le sujet
	aifn de créer une application web la plus complète possible permettant aisni la simplification de la gestion de votre entreprise.

Démarrage :

	Afin de démarrer l'application envoyée, vous devez d'abord vous munir de quelques pré-requis :
		>>> Installer WAMP (pour windows) ou MAMP (pour mac) qui simplifiera l'utilisation en locale de l'application

		>>> Installer composer (lien ci-contre : https://getcomposer.org/download/  --> sélectionner Composer-Setup.exe)
		    Attention à bien sélectionner la dernière version de php disponible.

		>>> Lancer WAMP ou MAMP et cliquer sur l'icône qui apparait dans votre barre des tâches en bas à droite puis
		    sélectionner "répertoire www".

		>>> Regarder le chemin d'accès à ce répertoire et y aller via l'invite de commande de votre ordinateur (ou cmd).

		>>> Une fois dans le bon fichier (dans votre cmd), copier et coller la commande suivante:
			composer create-project --prefer-dist laravel/laravel Manga
		    Le framework Laravel est maintenant installé.

		>>> Une fois le framework laravel installé (étape précédente), retournez via votre explorateur dans le dossier www.
		    Vous pourrez remarquer la présence d'un nouveau dossier appelé "Manga".
		    Copiez et collez les fichiers envoyés via github dans ce dossier et remplacez les fichiers quand votre ordinateur
		    vous le demandera (lien du Github: https://github.com/TheKller29/Manga-  --> fichiers contenus dans le dossier Manga)
		    Pour simplifier les manipulations, téléchargez (via le bouton en haut a droite), tout le répositorie.

		>>> Ouvrez le fichier avec l'extension .env de votre dossier "Manga" contenu dans le répertoire "www".
		    Sur la ligne "DB_DATABASE=laravel", remplacez le "laravel" par "site".

		>>> Cliquez sur l'icône de WAMP ou de MAMP dans votre barre des tâches et cliquez ensuite sur "phpmyadmin".
		    Sur la page qui s'est alors ouverte, entrez "root" comme nom d'utilisateur et connectez vous
		    (De base, il n'y a aucun mot de passe à insérer pour se connecter).
		    Une fois dans l'application "phpmyadmin", cliquez sur "Base de données" situé en haut de l'écran.
		    Entrez le nom "site" et créez votre base de données.
		    Une fois créée, elle apparaitra à gauche. Cliquez dessus puis cliquez sur l'onglet "Importer" en haut de votre écran.
		    Cliquez ensuite sur le bouton "parcourir" et allez chercher le fichier manga_3.sql, descendez tout en bas de la page et
		    cliquez sur "Executer".
		    Votre base de données est maintenant installée.

		>>> Dans le cmd, entrez dans le dossier "Manga" et entrez la commande: php artisan migrate
		    Votre base de données est maintenant connectée à votre application web.

		>>> Entrez également la commande suivante dans le cmd: composer require spatie/laravel-cookie-consent
		    Elle sera nécessaire pour faire fonctionner les cookies et ainsi respecter les normes RGPD.

		>>> Dans votre navigateur internet, entrez l'adresse suivante: localhost/Manga/public
		    C'est la page d'accueil de votre site web qui est maintenant installé et prêt à être utilisé.

Auteurs: 
	-> Sugranes Nicolas - Etudiant à Campus Academy
	-> Tardy Nicolazic - Etudiant à Campus Academy
	-> Riffi Philippe - Etudiant à Campus Academy
	-> Sieniski Killian - Etudiant à Campus Academy
	-> Robard Germain - Etudiant à Campus Academy

Standardisation:

	Le code suit les normes PSR-1 et PSR-2 du développement.
	L'application web suit les normes RGPD.

Technologies: 

	-> HTML et CSS
	-> PHP (PHP, PHP POO => Framework laravel)
	-> Mysql