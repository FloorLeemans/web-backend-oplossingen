<?php

	$controller	=	'artikelsOverzicht';

	if (isset($_GET['page'])) 
	{
		switch ($_GET['page']) 
		{
			case 'contact':
				$controller =	'contact';
				break;
		}
	}

	if ($controller === 'artikelsOverzicht')
	{
		include 'php/artikels.php';
	}

	include 'html/header-partial.html';

	$bodyString =	'artikels_overzicht';

	switch ($controller) {
		case 'contact':
			$bodyString =	'contact';
			break;
		
		default:
			$bodyString =	'artikels_overzicht';
			break;
	}

	include ('html/' . $bodyString . '-body-partial.html');
	include 'html/footer-partial.html';

?>