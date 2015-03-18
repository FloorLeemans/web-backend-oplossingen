<?php

include_once('klasses/Database.php');

session_start();

if (!isset($_COOKIE['login'])) 
{
	header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
}

$cookieTrue	=	false;

if (!isset($_COOKIE['login'])) 
{
	//header("Location: http://oplossingen.web-backend.local/opdracht-security-login/registratie-form.php");
}

else 
{
	$cookieArray = explode(',', $_COOKIE['login']);

	$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root'); // Connectie maken

	$dbInstanceTemp = new Database($db);

	$selectSaltQuery 	=	'SELECT users.salt
								FROM users
								WHERE users.email = :email';

	$selectSaltPlaceholders	=	array(':email' => $cookieArray[0]);

	$dbSalt	=	$dbInstanceTemp->query($selectSaltQuery, $selectSaltPlaceholders);

	if ($_COOKIE['login'] == ($cookieArray[0] . ',' . hash('sha512', ($cookieArray[0] . $dbSalt[0]['salt'])))) 
	{
		$cookieTrue =	true;
	}

	else
	{
		unset($_COOKIE['login']);
		setcookie('login', '', time() - 3600); // empty value and old timestamp
		header("Location: http://oplossingen.web-backend.local/opdracht-security-login/login-form.php");
	}
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
		<h1>Dashboard</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<a href="logout.php">uitloggen</a>

	</body>
</html>