<?php

$zin        =   array('Elon Musk', 'Waarde 2', 'Waarde 3', 'Waarde 4');
$htmlZin    =   '<html><head></head><body><p>Dit is tekst.</p></body></html>';

function drukArrayAf($array)
{
    $resultaat  =   array();

    foreach ($array as $key => $value)
    {
        $resultaat[]    =   'zin[' . $key . '] heeft waarde ' . "'" . $value . "'";
    }

    return $resultaat;
}

function validateHtmlTag($html)
{
    $start  =   '<html>';
    $einde  =   '</html>';
    $validatie  =   'wel';

    //stripos zorgt ervoor dat hij hoofdletters en kleine letters als dezelfde beschouwd
    $posStart   =   stripos($html, $start);
    $posEinde   =   strripos($html, $einde);

    if ($posStart === FALSE || $posEinde === FALSE) {
        $validatie  =   'niet';
    }
    else
    {
        $validatie  =   'wel';
    }

    return $validatie;
}

$oplossingArray =   drukArrayAf($zin);

$oplossingHtml  =   validateHtmlTag($htmlZin);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht Function</title>
    </head>

    <body>
        <h1>Opdracht function - deel 2</h1>

        <h2>De array afgedrukt:</h2>

        <p>
            <?php foreach ( $oplossingArray as $value ): ?>
                <p><?= $value ?></p>
            <?php endforeach ?>
        </p>

        <h2>Is de html-string geldig:</h2>

        <p>Html-string: <?= htmlentities($htmlZin) ?></p>
        <p>De html-string is <?= $oplossingHtml ?> geldig.</p>

    </body>
</html>