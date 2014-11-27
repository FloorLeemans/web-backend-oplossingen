<?php

//file-name altijd als string ('') meegeven
$text	=	file_get_contents('text-file.txt');

//Elk karakter wordt apart in een array gezet
$textChars	=	str_split($text);

//Array gaan sorteren, eerst array kopiëren omdat de functie invloed heeft op de oorspronkelijke array, gesorteerd volgens ASCII-tabel
$textSortZA	=	$textChars;
rsort($textSortZA);

//Gesorteerde array omdraaien, dus van A tot Z, heeft GEEN invloed op de oorspronkelijke array
$textSortReverse	=	array_reverse($textSortZA);
//var_dump (ord (' ')); geeft de plaats in de ASCII-tabel weer, dus hier: 32, want is 'space'

/*
$textChars  =   array()

foreach($textSortReverse as $character)
    {
        if (isset($textChars[$character]))
        {
            ++$textChars[$character];
        }
        else
        {
            $textChars[$character] = 1;
        }
    }
*/
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

$aantalkarakters    =   count($teller);

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

        <p>In totaal kwamen er <?= $aantalkarakters ?> karakters voor.</p>

    </body>
</html>