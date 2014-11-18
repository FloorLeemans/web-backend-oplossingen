<?php

	$number	=	6;
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

	$day	=	strtoupper($day);
    $day_replace 	=	str_replace( 'A', 'a' , $day );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conditional Statements | deel 1</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <script src="js/main.js"></script>

        <p>
        	<?php echo $number; ?>: <?php echo $day_replace; ?>
        </p>

    </body>
</html>