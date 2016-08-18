<?php
/*
	Schema : https://docs.google.com/drawings/d/1p7HKctxoe5smlPD-dNdi-jG3hOV1kaXXQUnwmoIdzQA/edit?usp=sharing
	Créer un site web dans lequel on peut s'enregistrer, se connecter et se déconnecter
	Pour cela vous allez avoir besoin d'un fichier JSON contenant les informations des utilisateurs
	De 3 fichiers de traitement :
		login
		register
		logout
	De 3 pages :
		home
		login
		register
	Mettez en place votre architecture MVC et vos schémas avant 12h
	
	Liste des fichiers nécessaires :
		apps
			login
			register
			home
			skel
			header
			footer
			content
			traitement_login
			traitement_register
			traitement_logout
		views
			login
			register
			home
			skel
			header_in*
			header*
			footer
			content
		index
		json

	N'oubliez pas le session_start dans l'index.php


	Vous DEVEZ afficher l'email de l'utilisateur dans le header une fois qu'il est connecté + un bouton de logout

	Vous NE DEVEZ PAS afficher de lien vers la page de logout si l'utilisateur n'est pas connecté
	Vous NE DEVEZ PAS afficher de lien vers la page login et register si l'utilisateur est connecté

	Pour le formulaire d'inscription les informations suivantes seront demandées et obligatoires :
		email, login, password**, date de naissance, genre

	Vous choisissez quoi enregistrer dans la $_SESSION, néanmoins petit rappel : moins il y en a, mieux c'est :)

	Correction vendredi à 11h50

	* Le header DOIT changer quand la personne est connectée
	** On demande TOUJOURS deux fois le mot de passe lors de l'inscription :)
?>