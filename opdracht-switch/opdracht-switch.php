<?php

$getal	=	3;
$dag	=	'Deze dag bestaat niet';

switch ($getal)
{
case 1:
$dag = 'maandag'; break;
case 2:
$dag = 'dinsdag'; break;
case 3:
$dag = 'woensdag'; break;
case 4:
$dag = 'donderdag'; break;
case 5:
$dag = 'vrijdag'; break;
case 6:
$dag = 'zaterdag'; break;
case 7:
$dag = 'zondag'; break;
default:
$tekst = 'deze dag bestaat niet'; }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht Switch</title>
    </head>
    <body>
        <h1>Opdracht Switch</h1>
        <p>
        	Dag <?php echo $getal ?> van de week is: <?php echo $dag ?>
        </p>
    </body>
</html>