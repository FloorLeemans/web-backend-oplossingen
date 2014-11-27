<?php

$md5HashKey =   'd1fa402db91a7a93c4f414b8278ce073';
$argument1  =   2;
$argument2  =   8;
$argument3  =   'a';

function procent($string, $argument)
{
    $lengteArray    =   strlen($string);
    $aantalArgument =   substr_count($string, $argument);
    $procent        =   $aantalArgument / $lengteArray * 100;
    return $procent;
}

function procent2($argument)
{
    global  $md5HashKey;
    $lengteArray    =   strlen($md5HashKey);
    $aantalArgument =   substr_count($md5HashKey, $argument);
    $procent        =   $aantalArgument / $lengteArray * 100;
    return $procent;
}

function procent3()
{
    global $md5HashKey;
    global $argument3;
    $lengteArray    =   strlen($md5HashKey);
    $aantalArgument =   substr_count($md5HashKey, $argument3);
    $procent        =   $aantalArgument / $lengteArray * 100;
    return $procent;
}

$procent1   =   procent($md5HashKey, $argument1);
$procent2   =   procent2($argument2);
$procent3   =   procent3();

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
            Functie 1: De needle '<?= $argument1 ?>' komt <?= $procent1 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
        <p>
            Functie 2: De needle '<?= $argument2 ?>' komt <?= $procent2 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
        <p>
            Functie 3: De needle '<?= $argument3 ?>' komt <?= $procent3 ?>% voor in de hash key '<?= $md5HashKey ?>'
        </p>
    </body>
</html>