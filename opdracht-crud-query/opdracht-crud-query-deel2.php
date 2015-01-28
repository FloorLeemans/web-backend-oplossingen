<?php

	$message 	=	'';

	try
	{
		// Connectie maken.
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

		// Een query klaarmaken. 
		$queryStringBrouwers = "SELECT 	brnaam, 
										brouwernr
								FROM 	brouwers";

		// Maakt een pdo-statement.
		$statementBrouwers = $db->prepare($queryStringBrouwers);

		// Een query uitvoeren.
		$statementBrouwers->execute();

		$brouwers = array();

		// Alle resultaten uit de PDO-statement halen, zodat je dat niet in html moet doen
		while ($row = $statementBrouwers->fetch(PDO::FETCH_ASSOC) )
		{
			$brouwers[]	=	$row;
		}

		if (isset($_GET['brouwernr'])) {
			// Een query klaarmaken met GET-variabele.
			$brouwernr 	=	$_GET['brouwernr'];

			// Om SQL-injectie te voorkomen schrijf je :brouwernr, want die herkent ':' niet
			$queryStringBier = "SELECT 	naam
								FROM 	bieren 
								WHERE 	bieren.brouwernr = :brouwernr";

			$statementBieren = $db->prepare($queryStringBier);

			// SQL-statements worden hierdoor ge-escaped
			$statementBieren->bindValue(':brouwernr', $_GET['brouwernr'] );

			// Een query uitvoeren
			$statementBieren->execute();

			$bieren = array();

			// Resultaten
			while ( $row = $statementBieren->fetch( PDO::FETCH_ASSOC ) )
			{
				$bieren[]	=	$row;
			}

			//var_dump($bieren);
		}

		$message 	=	'Er is een connectie gemaakt met de database.';
	}

	//foutcode
	catch ( PDOException $e )
	{
		$message	=	'Er ging iets mis: ' . $e->getMessage();
	}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht Crud Query - Deel 2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

		<h1>Opdracht Crud Query - Deel 2</h1>	
		<p><?= $message ?></p>

		<h2>Overzicht van de bieren</h2>

		<!-- Formulier om brouwers mee op te zoeken -->
		<form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
			<label for="brouwernr">Selecteer brouwer</label>
			<select name="brouwernr">
				<?php foreach ($brouwers as $brouwer): ?>
					<!-- Brouwernummer wordt de value, brouwernaam wordt getoond -->
					<option value="<?= $brouwer['brouwernr']?>" <?= ($brouwer['brouwernr'] === $brouwernr) ? 'selected' : '' ?>><?= $brouwer['brnaam'] ?></option>
				<?php endforeach ?>
			</select>

			<input type="submit" value="Geef mij alle bieren van deze brouwerij">
		</form>

		<!--
		php-GET-variabele vermijden in html. beter met een variabele in php block werken met if-statement. Of variabele in php-block definiëren
		-->

		<?php if (isset($_GET['brouwernr'])): ?>

		<table>
			<thead>
				<tr>
					<td>Aantal</td>
					<?php foreach ($bieren[0] as $key => $bier): ?>
						<td><?= $key ?></td>
					<?php endforeach ?>
					
				</tr>
			</thead>

			<tbody>
				
				<?php foreach ($bieren as $key => $bier): ?>
					<tr class="<?php if (($key+1)%2 != 0): ?>odd<?php endif ?>">
						<td><?= ($key + 1) ?></td>

						<?php foreach ($bier as $detail): ?>
							<td><?= $detail ?></td>
						<?php endforeach ?>
					</tr>
				<?php endforeach ?>
				
			</tbody>

		</table>

		<?php endif ?>

</body>
</html>