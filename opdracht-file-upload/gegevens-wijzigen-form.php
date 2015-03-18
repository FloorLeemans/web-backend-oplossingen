<?php

include_once('klasses/Database.php');

session_start();

$cookieArray = explode(',', $_COOKIE['login']);

$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root'); // Connectie maken

$dbInstanceTemp = new Database($db);

$updateShowQuery = 'SELECT users.index, users.email, users.profile_picture
							FROM users
							WHERE users.email = :email';

$updateShowPlaceholders	=	array(':email' => $cookieArray[0]);

$updateShowArray = $dbInstanceTemp->query( $updateShowQuery, $updateShowPlaceholders );
$updateShowArray = $updateShowArray[0];

$id 				=	$updateShowArray['index'];
$email 				=	$updateShowArray['email'];
$imgAlt 			=	$updateShowArray['email'];
$imgName			=	$updateShowArray['profile_picture'];
$profile_picture 	=	"img/" . $imgName;

var_dump($updateShowArray);


if (isset($_SESSION['userEdit'])) 
{
	$id 			=	$_SESSION['userEdit']['id'];
	$email 			=	$_SESSION['userEdit']['email'];
	$imgName 		=	$_SESSION['userEdit']['imgName'];
	$imgAlt 		=	$_SESSION['userEdit']['email'];
	$profile_picture =	"img/" . $_SESSION['userEdit']['imgName'];

}

if (isset($_SESSION['notification'])) 
{
	$message 	=	$_SESSION['notification'];
}

var_dump($profile_picture);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wijzigen | Gegevens</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $cookieArray[0] ?> | <a href="logout.php">uitloggen</a></p>

		<h1>Gegevens wijzigen</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $message ?></p>		
		<?php endif ?>

		<form method="POST" action="gegevens-bewerken.php" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" value="<?= $id ?>">

			<label for="profile_picture">
				Profielfoto
				<img src="<?= $profile_picture ?>" alt="<?= $imgAlt ?>">
			</label>
			<input type="file" name="profile_picture" id="profile_picture">
			
			<label for="email">E-mail</label>
			<input type="text" name="email" id="email" value="<?= $email ?>">

			<input type="submit" name="userEdit" value="Gegegevens wijzigen">

		</form>

	</body>
</html>