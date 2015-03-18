<?php

include_once('klasses/Database.php');

session_start();

unset($_SESSION['notification']);

$cookieTrue	=	false;

if (!isset($_COOKIE['login'])) 
{
	header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/login-form.php");
}

else 
{
	$cookieArray = explode(',', $_COOKIE['login']);

	$db = new PDO('mysql:host=localhost;dbname=opdracht-crud-cms', 'root', 'root'); // Connectie maken

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
		header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/login-form.php");
	}
}

//var_dump($_SESSION);

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $cookieArray[0] ?> | <a href="logout.php">uitloggen</a></p>

		<h1>Dashboard</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<p><a href="artikel-overzicht.php">Artikels</a></p>

	</body>
</html>