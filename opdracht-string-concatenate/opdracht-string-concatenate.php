<?php

	$voornaam		=	'Floor';
	$familienaam	=	'Leemans';

	$volledigeNaam	=	$voornaam . ' ' . $familienaam;

    $volledigeNaamLengte    =   strlen($volledigeNaam);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
    	<h1><?= $volledigeNaam ?></h1>
    	<p>Aantal karakters in de volledige naam: <?= $volledigeNaamLengte ?></p>

        <script src="js/main.js"></script>
    </body>
</html>