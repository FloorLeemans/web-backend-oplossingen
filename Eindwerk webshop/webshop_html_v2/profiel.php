<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Profiel - Movie shot</title>
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
						<p>Welkom Floor<a class="active" href="profiel.php">Profiel</a><a href="index.php">Uitloggen</a><a href="winkelmandje.php"><img src="img/winkelkar.png" alt="winkelmandje"></a></p>
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

				<?php if (isset($_GET['status']) && $_GET['status'] == "update"): ?>

					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h2>Gegevens wijzigen</h2>
							<div class="line lang8"></div>
							<form>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Voornaam</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="Floor">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Achternaam</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="Leemans">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Straat</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="Korte Wijkstraat">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Nummer</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="3">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Bus/Kamer</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Postcode</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="2381">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Gemeente</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="Weelde">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Land</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="België">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Geboortedatum</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="date" value="1992-01-11">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<p><strong>Telefoon</strong></p>
									</div>
									<div class="col-md-10 col-sm-10">
										<input type="text" value="0497 02 21 76">
									</div>
								</div>
							</form>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<a href="<?= BASE_URL ?>">
										<button style="float:right">Wijzig gegevens</button>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>E-mail Wijzigen</h2>
									<div class="line"></div>
									<div class="row">
										<div class="col-md-3 col-sm-3">
											<p><strong>E-mail</strong></p>
										</div>
										<div class="col-md-9 col-sm-9">
											<p>floorleemans@outlook.com</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p style="margin-bottom:0"><strong>Nieuw e-mailadres</strong></p>
										</div>
										<div class="col-md-12 col-sm-12">
											<input style="width:330px; margin-top:0" type="text" value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p style="margin-bottom:0; margin-top:10px"><strong>Herhaal e-mailadres</strong></p>
										</div>
										<div class="col-md-12 col-sm-12">
											<input style="width:330px; margin-top:0" type="text" value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<a href="<?= BASE_URL ?>">
												<button style="float:right; margin-right:15px">Wijzig e-mail</button>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2 style="margin-top:20px">Wachtwoord wijzigen</h2>
									<div class="line"></div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p style="margin-bottom:0"><strong>Oud wachtwoord</strong></p>
										</div>
										<div class="col-md-12 col-sm-12">
											<input style="width:330px; margin-top:0" type="text" value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p style="margin-bottom:0; margin-top:10px"><strong>Nieuw wachtwoord</strong></p>
										</div>
										<div class="col-md-12 col-sm-12">
											<input style="width:330px; margin-top:0" type="text" value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<p style="margin-bottom:0; margin-top:10px"><strong>Herhaal nieuw wachtwoord</strong></p>
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

				<?php else: ?>

					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h2>Mijn persoonlijke gegevens</h2>
							<div class="line lang8"></div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Naam</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<p>Floor Leemans</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Adres</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<p>Korte Wijkstraat 3<br/>
									2381 Weelde<br/>
									België</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Geboortedatum</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<p>11 januari 1992</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>Telefoon</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<p>0497 02 21 76</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<p><strong>E-mail</strong></p>
								</div>
								<div class="col-md-10 col-sm-10">
									<p>floorleemans@outlook.com</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<a style="float:right" href="<?= BASE_URL ?>?status=update">
										<button>Gegevens Wijzigen</button>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Mijn bestellingen</h2>
									<div class="line"></div>
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<p><strong>Bestelnr</strong></p>
										</div>
										<div class="col-md-4 col-sm-4">
											<p class="no-margin-left"><strong>Datum</strong></p>
										</div>
										<div class="col-md-4 col-sm-4">
											<p class="no-margin-left"><strong>Totaal</strong></p>
										</div>
									</div>
									<a href="#" class="bestellingProfiel">
										<div class="row">
											<div class="col-md-4 col-sm-4">
												<p class="bestelnr">0000000001</p>
											</div>
											<div class="col-md-4 col-sm-4">
												<p class="no-margin-left">15 mei 2015</p>
											</div>
											<div class="col-md-4 col-sm-4">
												<p class="no-margin-left">110,65 EUR</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

				<?php endif ?>

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