<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Productenoverzicht - Movie shot</title>
		<link rel="shortcut icon" type="image/png" href="img/favicon2.png">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]
			<style type="text/css">
				.gradient {
					filter: none;
				}
			</style>
		<![endif]-->
	</head>
	<body>

	<!-- HEADER -->

		<header class="container">
			<div class="row top">
				<div class="col-md-6 col-sm-6">
					<a href="index.php"><img class="logo" src="img/logo3.png" alt=""></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<nav class="login">
						<p>Welkom Administrator<a href="admin.php">Dashboard</a><a class="active" href="productoverzicht.php">Producten</a><a href="index.php">Uitloggen</a><a href="winkelmandje.php"><img src="img/winkelkar.png" alt="winkelmandje"></a></p>
					</nav>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="producten.php">Producten</a></li>
								<li><a href="#">Over ons</a></li>
								<li><a href="#">Contact</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Zoeken">
									</div>
									<button type="submit" class="btn btn-default"></button>
								</form>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

	<!-- BESTELLING -->

		<div class="container infobox">
			<div class="winkelmandje update">

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<h2>Producten</h2>
							<div class="line lang12"></div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class=""><strong>TITEL</strong></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left"><strong>UITVOERING</strong></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left"><strong>SOORT</strong></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><strong>PROMOTIE</strong></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><strong>PRIJS</strong></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><strong>PROMOPRIJS</strong></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">The Imitation Game</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">dvd</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">speelfilm</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">ja</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">15,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">12,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">Orange is the New Black - seizoen 2</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">dvd</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">tv-serie</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">nee</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">29,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">Guardians of the Galaxy</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">blu-ray</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">speelfilm</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">nee</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">24,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">Image</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">dvd</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">speelfilm</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">nee</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">12,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">The Hunger Games: Catching Fire</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">dvd</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">speelfilm</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">ja</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">12,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">11,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<p class="">The Hobbit: The Battle of the Five Armies</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">dvd</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">speelfilm</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">nee</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left">21,99 EUR</p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"></p>
								</div>
								<div class="col-md-1 col-sm-1">
									<p class="no-margin-left"><a href="productwijzigen.php">wijzigen</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<a style="float:right; margin-right:15px" href="producttoevoegen.php">
								<button>Product toevoegen</button>
							</a>
						</div>
					</div>
			</div>
		</div>

		<footer class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 footerBottom">
				</div>
				<div class="col-md-4 col-sm-4">
					<h3>Producten</h3>
					<p><a href="#">Speelfilms</a></p>
					<p><a href="#">TV-Series</a></p>
					<p><a href="#">DVD</a></p>
					<p><a href="#">Blu-ray</a></p>
					<p><a href="#">Specials</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<h3>Shoppen</h3>
					<p><a href="#">Winkelmandje</a></p>
					<p><a href="#">Algemene Voorwaarden</a></p>
					<p><a href="#">Ruilen / Retourneren</a></p>
					<p><a href="#">Betalen</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<h3>Over Movie Shot</h3>
					<p><a href="#">Over ons</a></p>
					<p><a href="#">Contact</a></p>
					<p><a href="#">Facebook</a></p>
					<p><a href="#">Twitter</a></p>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- javascript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>