<?php

$text	=	file_get_contents('text-file.txt');

$textChars	=	str_split($text);

$textSortZA	=	$textChars;
rsort($textSortZA);

$textSortReverse	=	array_reverse($textSortZA);

$teller =	array();

foreach($textSortReverse as $value)
	{
		if (isset($teller[$value]))
		{
			++$teller[$value];
		}
		else
		{
			$teller[$value] = 1;
		}
	}

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht foreach</title>
    </head>
    <body>
        <h1>Opdracht foreach - Deel 1</h1>

        <h2>De string 'text':</h2>
        <p><?= $text ?></p>

        <h2>Lijst met alle karakters in de string 'text':</h2>
        <pre><?php var_dump($teller) ?></pre>

    </body>
</html>