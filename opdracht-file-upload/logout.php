<?php

if (!isset($_COOKIE['login'])) 
{
	header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/login-form.php");
}

unset($_COOKIE['login']);
setcookie('login', '', time() - 3600); // empty value and old timestamp
$_SESSION['notification'] 	=	"U bent uitgelogd. Tot de volgende keer.";
header("Location: http://oplossingen.web-backend.local/opdracht-file-upload/login-form.php");

?>