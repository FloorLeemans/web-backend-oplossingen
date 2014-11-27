<?php

$pigHealth		=	5;
$maximumThrows	=	8;

function calculatieHit()
{
	global $pigHealth;

	$raakKans	=	rand(1,100);
	$isRaak		=	false;
	$varkens	=	'varkens';
	$zijn		=	'zijn';

	if ($raakKans <= 40) 
	{
		$isRaak	=	true;
		--$pigHealth;
	}

	if ($pigHealth == 1)
	{
		$varkens	=	'varken';
		$zijn		=	'is';
	}

	if ($isRaak == true) 
	{
		$resultaat	=	'Raak! Er ' . $zijn . ' nog maar ' . $pigHealth . ' ' . $varkens . ' over.';
	}
	else
	{
		$resultaat	=	'Mis! Nog ' . $pigHealth . ' ' . $varkens . ' in het team.';
	}

	return $resultaat;
}

function launchAngrybird()
{
	global $maximumThrows;
	global $pigHealth;
	static $array	=	array();

	if ($maximumThrows > 0 && $pigHealth != 0) 
	{
		--$maximumThrows;
		$array[]	=	calculatieHit();
		//omdat je de functie 'launchAngrybird' hierin zet, moet je een array maken, anders overschrijft hij alles.
		launchAngrybird();
	}
	else
	{
		if ($pigHealth > 0)
		{
			$array[]	=	'Verloren!';
		}
		else
		{
			$array[]	=	'Gewonnen!';
		}
	}

	return $array;
}

$resultaat = launchAngrybird();

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht functions gevorderden</title>
    </head>

    <body>
        <h1>Opdracht Functions gevorderden - Deel 2</h1>
        <p>
        	<?php foreach ($resultaat as $key): ?> 
        		<p><?= $key ?></p>
        	<?php endforeach ?>
        </p>
    </body>
</html>