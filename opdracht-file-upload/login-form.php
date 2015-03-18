<?php

session_start();

if (isset($_COOKIE['login'])) 
{
	header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/dashboard.php");
}

$password 	=	'';
$email 		=	'';
$message 	=	'';

if (isset($_SESSION['login'])) 
{
	$email 	=	$_SESSION['login']['email'];

	if (isset($_SESSION['login']['password'])) {
		$password 	=	$_SESSION['login']['password'];
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
		<title>Inloggen</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<h1>Inloggen</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<form action="login-process.php" method="post">
			<label for="email">e-mail</label>
			<input type="text" name="email" value="<?= $email ?>">

			<label for="paswoord">paswoord</label>
			<input type="password" name="paswoord" value="<?= $password ?>">

			<input type="submit" name="login" value="Inloggen">
		</form>

		<p>Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a>.</p>
    </body>
</html>