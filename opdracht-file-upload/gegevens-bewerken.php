<?php

include_once('klasses/Database.php');

session_start();

var_dump($_POST);
var_dump($_FILES);

if (isset($_POST['userEdit']))
{

	$_SESSION['userEdit']['id']					=	$_POST['id'];
	$id 										=	$_SESSION['userEdit']['id'];
	$_SESSION['userEdit']['email']				=	$_POST['email'];
	$email 										=	$_SESSION['userEdit']['email'];
	$imgName 									=	'default.png';

		
		if ((($_FILES["profile_picture"]["type"] == "image/gif")
		|| ($_FILES["profile_picture"]["type"] == "image/jpeg")
		|| ($_FILES["profile_picture"]["type"] == "image/png"))
		&& ($_FILES["profile_picture"]["size"] < 2000000)) 
		{
			define('ROOT', dirname(__FILE__));
			$date 		=	date("Y-m-d-H-i-s");
			$imgName 	=	$date . "_" . $_FILES['profile_picture']['name'];
			$profile_picture 	=	ROOT . "/img/" . $imgName;
				
				if (file_exists($profile_picture)) 
				{
					$date 		=	date("Y-m-d-H-i-s");
					$imgName 	=	$date . "_" . $_FILES['profile_picture']['name'];
					$profile_picture 	=	ROOT . "/img/" . $imgName;
				} 

				else 
				{
					move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $profile_picture);
				}
		}

		else
		{
			$_SESSION['notification'] 	=	"De afbeelding die u wilt uploaden heeft de niet de juiste extensie (gif, jpeg of png) of is groter dan 2MB. Probeer opnieuw.";
			header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/gegevens-wijzigen-form.php");
		}
	
	$_SESSION['userEdit']['imgName'] 	=	$imgName;


	$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root'); // Connectie maken

	$dbInstanceTemp = new Database($db);

	$editUserString  =   'UPDATE users
									SET users.profile_picture = :imgName,
										users.email = :email
                            	        WHERE users.index = :id';

	$editUserPlaceholders = array( 
									':id' => $id,
									':imgName' => $imgName,
									':email' => $email,
									);

	$dbInstanceTemp->query( $editUserString, $editUserPlaceholders );

	$_SESSION['notification'] 	=	"Uw profiel is met succes gewijzigd.";
	header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/gegevens-wijzigen-form.php");
}

?>