<?php

//Getallen van 0 tot 100 afdrukken met komma en spatie

$getallen = array();

for ($getal = 0; $getal <= 100; ++$getal)
	{
		$getallen[]	=	$getal;
	}

	$getallenReeks = implode( ', ', $getallen );

//Getallen deelbaar door 3, groter dan 40 en kleiner dan 80

$nummers = array();

for ( $nummer = 0; $nummer <= 100; ++$nummer )
{
	if ( $nummer % 3 == 0 && $nummer > 40 && $nummer < 80 )
	{
		$nummers[]	=	$nummer;
	}
}

	$nummerReeks = implode( ', ', $nummers );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht For</title>
    </head>

    <body>
    	<h1>Oplossing for - Deel 1</h1>
    	<p>
    		Getallenreeks 1: <?= $getallenReeks ?>
    	</p>

		<p>
			Getallenreeks 2: <?= $nummerReeks ?>
		</p>
    </body>
</html>