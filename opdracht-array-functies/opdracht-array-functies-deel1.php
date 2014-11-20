<?php

$dieren = array('kat', 'hond', 'vogel', 'vis', 'hamster', 'cavia');
$dierenCount	=	count($dieren);

//-------------------------

$teZoekenDier	=	'kat';

if (in_array('kat', $dieren)) {
    $antwoord = 'Ja, de ' . $teZoekenDier . ' is gevonden.';
}
else {
	$antwoord = 'Nee, de ' . $teZoekenDier . ' is NIET gevonden.';
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht array functies</title>

    </head>
    <body>
        <h1>Array functies - Deel 1</h1>
        <p>Er zitten <?php echo $dierenCount ?> elementen in de array $dieren.</p>
        <p>Is het dier <?php echo $teZoekenDier ?> terug te vinden in de array?<br />
        <?php echo $antwoord ?></p>
    </body>
</html>