<?php

include_once('klasses/Database.php');

session_start();

$cookieArray = explode(',', $_COOKIE['login']);

$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root'); // Connectie maken

$dbInstanceTemp = new Database($db);

// Een query klaarmaken. 
$artikelsShowQuery = 'SELECT *
						FROM artikels
						WHERE is_archived = "0"';

$artikelsShowStatement = $db->prepare($artikelsShowQuery);

// Een query uitvoeren.
$artikelsShowStatement->execute();

$artikelsArray = array();

while ($row = $artikelsShowStatement->fetch(PDO::FETCH_ASSOC) )
{
	$artikelsArray[]	=	$row;
}

if (isset($_SESSION['notification'])) 
{
	$message 	=	$_SESSION['notification'];
}

//var_dump($artikelsArray);

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Overzicht | Artikels</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $cookieArray[0] ?> | <a href="logout.php">uitloggen</a></p>

		<h1>Overzicht van de artikels</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<p><a href="artikel-toevoegen-form.php">Voeg een artikel toe</a></p>

		<?php foreach ($artikelsArray as $key => $artikel): ?>
			<article class="<?= ($artikel['is_active'] == 1 ? '' : 'grey'); ?>">
				<h2><?= $artikel['titel'] ?></h2>
				<ul>
					<li>Artikel: <?= $artikel['artikel'] ?></li>
					<li>Kernwoorden: <?= $artikel['kernwoorden'] ?></li>
					<li>Datum: <?= $artikel['datum'] ?></li>
				</ul>
				<p><a href= <?= "artikel-wijzigen-form.php/?artikel=" . $artikel['id'] ?> >artikel wijzigen</a> | <a href= <?= "artikel-activeren.php/?artikel=" . $artikel['id'] ?> ><?= ($artikel['is_active'] == 1 ? 'artikel deactiveren' : 'artikel activeren'); ?></a> | <a href= <?= "artikel-verwijderen.php/?artikel=" . $artikel['id'] ?> >artikel verwijderen</a></p>
			</article>
		<?php endforeach ?>

	</body>
</html>