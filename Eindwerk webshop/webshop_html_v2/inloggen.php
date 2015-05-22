<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Inloggen - Movie shot</title>
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
						<p><a href="inloggen.php" class="active">Inloggen</a><a href="registreren.php">Registreren</a><a href="winkelmandje.php"><img src="img/winkelkar.png" alt="winkelmandje"></a></p>
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
						<h2>Inloggen</h2>
						<div class="line lang8"></div>
						<form>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>E-mailadres</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="text" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Wachtwoord</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<input type="password" value="">
								</div>
							</div>
						</form>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<a href="profiel.php">
									<button style="float:right">Inloggen</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Registreren</h2>
									<div class="line"></div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p>Nog geen account?</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<a href="registreren.php">
												<button style="float:right; margin-right:15px">Registreer hier</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2 style="margin-top:20px">Wachtwoord vergeten</h2>
									<div class="line"></div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p>Wachtwoord vergeten? Vul uw e-mailadres in. Wij sturen u een e-mail met meer informatie</p>
											<p style="margin-bottom:0"><strong>E-mailadres</strong></p>
										</div>
										<div class="col-md-12 col-sm-12">
											<input style="width:330px; margin-top:0" type="text" value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<a href="<?= BASE_URL ?>">
												<button style="float:right; margin-right:15px">Wijzig wachtwoord</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

	<!-- PRODUCTEN -->

		<div class="container infobox">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="titel">
						<h1>In promotie</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="#">
								<img class="filmposter" src="img/dvd-covers/the imitation game.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort">
								<img src="img/dvd.png" alt="dvd">
							</div>
							<div class="moreInfo">
								<p><a href="#">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs not">15,99 EUR</p>
								<p class="actieprijs">12,99 EUR</p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
				</div>

				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="#">
								<img class="filmposter" src="img/dvd-covers/orange is the new black s2.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort"><img src="img/dvd.png" alt="dvd"></div>
							<div class="moreInfo">
								<p><a href="#">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs">29,99 EUR</p>
								<p class="actieprijs none"></p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
				</div>

				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="detailpagina-guardians.php">
								<img class="filmposter" src="img/dvd-covers/guardians of the galaxy.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort"><img src="img/bluray.png" alt="bluray"></div>
							<div class="moreInfo">
								<p><a href="detailpagina-guardians.php">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs">24,99 EUR</p>
								<p class="actieprijs none"></p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
				</div>

				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="#">
								<img class="filmposter" src="img/dvd-covers/image.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort"><img src="img/dvd.png" alt="dvd"></div>
							<div class="moreInfo">
								<p><a href="#">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs">12,99 EUR</p>
								<p class="actieprijs none"></p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
				</div>

				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="#">
								<img class="filmposter" src="img/dvd-covers/hunger games catching fire.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort"><img src="img/dvd.png" alt="dvd"></div>
							<div class="moreInfo">
								<p><a href="#">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs not">12,99 EUR</p>
								<p class="actieprijs">11,99 EUR</p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
				</div>

				<div class="col-md-2 filmbox">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="#">
								<img class="filmposter" src="img/dvd-covers/the hobbit the battle of the five armies.jpg" alt="">
							</a>
						</div>
						<div class="product-caption col-md-12 col-sm-12">
							<div class="soort"><img src="img/dvd.png" alt="dvd"></div>
							<div class="moreInfo">
								<p><a href="#">Meer info ></a></p>
							</div>
							<div class="prijsbox">
								<p class="prijs">21,99 EUR</p>
								<p class="actieprijs none"></p>
							</div>
						</div>
					</div>
					<p class="buttonWinkelmand"><a href="winkelmandje.php">Bestellen</a></p>
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