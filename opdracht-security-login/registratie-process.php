<?php

	include_once('klasses/Database.php');

	session_start();

	//FUNCTIE VOOR RANDOM PASWOORD TE MAKEN
	function generatePassword() 
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?._-%$/';
		$charactersLength = strlen($characters);
		$password = '';
		for ($i = 0; $i < 15; $i++) 
		{
			$password .= $characters[rand(0, $charactersLength - 1)];
		}
		return $password;
	}

	//GEBEURT ALS ER OP KNOP 'GENEREREER PASWOORD' WORDT GEKLIKT
	if (isset($_POST['generatePassword']))
	{
		unset($_SESSION['notification']);
		$_SESSION['registreer']['email'] 		=	$_POST['email'];
		$_SESSION['registreer']['password'] 	=	generatePassword();

		header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");
	}

	//ALS ER OP KNOP 'SUBMIT' WORDT GEKLIKT
	if (isset($_POST['submit'])) 
	{
		$_SESSION['registreer']['email'] 	=	$_POST['email'];
		$email 						=	$_SESSION['registreer']['email'];
		$password 					=	$_SESSION['registreer']['password'];

		$validationEmail 			=	filter_var($_SESSION['registreer']['email'], FILTER_VALIDATE_EMAIL);

		//ALS E-MAILADRES FOUT GESCHREVEN IS OF LEEG IS
		if ($validationEmail === false)
		{
			$_SESSION['notification']	=	"Dit is geen geldig e-mailadres. Vul een geldig e-mailadres in.";

			header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");
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
			if (isset($emailControle[0])) 
			{
				$_SESSION['notification']	=	"De gebruiker met het e-mailadres " . $email . " komt reeds voor in onze database.";

				header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");
			}

			//ALS PASWOORD NIET GEGENEREERD IS MET KNOP
			elseif ($password == "")
			{
				$_SESSION['notification']	=	"Genereer een paswoord alvorens te registreren.";

				header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");
			}

			//USER OPSLAAN IN DATABASE
			else
			{
				unset($_SESSION['notification']);

				$salt 				=	generatePassword();
				$hashed_password	=	hash('sha512', ($salt . $password));

				$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root'); // Connectie maken

				$dbInstanceTemp = new Database($db);

				$insertRegistreerQuery 	=	'INSERT 	INTO users 
													(users.email,
													 users.salt,
													 users.hashed_password,
													 users.last_login_time) 
													VALUES 
													(:email,
													 :salt,
													 :hashed_password,
													 NOW() )';

				$insertRegistreerPlaceholders 	=	array(
													':email' => $email,
													':salt' => $salt,
													':hashed_password' => $hashed_password
												);

				$dbInstanceTemp->query($insertRegistreerQuery, $insertRegistreerPlaceholders);

				//COOKIE 'LOGIN' SETTEN
				$cookieValue = $email . ',' . hash('sha512', ($email . $salt)); 
				setcookie('login', $cookieValue, time() + 60*60*24*30);

				unset($_SESSION['registreer']);
				header("Location: http://oplossingen.web-backend.local/opdracht-security-login/dashboard.php");
			}
		}
	}

	header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");

?>