<?php

$jaar	=	2012;
$uitleg	=	'Ik ben geen schrikkeljaar';

if ((($jaar % 400) == 0) || (($jaar % 4) == 0) && (($jaar % 100) != 0)) {
$uitleg = 'Ik ben een schrikkeljaar'; }
else
{
'Ik ben geen schrikkeljaar';
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht if/else</title>
    </head>
    <body>
		<h1>Opdracht if/else - Deel 1</h1>        

		<p><?php echo $jaar; ?>: <?php echo $uitleg; ?></p>
    </body>
</html>