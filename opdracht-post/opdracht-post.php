<?php

$username 	=	'stijn';
$password	=	'azerty';
$message	=	'Gelieve u in te loggen op de website via bovenstaand formulier.';

if (isset($_POST['submit'])) 
{

if ($_POST['username'] == $username && $_POST['paswoord'] == $password) 
{
	$message	=	'Welkom ' . ucfirst($_POST['username']) . '.';
}
	else 
	{
		$message	=	'Er ging iets mis bij het inloggen, probeer opnieuw.';
	}
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht-post</title>
        <style>
        	body{
        		font-family: sans-serif;
        		color: #454545;
        	}

        	h1{
        		font-size:32px;
        		border-bottom: solid 1px lightgrey;
        	}

        	.message{
        		border-top: solid 1px lightgrey;
        		margin-top: 30px;
        		padding-top: 15px;
        	}

        	.label{
        		margin-bottom: 0px;
        	}

        	.text{
        		margin-top: 2px;
        	}

        </style>
    </head>
    <body>
    	<h1>Inloggen</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        	<p class="label"><label for="username">Username</label></p>
        	<p class="text"><input type="text" name="username" id="username"></p>
        	<p class="label"><label for="paswoord">Paswoord</label></p>
        	<p class="text"><input type="password" name="paswoord" id="paswoord"></p>
        	<p><input type="submit" value="Verzenden" name="submit"></p>
        </form>

        <p class="message"><?= $message ?></p>
    </body>
</html>