<?php

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] );

try 
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

	$brouwernaam 	=	'';
	$adres 			=	'';
	$postcode 		=	'';
	$gemeente 		=	'';
	$omzet 			=	'';

	if (isset($_POST['submit'])) 
	{
		$brouwernaam 	=	$_POST['brouwernaam'];
		$adres 			=	$_POST['adres'];
		$postcode 		=	$_POST['postcode'];
		$gemeente 		=	$_POST['gemeente'];
		$omzet 			=	$_POST['omzet'];

		$queryBrouwers = "INSERT INTO brouwers
										   (brnaam, 
											adres, 
											postcode, 
											gemeente, 
											omzet)
								VALUES (:brouwernaam, 
										:adres, 
										:postcode, 
										:gemeente, 
										:omzet)";

		$statementBieren = $db->prepare($queryBrouwers);

		$statementBieren->bindValue(':brouwernaam', $brouwernaam);
		$statementBieren->bindValue(':adres', $adres);
		$statementBieren->bindValue(':postcode', $postcode);
		$statementBieren->bindValue(':gemeente', $gemeente);
		$statementBieren->bindValue(':omzet', $omzet);

		$statementBieren->execute();

		//Eindboodschap
		$lastId = $db->lastInsertId();

		if (isset ($lastId)) {
			$endMessage = "Brouwerij " . $brouwernaam . " is succesvol toegevoegd. Het unieke nummer van deze brouwerij is " . $lastId . ", waarbij " . $lastId . " de primary key is van de toegevoegde datarij.";
		}
		else {
			$endMessage = "Er ging iets mis met het toevoegen. Probeer opnieuw.";
		}
	}
	
}

//Foutboodschap
catch (PDOException $e) 
{
	$message	=	'Er ging iets mis: ' . $e->getMessage();
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht CRUD Insert</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <?php if (isset ($e)): ?>
        	<p class="error"><?= $message ?></p>
        <?php endif ?>

    	<h1>Voeg een brouwer toe</h1>

    	<form method="post" action="<?= BASE_URL?>">
    		<label for="brouwernaam">Brouwernaam</label>
    		<input type="text" name="brouwernaam" id="brouwernaam">

    		<label for="adres">Adres</label>
    		<input type="text" name="adres" id="adres">

    		<label for="postcode">Postcode</label>
    		<input type="text" name="postcode" id="postcode">

    		<label for="gemeente">Gemeente</label>
    		<input type="text" name="gemeente" id="gemeente">

    		<label for="omzet">Omzet</label>
    		<input type="text" name="omzet" id="omzet">

    		<input type="submit" name="submit" value="Verzenden">
    	</form>

    	<?php if (isset ($_POST['submit'])): ?>
    		<p><?= $endMessage ?></p>
    	<?php endif ?>

    </body>
</html>