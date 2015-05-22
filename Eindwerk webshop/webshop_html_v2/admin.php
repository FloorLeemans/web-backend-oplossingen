<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Dashboard - Movie shot</title>
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
						<p>Welkom Administrator<a class="active" href="admin.php">Dashboard</a><a href="productoverzicht.php">Producten</a><a href="index.php">Uitloggen</a><a href="winkelmandje.php"><img src="img/winkelkar.png" alt="winkelmandje"></a></p>
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
							<h2>Bestellingen</h2>
							<div class="line lang8"></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-bottom"><strong>DATUM</strong></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-bottom no-margin-left"><strong>BESTELNUMMER</strong></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-bottom no-margin-left"><strong>KLANT</strong></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-bottom no-margin-left"><strong>TOTAALPRIJS</strong></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-bottom no-margin-left"><strong>STATUS</strong></p>
								</div>
							</div>
							<h3>Besteld</h3>
							<div class="line lang8 dun"></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>11-05-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000012</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Wieza Lauwers</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">47,83 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld" selected>Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>05-05-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000011</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Julie Van Nooten</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">33,12 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld" selected>Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>04-05-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000010</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Floor Leemans</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">67,24 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld" selected>Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>04-05-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000009</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Greet Mons</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">27,00 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld" selected>Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>02-05-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000008</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Gerd Verstraeten</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">25,95 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld" selected>Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<h3>Betaald</h3>
							<div class="line lang8 dun"></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>25-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000006</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Henny Van de Ven</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">39,10 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald" selected>Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>23-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000005</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Seppe Van Gompel</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">72,06 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald" selected>Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>19-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000002</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Nand Van Gils</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">56,54 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald" selected>Betaald</option>
										<option value="verzonden">Verzonden</option>
									</select>
								</div>
							</div>
							<h3>Verzonden</h3>
							<div class="line lang8 dun"></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>29-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000007</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Gust Vercammen</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">15,95 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden" selected>Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>21-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000003</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Janine Van Pinxteren</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">37,65 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden" selected>Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>20-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000004</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Jan Van Hees</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">114,12 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden" selected>Verzonden</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p>17-04-2015</p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">0000000001</a></p>
								</div>
								<div class="col-md-3 col-sm-3">
									<p class="no-margin-left"><a href="#">Floor Leemans</a></p>
								</div>
								<div class="col-md-2 col-sm-2">
									<p class="no-margin-left">110,65 EUR</p>
								</div>
								<div class="col-md-2 col-sm-2">
									<select  class="no-margin-left" name="status">
										<option value="besteld">Besteld</option>
										<option value="betaald">Betaald</option>
										<option value="verzonden" selected>Verzonden</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Welkom administrator</h2>
									<div class="line fatline"></div>
									<p>U heeft 4 nieuwe bestellingen sinds 3 mei 2015.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Producten</h2>
									<div class="line fatline"></div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<a href="productoverzicht.php">
												<button>Productenoverzicht</button>
											</a>
										</div>
										<div class="col-md-12 col-sm-12">
											<a href="producttoevoegen.php">
												<button>Product toevoegen</button>
											</a>
										</div>
									</div>
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