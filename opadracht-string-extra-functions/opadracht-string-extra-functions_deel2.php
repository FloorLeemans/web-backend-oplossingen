<?php

$fruit	=	'ananas';
$letterFruit	=	'a';
$posFruit	=	strrpos($fruit, $letterFruit);
$upperFruit	=	strtoupper($fruit);

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
    	<h1>Deel 1</h1>
        <p><?= $posFruit ?></p>
        <p><?= $upperFruit ?></p>
        <script src="js/main.js"></script>
    </body>
</html>