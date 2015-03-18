<?php

if (isset($_POST['artikelWijzigen']))
{
	$_SESSION['artikelWijzigen']['id']			=	$_POST['id'];
	$id 										=	$_SESSION['artikelWijzigen']['id'];
	$_SESSION['artikelWijzigen']['titel']		=	$_POST['titel'];
	$titel 										=	$_SESSION['artikelWijzigen']['titel'];
	$_SESSION['artikelWijzigen']['artikel']		=	$_POST['artikel'];
	$artikel 									=	$_SESSION['artikelWijzigen']['artikel'];
	$_SESSION['artikelWijzigen']['kernwoorden']	=	$_POST['kernwoorden'];
	$kernwoorden 								=	$_SESSION['artikelWijzigen']['kernwoorden'];
	$_SESSION['artikelWijzigen']['datum']		=	$_POST['datum'];
	$datum 										=	$_SESSION['artikelWijzigen']['datum'];

	$db = new PDO('mysql:host=localhost;dbname=opdracht-crud-cms', 'root', 'root'); // Connectie maken

	$dbInstanceTemp = new Database($db);

	$updateArtikelString  =   'UPDATE artikels
									SET artikels.titel = :titel,
										artikels.artikel = :artikel,
										artikels.kernwoorden = :kernwoorden,
										artikels.datum = :datum
                            	        WHERE id = :id';

	$updateArtikelPlaceholders = array( 
									':id' => $id,
									':titel' => $titel,
									':artikel' => $artikel,
									':kernwoorden' => $kernwoorden,
									':datum' => $datum
									);

	$dbInstanceTemp->query( $updateArtikelString, $updateArtikelPlaceholders );

	$_SESSION['notification'] 	=	"Het artikel is met succes gewijzigd.";
	header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/artikel-overzicht.php");
}

?>