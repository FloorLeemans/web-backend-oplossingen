<?php

$md5HashKey =   'd1fa402db91a7a93c4f414b8278ce073';
$Argument1  =   2;
$Argument2  =   8;
$Argument3  =   'a';

function procent($string, $argument)
{
    $lengteArray    =   strlen($string);
    $aantalArgument =   substr_count($string, $argument);
    $procent        =   $aantalArgument / $lengteArray * 100;
    return $procent;
}

$procent1   =   procent($md5HashKey, $Argument1);
$procent2   =   procent($md5HashKey, $Argument2);
$procent3   =   procent($md5HashKey, $Argument3);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht functions gevorderden</title>
    </head>
    <body>
        <h1>Opdracht Functions gevorderden - Deel 1</h1>

        <p>
            Functie 1: De needle '<?= $Argument1 ?>' komt <?= $procent1 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
        <p>
            Functie 2: De needle '<?= $Argument2 ?>' komt <?= $procent2 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
        <p>
            Functie 3: De needle '<?= $Argument3 ?>' komt <?= $procent3 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
    </body>
</html>