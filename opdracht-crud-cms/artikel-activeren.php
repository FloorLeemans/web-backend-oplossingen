<?php

	include_once('klasses/Database.php');

	session_start();

	$db = new PDO('mysql:host=localhost;dbname=opdracht-crud-cms', 'root', 'root'); // Connectie maken

	$dbInstanceTemp = new Database($db);

	$toggleActiveQuery 	=	'UPDATE artikels 
								SET `is_active` = IF(`is_active`=1, 0, 1)
								WHERE `id` = :id';

	$toggleActivePlaceholders	=	array(':id' => $_GET['artikel']);

	$dbInstanceTemp->query( $toggleActiveQuery, $toggleActivePlaceholders );


	$_SESSION['notification'] = "Uw artikel is met succes van status veranderd.";

	header("Location: http://oplossingen.web-backend.local/opdracht-crud-cms/artikel-overzicht.php");
?>
