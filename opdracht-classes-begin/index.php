<?php

//automatisch laden van klassen, dus niet moeten blijven includen
function __autoload($classname) 
	{
		$filename = 'classes/'. $classname .'.php';
		include_once($filename);
	}

$new		=	rand(-100,100);
$unit		=	rand(-100,100);

//klasse aanroepen
$procent 	= 	new Percent($new, $unit);

$absolute	=	$procent->absolute;
$relative	=	$procent->relative;
$hundred	=	$procent->hundred . ' %';
$nominal 	=	$procent->nominal;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel=stylesheet href="css/style.css">
        <title>Classes: begin</title>
    </head>
    <body>
    	<h1>Classes:begin</h1>
    	<p>Hoeveel procent is <?= $new ?> van <?= $unit ?>?</p>
        <table>
        	<tr>
        		<td>Absoluut</td>
        		<td><?= $absolute ?></td>
        	</tr>
        	<tr>
        		<td>Relatief</td>
        		<td><?= $relative ?></td>
        	</tr>
        	<tr>
        		<td>Geheel getal</td>
        		<td><?= $hundred ?></td>
        	</tr>
        	<tr>
        		<td>Nominaal</td>
        		<td><?= $nominal ?></td>
        	</tr>
        </table>
    </body>
</html>