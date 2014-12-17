<?php

$timeStamp	=	mktime(22, 35, 25, 1, 21, 1904);
$date 		=	date('j F Y, h:i:s a', $timeStamp);

setlocale(LC_ALL, "nld_nld");

$dateNL 	=	strftime('%d %B %Y, %H:%M:%S', $timeStamp);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht Date</title>
    </head>
    <body>
        <h1>Opdracht Date</h1>
        	<h2>Deel 1</h2>
        		<p>
        			De timestamp: <?= $timeStamp ?>.
        		</p>
        		<p>
        			De datum: <?= $date ?>.
        		</p>
        	<h2>Deel 2</h2>
        		<p>
        			De datum in Nederlands: <?= $dateNL ?>
        		</p>
    </body>
</html>