<?php

$nummers = array(8, 7, 8, 7, 3, 2, 1, 2, 4);

//Enkel unieke values weergeven

$nummersUniek = array_unique($nummers);

//Array sorteren van groot naar klein

$nummersUniekSort	=	$nummersUniek;
arsort($nummersUniekSort);

$nummersSort 	=	$nummers;
arsort($nummersSort);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht array functies</title>

    </head>
    <body>
    	<h1>Array functies - Deel 3</h1>
    	<p>
    		Array 'nummers':
    	</p>
    	<pre>
    		<?php var_dump($nummers) ?>
    	</pre>
    	<p>
    		Duplicaten uit de array gehaald:
    	</p>
    	<pre>
    		<?php var_dump($nummersUniek) ?>
    	</pre>
    	<p>
    		Array 'nummers' gesorteerd van groot naar klein:
    	</p>
    	<pre>
    		<?php var_dump($nummersSort) ?>
    	</pre>
    	<p>
    		Unieke nummers gesorteerd van groot naar klein:
    	</p>
    	<pre>
    		<?php var_dump($nummersUniekSort) ?>
    	</pre>
    </body>
</html>