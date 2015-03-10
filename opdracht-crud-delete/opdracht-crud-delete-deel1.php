<?php

$message 	=	false;

try 
{
	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] );

	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');

	//De delete moet eerst gedaan worden, want als je eerst de database opvraagt, dan geeft hij niet meteen weer wat je hebt verwijderd en moet je eerst refreshen.
	if (isset($_POST['delete'])) 
	{
		$queryDelete 	=	"DELETE FROM brouwers
							WHERE brouwernr = :brouwernr
							LIMIT 1";

		$statementDelete = $db->prepare($queryDelete);

		$statementDelete->bindValue(':brouwernr', $_POST['delete'] );

		$statementDelete->execute();

		if (isset ($_POST['delete'])) 
		{
			$message  	=	"De datarij werd goed verwijderd.";
		}
		else
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

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht CRUD Delete</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        
    	<h1>Overzicht van de brouwers</h1>

    	<form method="post" action="<?= BASE_URL?>">
	    	<table>
	    		<thead>
	    			<tr>
	    					<td>#</td>
	    					<!--je kan de kolomnamen ook terugvinden met php door een fetchfields, die kan ook gebruikt worden als er bv nog geen resultaten zijn, dat kan met onderstaande methode niet-->
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