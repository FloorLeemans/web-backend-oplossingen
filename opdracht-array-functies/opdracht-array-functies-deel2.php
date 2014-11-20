<?php

$dieren = array('kat', 'hond', 'vogel', 'vis', 'hamster', 'cavia');
$dierenCount	=	count($dieren);

//Staat bepaald dier in de array?

$teZoekenDier	=	'kat';

if (in_array('kat', $dieren)) {
    $antwoord = 'Ja, de ' . $teZoekenDier . ' is gevonden.';
}
else {
	$antwoord = 'Nee, de ' . $teZoekenDier . ' is NIET gevonden.';
}

//Sorteer dieren alfabetisch

$dierenAlfabet = $dieren;
sort($dierenAlfabet);

//Arrays samenvoegen

$zoogdieren = array('beer', 'leeuw', 'tijger');

$dierenLijst =   array_merge($dieren, $zoogdieren);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht array functies</title>

    </head>
    <body>
        <h1>Array functies - Deel 2</h1>
        <p>Array 'dieren':</p>
        <pre>
            <?php var_dump($dieren) ?>
        </pre>
        <p>
            Er zitten <?php echo $dierenCount ?> elementen in de array $dieren.
        </p>
        <p>
            Is het dier <?php echo $teZoekenDier ?> terug te vinden in de array?<br />
            <?php echo $antwoord ?>
        </p>
        <p>
            De array alfabetisch geordend:
        </p>
        <pre>
            <?php var_dump($dierenAlfabet) ?>
        </pre>
        <p>
            Array 'zoogdieren':
        </p>
        <pre>
            <?php var_dump($zoogdieren) ?>
        </pre>
        <p>
            Array 'dieren' en 'zoogdieren' samengevoegd:
        </p>
        <pre>
            <?php var_dump($dierenLijst) ?>
        </pre>
    </body>
</html>