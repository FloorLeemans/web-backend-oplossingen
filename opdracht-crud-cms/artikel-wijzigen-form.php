<?php

include_once('klasses/Database.php');

session_start();

$cookieArray = explode(',', $_COOKIE['login']);

$db = new PDO('mysql:host=localhost;dbname=opdracht-crud-cms', 'root', 'root'); // Connectie maken

$dbInstanceTemp = new Database($db);

// Een query klaarmaken. 
$updateShowQuery = 'SELECT artikels.id, artikels.titel, artikels.artikel, artikels.kernwoorden, artikels.datum 
							FROM artikels
							WHERE artikels.id = :id';

$updateShowPlaceholders	=	array(':id' => $_GET['artikel']);

$updateShowArray = $dbInstanceTemp->query( $updateShowQuery, $updateShowPlaceholders );
$updateShowArray = $updateShowArray[0];


if (isset($_SESSION['notification'])) 
{
	$message 	=	$_SESSION['notification'];
}

$id 			=	$updateShowArray['id'];
$titel 			=	$updateShowArray['titel'];
$artikel 		=	$updateShowArray['artikel'];
$kernwoorden 	=	$updateShowArray['kernwoorden'];
$datum 			=	$updateShowArray['datum'];

if (isset($_SESSION['artikelWijzigen'])) 
{
	$id 			=	$_SESSION['artikelWijzigen']['id'];
	$titel 			=	$_SESSION['artikelWijzigen']['titel'];
	$artikel 		=	$_SESSION['artikelWijzigen']['artikel'];
	$kernwoorden 	=	$_SESSION['artikelWijzigen']['kernwoorden'];
	$datum 			=	$_SESSION['artikelWijzigen']['datum'];

}

var_dump($updateShowArray);

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wijzigen | Artikels</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $cookieArray[0] ?> | <a href="logout.php">uitloggen</a></p>
		<p><a href="artikel-overzicht.php">Terug naar overzicht</a></p>

		<h1>Artikel wijzigen</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<form method="POST" action="artikel-wijzigen.php">
			<input type="hidden" name="id" value="<?= $id ?>">

			<label for="titel">Titel</label>
			<input type="text" name="titel" id="titel" value="<?= $titel ?>">

			<label for="artikel">Artikel</label>
			<textarea type="text" name="artikel" id="artikel" value="<?= $artikel ?>"><?= $artikel ?></textarea>

			<label for="kernwoorden">Kernwoorden</label>
			<input type="text" name="kernwoorden" id="kernwoorden" value="<?= $kernwoorden ?>">

			<label for="datum">Datum (jjjj-mm-dd)</label>
			<input type="text" name="datum" id="datum" value="<?= $datum ?>">

			<input type="submit" name="artikelWijzigen" value="Artikel wijzigen">
		</form>

	</body>
</html>