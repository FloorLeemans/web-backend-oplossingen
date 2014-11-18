<?php

$fruit          =	'kokosnoot';
$letterFruit	=	'o';

$lengteFruit	=	strlen($fruit);

$posFruit	    =	strpos($fruit, $letterFruit);

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
    	<h1><?= $fruit ?></h1>
        <p>Lengte van fruit: <?= $lengteFruit ?></p>
        <p>Positie van eerste o in fruit: <?= $posFruit ?></p>
        <script src="js/main.js"></script>
    </body>
</html>