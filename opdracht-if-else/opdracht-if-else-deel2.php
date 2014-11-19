<?php

$seconden	=	221108521;
$minuten	=	floor($seconden / 60);
$uren		=	floor($minuten / 60);
$dagen		=	floor($uren / 24);
$weken		=	floor($dagen / 7);
$maanden	=	floor($dagen / 31);
$jaren		=	floor($dagen / 365);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht if/else</title>
    </head>
    <body>
		<h1>Opdracht if/else - deel 2</h1>        

		<p>In <?php echo $seconden ?> seconden
			<ul>
				<li>minuten: <?php echo $minuten ?></li>
				<li>uren: <?php echo $uren ?></li>
				<li>dagen: <?php echo $dagen ?></li>
				<li>weken: <?php echo $weken ?></li>
				<li>maanden (31 dagen): <?php echo $maanden ?></li>
				<li>jaren (365 dagen): <?php echo $jaren ?></li>
			</ul>

		</p>
    </body>
</html>