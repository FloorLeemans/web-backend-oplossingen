<?php

$tafelMax	=	10;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht While</title>
        <style>
        	.green {
        		background-color: lightgreen;
        	}
        </style>
    </head>
    <body>
        <h1>Opdracht While - Deel 2</h1>
        <p>

        	<table>
			<?php 
				$tafel 		= 	0;
			?>
			<?php while($tafel <= $tafelMax):  ?>
				
				<tr>
					<?php 
						$product = 	0;
					?>
					<?php while($product <= $tafelMax):  ?>

						<td class="<?= (($tafel * $product) % 2 > 0 ) ? '' : 'green' ?>"><?= $tafel * $product ?></td>
						<?php $product++ ?>
					<?php endwhile ?>
				</tr>

				<?php $tafel++ ?>
			<?php endwhile ?>
			</table>

        </p>
    </body>
</html>