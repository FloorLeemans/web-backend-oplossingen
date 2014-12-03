<?php

$Hans 	=	array('geld' => 100000, 'rentevoet' => 8, 'jaren' => 10, 'counter' => 1, 'historiek' => array());
$Leonie	=	array('geld' => 25000, 'rentevoet' => 3, 'jaren' => 5, 'counter' => 1, 'historiek' => array());

function rentevoet($array)
{

	if ($array['counter'] <= $array['jaren']) 
	{
		$rente = $array['geld'] / 100 * $array['rentevoet'];
		$array['geld'] = $array['geld'] + $rente;
		$array['historiek'][] = "Na " . $array['counter'] . " jaar ontvang je aan een rentevoet van " . $array['rentevoet'] . "% een rente van " . floor($rente) . " euro en heb je in totaal " . floor($array['geld']) . " euro op de bank staan." . "<br>";
		++$array['counter'];
		return rentevoet($array);
	}
	else
		{
		return $array;
		}
}

$geldHans = rentevoet($Hans);
$geldLeonie	=	rentevoet($Leonie);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht functions recursive</title>
    </head>
    <body>
        <h1>Opdracht functions recursive - Deel 1</h1>
        	<h2>Hans zijn bankrekening</h2>
        	<p>
        	<?php foreach ($geldHans['historiek'] as $uitkomst): ?>
        		<p><?= $uitkomst ?></p>
        	<?php endforeach ?>
        	</p>

        	<h2>Leonie haar bankrekening</h2>
        	<p>
        	<?php foreach ($geldLeonie['historiek'] as $uitkomst): ?>
        		<p><?= $uitkomst ?></p>
        	<?php endforeach ?>
        	</p>
    </body>
</html>