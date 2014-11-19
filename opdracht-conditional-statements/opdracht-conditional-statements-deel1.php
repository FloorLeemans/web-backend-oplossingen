<?php

	$number	=	3;
	$day	=	'day';

	if ($number == 1) {
	$day = "monday";
	}

	if ($number == 2) {
	$day = "tuesday";
	}

	if ($number == 3) {
	$day = "wednesday";
	}

	if ($number == 4) {
	$day = "thursday";
	}

	if ($number == 5) {
	$day = "friday";
	}

	if ($number == 6) {
	$day = "saturday";
	}

	if ($number == 7) {
	$day = "sunday";
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conditional Statements | deel 1</title>
    </head>
    <body>

    <h1>Oplossing conditional statements | deel 1</h1>
        <p>
        	<?php echo $number; ?>: <?php echo $day; ?>
        </p>

    </body>
</html>