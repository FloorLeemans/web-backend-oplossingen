<?php

$text	=	file_get_contents('text-file.txt');

$textUppercase  =   strtoupper($text);

//maakt volledige ascii-tabel en geeft van alle charachters het aantal, ook diegenen die er niet zijn, als je die niet wil weergeven mode=1 (dus als de value 0 is)
$characterArray =   count_chars($textUppercase, 1);

//var_dump ($characterArray);

$alphabetArray  =   array();
for($karakterNumber = 65; $karakterNumber <= 90; ++$karakterNumber)
{
    //als karakterNumber=65 wordt karakter A
    $karakter   =   chr($karakterNumber);

    //var_dump($karakter);

    if (isset($characterArray[$karakterNumber]))
    {
        $alphabetArray[$karakter]   =   $characterArray[$karakterNumber];
    }
}

//var_dump ($alphabetArray);


/* Zo kan ook, maar nu gemakkelijker met alles in uppercase gezet:
key >= 65 && key<= 90
of
key >=97 && key <= 122
*/

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht foreach</title>
    </head>
    <body>
        <h1>Opdracht foreach - Deel 2</h1>

        <table>
            <thead>
                <tr>
                    <td>Karakter</td>
                    <td>ASCII-nummer</td>
                    <td>aantal in tekst</td>
                </tr>
                <tr>
                    
                </tr>
            </thead>
        </table>

    </body>
</html>