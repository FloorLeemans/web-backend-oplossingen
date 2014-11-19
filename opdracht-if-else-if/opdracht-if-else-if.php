<?php

$getal	=	49;
$onder	=	((floor($getal/10))*10);
$boven	=	($onder+10);

$tekst	=	'Het getal ligt tussen ' . $onder . ' en ' . $boven . '.';

$tekstomgekeerd	=	strrev($tekst);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht if-else-if</title>
    </head>
    <body>
        <h1>Opdracht if/else/if</h1>

        <p>
        	Getal = <?php echo $getal ?>
        </p>
        <p>
        	<?php echo $tekst ?>
        </p>
        <p>
        	<?php echo $tekstomgekeerd ?>
        </p>
    </body>
</html>