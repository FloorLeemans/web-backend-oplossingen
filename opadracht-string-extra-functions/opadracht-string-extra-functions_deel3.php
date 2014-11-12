<?php

$lettertje	=	'e';
$cijfertje	=	'3';
$langsteWoord	=	'zandzeepsodemineralenwatersteenstralen';

$langsteWoord3	=	str_replace($lettertje, $cijfertje, $langsteWoord);
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
    	<p><?= $langsteWoord3 ?></p>
        <script src="js/main.js"></script>
    </body>
</html>