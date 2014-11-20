<?php

$nummers = array(1, 2, 3, 4, 5);

//Product van array

$productNummers = array_product($nummers);

//Oneven nummers eruit halen

for ($counter = 0; $counter < count($nummers); ++$counter)
{
	$nummer = $nummers[$counter];
	if ($nummer % 2 != 0)
	{
		$onevennummers[] = $nummer;
	}
}

//Tweede array maken met nummers in omgekeerde volgorde

$nummers2 = array_reverse($nummers);

//Nummers van twee arrays met zelfde index bij elkaar optellen

$somArray = array();

foreach ($nummers as $key => $getal) 
{
	$getal1	=	$getal;
	$getal2	=	$nummers2[$key];

	$somArray[]	=	$getal1  + $getal2;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht Arrays basis</title>
    </head>
    <body>
    <h1>Opdracht Arrays basis - Deel 2</h1>
    <p>
    	Array 1:
    </p>
    <pre>
    	<?php var_dump($nummers) ?>
    </pre>
    <p>
    	Het product van de array is: <?php echo $productNummers ?>
    </p>
    <p>
    	De onevennummers uit de eerste array:
    </p>
    <pre>
    	<?php var_dump($onevennummers) ?>
    </pre>
    <p>
    	Array 2 (reverse van array 1):
    </p>
    <pre>
    	<?php var_dump($nummers2) ?>
    </pre>
    <p>
    	Nummers van twee arrays met zelfde index bij elkaar opgeteld:
    </p>
    <pre>
    	<?php var_dump($somArray) ?>
    </pre>
    </body>
</html>