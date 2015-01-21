<?php

	$message 	=	'';

	try
	{
		// Connectie maken.
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

		// Een query klaarmaken. 
		$queryString = 'SELECT *
							FROM bieren
							INNER JOIN brouwers
								ON bieren.brouwernr = brouwers.brouwernr
							WHERE naam LIKE "du%"
							AND brnaam LIKE "%a%"';

		$statement = $db->prepare($queryString);

		// Een query uitvoeren.
		$statement->execute();

		$bieren = array();

		while ($row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$bieren[]	=	$row;
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
    <title>Opdracht Crud Query - deel 1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

		<h1>Opdracht Crud Query - deel 1</h1>	
		<p><?= $message ?></p>

		<h2>Overzicht van de bieren</h2>

			<table>
				<thead>
					<tr>
						<td>#</td>
						
						<!-- Kolomnamen van database opvragen in array -->
						<?php foreach ($bieren[0] as $key => $bier): ?>
								<td><?= $key ?></td>
						<?php endforeach ?>
					</tr>
				</thead>
		
<!-- <?php var_dump($bieren) ?> -->

				<tbody>
					<!-- Keys opvragen om verschillende rijen te nummeren -->
					<?php foreach ($bieren as $key => $bier): ?>

						<!-- CSS-klasse maken voor oneven rijen -->
						<tr class="
								<?php if (($key+1)%2 != 0): ?>
									odd
								<?php endif ?>">

							<td>
							<?= $key + 1 ?></td>

							<!-- De details van elk bier (2de array) opvragen -->
							<?php foreach ($bier as $detail): ?>
								<td><?= $detail ?></td>
							<?php endforeach ?>

						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
		
</body>
</html>