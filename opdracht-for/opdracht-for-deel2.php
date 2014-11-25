<?php

$tafelMax	=	10;
$tafels    	=	array();

for ($tafelCount=0; $tafelCount <= $tafelMax ; ++$tafelCount) { 
	
	$tafelContainer = array();

	for ($product=0; $product <= 10; ++$product) { 
		$tafelContainer[]	=	$tafelCount * $product;
	}

	$tafels[$tafelCount] = $tafelContainer;
}

//var_dump($tafels);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht For</title>
        <style>
        	.green {
        		background-color: lightgreen;
        	}
        </style>
    </head>
    <body>
        <h1>Opdracht For - Deel 2</h1>
        <p>
        	<table>
        		
        		<?php foreach ($tafels as $tafel): ?>

        			<tr>

        			<?php foreach ($tafel as $productTafel): ?>
        				<td class="<?= ($productTafel %2 == 0) ? 'green' : ''; ?>">
        					<?= $productTafel ?>
        				</td>
        			<?php endforeach ?>

					</tr>

				<?php endforeach ?>

        	</table>
        </p>
    </body>
</html>