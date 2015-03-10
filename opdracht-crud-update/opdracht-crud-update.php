<?php

$message	=	false;

try
{
	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] );
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

	//De delete moet eerst gedaan worden, want als je eerst de database opvraagt, dan geeft hij niet meteen weer wat je hebt verwijderd en moet je eerst refreshen.
	if (isset($_POST['delete']))
	{
		$queryDelete	=	"DELETE FROM brouwers
							WHERE brouwernr = :brouwernr
							LIMIT 1";

		$statementDelete = $db->prepare($queryDelete);
		$statementDelete->bindValue(':brouwernr', $_POST['delete'] );
		$statementDelete->execute();

		$message	=	"De datarij werd goed verwijderd.";
	}

	else
	{
		$message	=	"De datarij kon niet verwijderd worden. Probeer opnieuw.";
	}

	if (isset($_POST['edit']))
	{
		$queryShow		=	"SELECT * FROM `brouwers`
							WHERE `brouwernr`= :brouwernr
							LIMIT 1";

		$statementShow = $db->prepare($queryShow);
		$statementShow->bindValue(':brouwernr', $_POST['edit'] );
		$statementShow->execute();

		$brouwersSelected = array();
		while ($row = $statementShow->fetch(PDO::FETCH_ASSOC))
		{
			$brouwersSelected	=	$row;
		}
	}

	if (isset($_POST['wijzigen']))
	{
		$queryEdit		=	"UPDATE `brouwers`
							SET `brnaam`= :brnaam,
								`adres`= :adres,
								`postcode`= :postcode,
								`gemeente`= :gemeente,
								`omzet`= :omzet
							WHERE  `brouwernr`= :brouwernr";

		$statementEdit = $db->prepare($queryEdit);

		$statementEdit->bindValue(':brouwernr', $_POST['brouwernr'] );
		$statementEdit->bindValue(':brnaam', $_POST['brouwernaam']);
		$statementEdit->bindValue(':adres', $_POST['adres']);
		$statementEdit->bindValue(':postcode', $_POST['postcode']);
		$statementEdit->bindValue(':gemeente', $_POST['gemeente']);
		$statementEdit->bindValue(':omzet', $_POST['omzet']);

		$statementEdit->execute();

		$message  	=	"Aanpassing succesvol doorgevoerd.";
	}

	$queryStringBrouwers 	=	"SELECT *
								FROM brouwers";

	$statementBrouwers = $db->prepare($queryStringBrouwers);
	$statementBrouwers->execute();

	$brouwers = array();
	while ($row = $statementBrouwers->fetch(PDO::FETCH_ASSOC))
	{
		$brouwers[]	=	$row;
	}
}

catch (PDOException $e)
{
	$message	=	'Aanpassing is niet gelukt. Probeer opnieuw of neem contact op met de <a href="mailto:demolink@mail.be">systeembeheerder</a> wanneer deze fout blijft aanhouden.' . $e->getMessage();
}

?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Opdracht CRUD Update</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<?php if (isset($_POST['edit'])): ?>

			<h1>Brouwerij <?= $brouwersSelected['brnaam'] ?> ( #<?= $brouwersSelected['brouwernr'] ?> ) wijzigen</h1>

				<form class="editForm" method="post" action="<?= BASE_URL?>">
					<input type="hidden" name="brouwernr" id="brouwernr" value="<?= $brouwersSelected['brouwernr'] ?>">

					<label for="brouwernaam">Brouwernaam</label>
					<input type="text" name="brouwernaam" id="brouwernaam" value="<?= $brouwersSelected['brnaam'] ?>">

					<label for="adres">Adres</label>
					<input type="text" name="adres" id="adres" value="<?= $brouwersSelected['adres'] ?>">

					<label for="postcode">Postcode</label>
					<input type="text" name="postcode" id="postcode" value="<?= $brouwersSelected['postcode'] ?>">

					<label for="gemeente">Gemeente</label>
					<input type="text" name="gemeente" id="gemeente" value="<?= $brouwersSelected['gemeente'] ?>">

					<label for="omzet">Omzet</label>
					<input type="text" name="omzet" id="omzet" value="<?= $brouwersSelected['omzet'] ?>">

					<input type="submit" name="wijzigen" value="Wijzigen">
				</form>

		<?php endif ?>

		<h1>Overzicht van de bieren</h1>

		<form method="post" action="<?= BASE_URL?>">
			<table>
				<thead>
					<tr>
						<td>#</td>
						<?php foreach ($brouwers[0] as $key => $brouwer): ?>
							<td><?= $key ?></td>
						<?php endforeach ?>
						<td></td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($brouwers as $key => $brouwer): ?>
						<tr class="<?php if (($key+1)%2 !=0): ?>odd<?php endif ?>">
							<td><?= ($key + 1) ?></td>
							<?php foreach ($brouwer as $key => $gegevens): ?>
								<td><?= $gegevens ?></td>
							<?php endforeach ?>
							<td>
								<input type="submit" value="<?= $brouwer['brouwernr'] ?>" name="delete">
							</td>
							<td>
								<input type="submit" value="<?= $brouwer['brouwernr'] ?>" name="edit">
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</form>

		<p><?= $message ?></p>

	</body>
</html>