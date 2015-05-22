<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Product toevoegen - Movie shot</title>
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
					<div class="col-md-8 col-sm-8">
						<h2>Product toevoegen</h2>
						<div class="line lang12"></div>
						<form>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Titel</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row" style="margin-top:30px">
								<div class="col-md-2 col-sm-2">
									<p><strong>Beschrijving</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<textarea rows="4">
									</textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Uitvoering</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<select name="status">
										<option value="dvd" selected>DVD</option>
										<option value="blu-ray">Blu-ray</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Soort</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<select name="status">
										<option value="speelfilm" selected>Speelfilm</option>
										<option value="tvserie">TV-serie</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Releasedatum</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="date" value="">
								</div>
							</div>
							<div class="row" style="margin-top:30px">
								<div class="col-md-2 col-sm-2">
									<p><strong>Genre</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="checkbox" name="genre" value="familiefilm" checked>Famieliefilm<br>
									<input type="checkbox" name="genre" value="animatie">Animatie<br>
									<input type="checkbox" name="genre" value="romantisch">Romantisch<br>
									<input type="checkbox" name="genre" value="komedie">Komedie<br>
									<input type="checkbox" name="genre" value="avontuur">Avontuur<br>
									<input type="checkbox" name="genre" value="actie">Actie<br>
									<input type="checkbox" name="genre" value="thriller">Thriller<br>
									<input type="checkbox" name="genre" value="horror">Horror
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Regiseur</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Acteurs</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Talen</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Ondertitels</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Speelduur</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Leeftijdsindicatie</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row" style="margin-top:30px">
								<div class="col-md-2 col-sm-2">
									<p><strong>Prijs</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Promotieprijs</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Actie</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row" style="margin-top:30px">
								<div class="col-md-2 col-sm-2">
									<p><strong>Trailer</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Filmposter</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="file" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Filmbanner</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="file" value="">
								</div>
							</div>
						</form>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<a href="productoverzicht.php">
									<button style="float:right">Product toevoegen</button>
								</a>
							</div>
						</div>
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