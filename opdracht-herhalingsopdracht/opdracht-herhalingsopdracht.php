<?php

$cursus 		=	false;
$voorbeelden 	=	false;
$opdrachten 	=	false;

//bestanden weergeven met GET-functie
if (isset($_GET['link'])) 
{
	if ($_GET['link'] == 'cursus')
	{
		$cursus = true;
	}

	elseif ($_GET['link'] == 'voorbeelden') 
	{
		$voorbeelden = true;
        $folder = 'voorbeelden';
        $container = showList($folder);
	}

	elseif ($_GET['link'] == 'opdrachten') 
	{
		$opdrachten = true;
        $folder = 'opdrachten';
        $container = showList($folder);
	}
}

//functie om de bestanden in de mappen weer te geven
function showList($folder)
{
    $container  =   scandir('../../cursus/public/cursus/' . $folder . '/');
    array_shift($container);
    array_shift($container);
    return $container;
}

//functie om te zoeken
function searchFiles()
{

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Herhalingsopdracht</title>
        <link rel="stylesheet" href="style.css">
        <style>
        	iframe {
        		width: 1000px;
        		height: 750px;
        	}
        </style>
    </head>
    <body>

        <h1>Indexpagina</h1>
        	<ul>
        	    <li><a href="opdracht-herhalingsopdracht.php?link=cursus">Cursus</a></li>
        	    <li><a href="opdracht-herhalingsopdracht.php?link=voorbeelden">Voorbeelden</a></li>
        	    <li><a href="opdracht-herhalingsopdracht.php?link=opdrachten">Opdrachten</a></li>
        	</ul>

        <form action="opdracht-herhalingsopdracht.php" method="GET">
			<label id="zoek">Zoek naar:</label>
			<input type="text" name="zoek" id="zoek" placeholder="Geef een zoekterm in">
			<input type="submit" value="Verzenden">
        </form>

        <?php if ($cursus): ?>
            <h1>Inhoud</h1>
        	<iframe src="web-backend-cursus.pdf"></iframe>
        <?php endif ?>

        <?php if ($voorbeelden || $opdrachten): ?>
            <h1>Index van de <?= $folder ?></h1>
        	<ul>
                <?php foreach ($container as $bestand): ?>
                    <li>
                        <a href="http://web-backend.local/cursus/<?= $folder ?>/<?= $bestand ?>">
                            <?= $bestand ?>
                        </a>
                    </li>
        	    <?php endforeach ?>
        	</ul>
        <?php endif ?>
        
    </body>
</html>