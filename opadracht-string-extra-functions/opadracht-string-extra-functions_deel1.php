<?php

$fruit	=	'kokosnoot';
$letterFruit	=	'o';
$lengteFruit	=	strlen($fruit);
$posFruit	=	strpos($fruit, $letterFruit);

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
        <p><?= $lengteFruit ?></p>
        <p><?= $posFruit ?></p>
        <script src="js/main.js"></script>
    </body>
</html>