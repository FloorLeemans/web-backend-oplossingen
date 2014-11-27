<?php

$nummer1	=	16;
$nummer2	=	37;
$zin		=	'Hallo, ik ben Floor Leemans.';

function berekenSom($getal1, $getal2)
{
	$resultaat	=	$getal1 + $getal2;
	return $resultaat;
}

function vermenigvuldig($getal1, $getal2)
{
	$resultaat	=	$getal1 * $getal2;
	return $resultaat;
}

function isEven($getal)
{
	//restwaarde == false
	$resultaat	=	$getal %2 == false;
	return $resultaat;
}
/*	Oplossing uit de klas:

	function isEven($getal)
	{
		$resultaat 		= false;
		if ($getal %2 == 0)
		{
			$resultaat 	= true;
		}
	}
*/

function LengteUppercase($string)
{
	$uppercase 	=	strtoupper($string);
	$lengte 	=	strlen($string);
	$resultaat	=	$uppercase . ' (Deze string heeft ' . $lengte . ' tekens.)';
	return $resultaat;
}
/*
	function LengteUppercase($string)
	{
		$container	=	array();

		$LengteUppercase=	strlen($string);
		$Uppercase=			strtoupper($string);

		$container ['lengte']		=	$length;
		$container ['Uppercase']	=	$Uppercase;

		return $container
	}

	in html wordt dat dan:
	oplossingUpLen['Lengte'] en ook zo met uppercase
*/

$oplossingSom		=	berekenSom($nummer1, $nummer2);
$oplossingProduct	=	vermenigvuldig($nummer1, $nummer2);
$oplossingEven		=	isEven($nummer1);
$oplossingUpLen		=	LengteUppercase($zin);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht Function</title>
    </head>

    <body>
        <h1>Opdracht function - deel 1</h1>

        <p>
        	Getal 1 = <?= $nummer1 ?><br />
        	Getal 2 = <?= $nummer2 ?><br />
        	De som van de twee getallen = <?= $oplossingSom ?><br />
        	Het product van de twee getallen = <?= $oplossingProduct ?><br />
        	Is getal 1 even?
        </p>
        <pre>
        	<?php var_dump($oplossingEven) ?>
        </pre>

        <h2>De zin</h2>
        <p><?= $zin ?></p>

        <h2>Zin in Uppercase + lengte</h2>
        <p><?= $oplossingUpLen ?></p>

    </body>
</html>