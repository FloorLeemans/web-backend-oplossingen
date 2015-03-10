<?php

$message 	=	false;
$confirmMessage 	= 	false;

try 
{
	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] );

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

	//De delete moet eerst gedaan worden, want als je eerst de database opvraagt, dan geeft hij niet meteen weer wat je hebt verwijderd en moet je eerst refreshen.
	if (isset($_POST['delete'])) 
	{
		$deleteRow			=	$_POST['delete'];
		$confirmMessage		=	"Bent u zeker dat u deze datarij wil verwijderen?";
		
		if (isset($_POST['confirm'])) 
		{
				$queryDelete 	=	"DELETE FROM brouwers
									WHERE brouwernr = :brouwernr
									LIMIT 1";

				$statementDelete = $db->prepare($queryDelete);

				$statementDelete->bindValue(':brouwernr', $deleteRow );

				$statementDelete->execute();

				$message  	=	"De datarij werd goed verwijderd.";
		}
		
		elseif (isset($_POST['nope']))
		{
			$message 	=	"De datarij kon niet verwijderd worden. Probeer opnieuw.";
		}
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
	$message	=	'Er ging iets mis: ' . $e->getMessage();
}

var_dump($_POST['delete']);
var_dump($deleteRow);
var_dump($_POST['confirm']);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht CRUD Delete - Deel 2</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        
    	<h1>Overzicht van de bieren</h1>

    	<?php if (isset($_POST['delete'])): ?>
	    	<form method="post" action="<?= BASE_URL ?>">
	    		<p class="error"><?= $confirmMessage ?></p>
	    		<input type="submit" value="Ja" name="confirm" class="confirm">
	    		<input type="submit" value="Nee" name="nope" class="confirm">
	    	</form>
    	<?php endif ?>

    	<?= $message ?>

    	<form method="post" action="<?= BASE_URL?>">
	    	<table>
	    		<thead>
	    			<tr>
	    					<td>#</td>
	    				<?php foreach ($brouwers[0] as $key => $brouwer): ?>
	    					<td><?= $key ?></td>
	    				<?php endforeach ?>
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
	    				</tr>
	    			<?php endforeach ?>
	    		</tbody>
	    	</table>
	    </form>

	    <p><?= $message ?></p>

    </body>
</html>