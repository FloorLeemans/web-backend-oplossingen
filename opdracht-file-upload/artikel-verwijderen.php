<?php

	include_once('klasses/Database.php');

	session_start();

	$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root'); // Connectie maken

	$dbInstanceTemp = new Database($db);

	$toggleArchivedQuery 	=	'UPDATE artikels 
								SET `is_archived` = 1
								WHERE `id` = :id';

	$toggleArchivedPlaceholders	=	array(':id' => $_GET['artikel']);

	$dbInstanceTemp->query( $toggleArchivedQuery, $toggleArchivedPlaceholders );


	$_SESSION['notification'] = "Uw artikel is met succes verwijderd.";

	header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/artikel-overzicht.php");

?>