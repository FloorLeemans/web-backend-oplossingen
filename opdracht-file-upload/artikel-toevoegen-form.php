<?php

session_start();

$cookieArray = explode(',', $_COOKIE['login']);

$titel 			=	"";
$artikel 		=	"";
$kernwoorden 	=	"";
$datum 			=	"";

if (isset($_SESSION['artikelToevoegen'])) 
{
	$titel 			=	$_SESSION['artikelToevoegen']['titel'];
	$artikel 		=	$_SESSION['artikelToevoegen']['artikel'];
	$kernwoorden 	=	$_SESSION['artikelToevoegen']['kernwoorden'];
	$datum 			=	$_SESSION['artikelToevoegen']['datum'];
}

if (isset($_SESSION['notification'])) 
{
	$message 	=	$_SESSION['notification'];
}

//var_dump($_SESSION);

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Toevoegen | Artikels</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $cookieArray[0] ?> | <a href="logout.php">uitloggen</a></p>
		<p><a href="artikel-overzicht.php">Terug naar overzicht</a></p>

		<h1>Artikel toevoegen</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<form method="POST" action="artikel-toevoegen-process.php">
			<label for="titel">Titel</label>
			<input type="text" name="titel" id="titel" value="<?= $titel ?>">

			<label for="artikel">Artikel</label>
			<textarea type="text" name="artikel" id="artikel" value="<?= $artikel ?>"></textarea>

			<label for="kernwoorden">Kernwoorden</label>
			<input type="text" name="kernwoorden" id="kernwoorden" value="<?= $kernwoorden ?>">

			<label for="datum">Datum (jjjj-mm-dd)</label>
			<input type="text" name="datum" id="datum" value="<?= $datum ?>">

			<input type="submit" name="artikelToevoegen" value="Artikel toevoegen">
		</form>

	</body>
</html>