<?php

	if (isset($_POST['submit'])) 
	{

		// Het bestand moet gif, jpeg of png zijn en mag niet groter zijn dan 2MB
		if ((($_FILES["foto"]["type"] == "image/gif")
				|| ($_FILES["foto"]["type"] == "image/jpeg")
				|| ($_FILES["foto"]["type"] == "image/png"))
				&& ($_FILES["foto"]["size"] < 2000000)) 
		{
			// Als er een fout in het bestand wordt gevonden (bv. corrupte file door onderbroken upload), moet er een foutboodschap getoond worden
			if ($_FILES["foto"]["error"] > 0) 
			{
				$_SESSION['notification']	=	"Het bestand dat u wilde oploaden is corrupt. Return Code: " . $_FILES["foto"]["error"];
			}

			else 
			{
				// De root van het bestand moet achterhaald worden om de absolute pathnaam (de plaats op de schijf van de server) te achterhalen
				// Zo weet de server waar het bestand moet terecht komen.
				// We kunnen dit doen door de functie dirname() toe te passen op dit bestand (=__FILE__)
				define('ROOT', dirname(__FILE__));

				$_SESSION['foto']	=	$_FILES['foto']['name'];
					$imageFile			=	$_SESSION['foto'];

				// Haal de bestandsnaam en de extensie uit het bestand
				$fileParts		=	pathinfo($imageFile);
				$fileNameTemp 	=	$fileParts['filename'] . date('d-n-Y-H-i-s');
				$fileName		=	strtolower(str_replace(" ", "-", $fileNameTemp));
				
				////////////////////////////////////////////////////////////
				function uniekeNaam ($bestandsnaam) 
				{
					$fileName	=	hash(md5, (      $bestandsnaam));
				}

				if (file_exists(ROOT . "/uploads/img/" . $_FILES["foto"]["name"]))
				{
					//Als het bestand reeds bestaat in de map, moet er een foutboodschap getoond worden
					$_SESSION['message']['error']	=	$_FILES["foto"]["name"] . " bestaat al. Kies een ander bestand.";
				} 

				else 
				{
					// Anders mag het bestand geüpload worden naar de map
					// move_uploaded_file($_FILES["foto"]["tmp_name"], (ROOT . "/img/thumb-" . $_FILES["foto"]["name"]));
				}
			}
		}

		else 
		{
			$_SESSION['notification']	=	"Ongeldig bestand.";
			//header("Location: http://oplossingen.web-backend.local/opdracht-image-manipulation-gallery/photo-upload-form.php");
		}
	}

?>



$_SESSION['foto']	= $_FILES['foto']['name'];
					$imageFile			=	$_SESSION['foto'];

					// Haal de bestandsnaam en de extensie uit het bestand
					$fileParts	=	pathinfo($imageFile);
					$fileNameTemp 	=	$fileParts['filename'] . date('d-n-Y-H-i-s');
					$fileName	=	strtolower(str_replace(" ", "-", $fileNameTemp));
					$ext		=	$fileParts['extension'];

					// Bepaal de dimensies van de verkleining
					$thumbDimensions['w']	=	100;
					$thumbDimensions['h']	=	100;

					// Controleer om welke extensie het gaat en voer de overeenstemmende methode uit
					switch ($ext)
					{
						case ('jpg'):
						case ('jpeg'):
							$source 	= 	imagecreatefromjpeg($_FILES['foto']['tmp_name']);
							break;
							
						case ('png'):
							$source 	=	imagecreatefrompng($_FILES['foto']['tmp_name']);
							break;

						case ('gif'):
							$source 	=	imagecreatefromgif($_FILES['foto']['tmp_name']);
							break;
					}

					// Haal de breedte en de hoogte op uit het originele bestand
					list($width, $height)	=	getimagesize($_FILES['foto']['tmp_name']); // kent automatisch de value uit getimagesize (retunt array(width, height)) toe aan de variabele in de list in de overeenstemmende volgorde

					if ($width !== $height) 
					{
						$verschil 	=	$width - $height;

						if ($height > $width) 
						{
							$afstandX 	=	0;
							$afstandY 	=	$verschil / -2;
							$lengte 	=	$width;
						}

						else 
						{
							$afstandX 	=	$verschil / 2;
							$afstandY 	=	0;
							$lengte 	=	$height;
						}
					}

					else 
					{
						$afstandX 	=	0;
						$afstandY 	=	0;
						$lengte 	=	$width;
					}

					$thumb 	=	imagecreatetruecolor($thumbDimensions['w'], $thumbDimensions['h']);

					//om de achtergrond die oorspronkelijk transparant was WIT te maken ipv default zwart
					$white 	= imagecolorallocate($thumb, 255, 255, 255);
					imagefill($thumb, 0, 0, $white);

					$cropMaten 	=	array('x' => $afstandX, 'y' => $afstandY, 'width' => $lengte, 'height' => $lengte);
					imagecrop ( $source , $cropMaten );

					// Resize het origineel naar de gewenste dimensies en plaats het de verkleinde versie in het nieuwe canvas.
					// nieuwe canvas = destination, oude canvas = source, destination x, destination y, source x, source y, destination width, destination height, source width, source height
					imagecopyresized($thumb, $source, 0, 0, $afstandX, $afstandY, $thumbDimensions['w'],$thumbDimensions['h'], $lengte, $lengte);
					
					$resized 	= 	imagejpeg($thumb, (ROOT . "/img/thumb-" . $fileName . ".jpg"), 100);
					$fileLink 	=	"img/thumb-" . $fileName . ".jpg";




















<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php if (isset($_SESSION['notification'])): ?>
		<?= $_SESSION['notification'] ?>
	<?php endif ?>
</body>
</html>