<?php

//Getallen van 0 tot 100 afdrukken met komma en spatie

$getal = 0;
$getallen = array();

while ($getal <= 100)
	{
		$getallen[] = $getal;
		++$getal;
	}

$getallenReeks = implode(', ', $getallen);

//Getallen deelbaar door 3, groter dan 40 en kleiner dan 80
$nummer = 0;
$nummers = array();

while ($nummer <=100)
{
	if ($nummer %3 == 0 && $nummer > 40 && $nummer < 80)
		{
		$nummers[] = $nummer;
		}
	++$nummer;
}

$nummerReeks = implode(', ', $nummers)


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht While</title>
    </head>

    <body>
    	<h1>Oplossing while - Deel 1</h1>
    	<p>
    		Getallenreeks 1: <?= $getallenReeks ?>
    	</p>

<!--	Als je niet met implode werkt, kan je het zo met foreach printen:

		<p>
    		<?php foreach ($nummers as $nummer): ?>
				<?= $nummer ?>
			<?php endforeach ?>
		</p>
-->

		<p>
			Getallenreeks 2: <?= $nummerReeks ?>
		</p>
    </body>
</html>