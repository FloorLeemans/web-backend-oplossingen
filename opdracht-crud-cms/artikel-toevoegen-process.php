<?php

	include_once('klasses/Database.php');

	session_start();

	if (isset($_POST['artikelToevoegen'])) 
	{
		$_SESSION['artikelToevoegen']['titel'] 			=	$_POST['titel'];
		$titel 											=	$_SESSION['artikelToevoegen']['titel'];
		$_SESSION['artikelToevoegen']['artikel'] 		=	$_POST['artikel'];
		$artikel 										=	$_SESSION['artikelToevoegen']['artikel'];
		$_SESSION['artikelToevoegen']['kernwoorden'] 	=	$_POST['kernwoorden'];
		$kernwoorden 									=	$_SESSION['artikelToevoegen']['kernwoorden'];
		$_SESSION['artikelToevoegen']['datum'] 			=	$_POST['datum'];
		$datum 											=	$_SESSION['artikelToevoegen']['datum'];

		unset($_SESSION['notification']);

		$db = new PDO('mysql:host=localhost;dbname=opdracht-crud-cms', 'root', 'root'); // Connectie maken

		$dbInstanceTemp = new Database($db);

		$insertArtikelQuery 	=	'INSERT 	INTO artikels 
												(artikels.titel,
												 artikels.artikel,
												 artikels.kernwoorden,
												 artikels.datum) 
												VALUES 
												(:titel,
												 :artikel,
												 :kernwoorden,
												 :datum )';

		$insertArtikelPlaceholders 	=	array(
											':titel' => $titel,
											':artikel' => $artikel,
											':kernwoorden' => $kernwoorden,
											':datum' => $datum
											);

		$dbInstanceTemp->query($insertArtikelQuery, $insertArtikelPlaceholders);

		unset($_SESSION['artikelToevoegen']);
		$_SESSION['notification'] 	=	"Het artikel werd succesvol toegevoegd.";
		header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/artikel-overzicht.php");
	}

	//$_SESSION['notification'] 	=	"Het artikel kon niet worden toegevoegd.";
	//header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/artikel-toevoegen-process.php");

?>