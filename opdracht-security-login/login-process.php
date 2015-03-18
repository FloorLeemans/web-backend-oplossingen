<?php

	include_once('klasses/Database.php');

	session_start();

	if (isset($_POST['login']))
	{
		$_SESSION['login']['email'] 	=	$_POST['email'];
		$email 							=	$_SESSION['login']['email'];
		$_SESSION['login']['password'] 	=	$_POST['paswoord'];
		$password 						=	$_SESSION['login']['password'];


		if ($email == "") 
		{
			$_SESSION['notification']	=	"Gelieve een e-mailadres in te vullen.";
			header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
		}

		elseif ($password == "") 
		{
			$_SESSION['notification']	=	"Gelieve een paswoord in te vullen.";
			header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
		}

		else
		{
			$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root'); // Connectie maken

			$dbInstanceTemp = new Database($db);

			$emailControleQuery		=	'SELECT users.email
											FROM users
											WHERE email=:email';

			$emailControlePlaceholders 	=	array(':email' => $email);
			$emailControle 	= 	$dbInstanceTemp->query($emailControleQuery, $emailControlePlaceholders);

			//ALS E-MAILADRES AL BESTAAT IN DATABASE
			if (!isset($emailControle[0])) 
			{
				$_SESSION['notification']	=	"De gebruiker met het e-mailadres " . $email . " komt niet voor in onze database. Probeer opnieuw of registreer je via onderstaande link.";

				header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
			}

			else
			{
				$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root'); // Connectie maken

				$dbInstanceTemp = new Database($db);

				$selectSaltQuery 	=	'SELECT users.salt, users.hashed_password
											FROM users
											WHERE users.email = :email';

				$selectSaltPlaceholders	=	array(':email' => $email);

				$dbArray	=	$dbInstanceTemp->query($selectSaltQuery, $selectSaltPlaceholders);

				//var_dump($dbArray);

				if ((hash('sha512', ($dbArray[0]['salt'] . $password))) == ($dbArray[0]['hashed_password'])) 
				{
					unset($_SESSION['notification']);

					$cookieValue = $email . ',' . hash('sha512', ($email . $dbArray[0]['salt'])); 
					setcookie('login', $cookieValue, time() + 60*60*24*30);

					unset($_SESSION['login']);
					header("Location: http://oplossingen.web-backend.local/opdracht-security-login/dashboard.php");
				}

				else

				{
					$_SESSION['notification']	=	"De combinatie van het ingevulde e-mailadres en wachtwoord klopt niet. Probeer opnieuw.";
					header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
				}
			}
		}
	}

	header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");

?>