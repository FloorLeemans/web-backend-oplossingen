<?php 

$healthCat		=	-30;
$healthDolphin 	=	20;

function __autoload($classname) 
	{
		$filename = 'classes/'. $classname .'.php';
		include_once($filename);
	}

$frog		=	new Animal ('Kermit', 'male', 100);
$cat		=	new Animal ('Dikkie', 'male', 100);
$dolphin	=	new Animal ('Flipper', 'female', 100);

$simba		=	new Lion ('Simba', 'male', 100, 'Congo lion');
$scar		=	new Lion ('Scar', 'male', 100, 'Kenia lion');

$zeke		=	new Zebra ('Zeke', 'male', 100, 'Quagga');
$zana		=	new Zebra ('Zana', 'female', 100, 'Selous');

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht classes-extend</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Instanties van de Animal class</h1>
        <p><?= $frog->getName() ?> is van het geslacht <?= $frog->getGender() ?> en heeft momenteel <?= $frog->getHealth() ?> levenspunten. Special move: <?= $frog->doSpecialMove() ?>.</p>
    	<p><?= $cat->getName() ?> is van het geslacht <?= $cat->getGender() ?> en heeft momenteel <?= $cat->changeHealth($healthCat) ?> levenspunten. Special move: <?= $cat->doSpecialMove() ?>.</p>
    	<p><?= $dolphin->getName() ?> is van het geslacht <?= $dolphin->getGender() ?> en heeft momenteel <?= $dolphin->changeHealth($healthDolphin) ?> levenspunten. Special move: <?= $dolphin->doSpecialMove() ?>.</p>
    
    	<h1>Specifieke dierenklassen die gebaseerd zijn op de Animal class</h1>
    	<h1>Instanties van de Lion class</h1>
    	<p>De speciale move van <?= $simba->getName() ?> (soort: <?= $simba->getSpecies() ?>): <?= $simba->doSpecialMove() ?>.</p>
    	<p>De speciale move van <?= $scar->getName() ?> (soort: <?= $scar->getSpecies() ?>): <?= $scar->doSpecialMove() ?>.</p>

    	<h1>Instanties van de Zebra class</h1>
    	<p>De speciale move van <?= $zeke->getName() ?> (soort: <?= $zeke->getSpecies() ?>): <?= $zeke->doSpecialMove() ?>.</p>
    	<p>De speciale move van <?= $zana->getName() ?> (soort: <?= $zana->getSpecies() ?>): <?= $zana->doSpecialMove() ?>.</p>
	</body>
</html>