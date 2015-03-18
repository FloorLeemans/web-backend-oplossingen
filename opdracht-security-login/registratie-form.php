<?php

session_start();

if (isset($_COOKIE['login'])) 
{
	header("Location: http://oplossingen.web-backend.local/opdracht-security-login/dashboard.php");
}

$password 	=	'';
$email 		=	'';
$message 	=	'';

if (isset($_SESSION['registreer'])) 
{
	$email 			=	$_SESSION['registreer']['email'];

	if (isset($_SESSION['registreer']['password'])) {
		$password 	=	$_SESSION['registreer']['password'];
	}
}

if (isset($_SESSION['notification'])) 
{
	$message 	=	$_SESSION['notification'];
}

//var_dump($_SESSION);

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registreren</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<h1>Registreren</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<form action="registratie-process.php" method="post">
			<label for="email">e-mail</label>
			<input type="text" name="email" value="<?= $email ?>">

			<label for="paswoord">paswoord</label>
			<input type="text" name="paswoord" value="<?= $password ?>">
			<input type="submit" name="generatePassword" value="Genereer een paswoord">

			<input type="submit" name="submit" value="Registreer">
		</form>

		<p>Heb je al een account? Ga dan naar de <a href="login-form.php">loginpagina</a>.</p>
    </body>
</html>