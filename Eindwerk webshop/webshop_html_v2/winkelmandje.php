<?php

	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Producten - Movie shot</title>
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
						<p>Welkom Floor<a href="profiel.php">Profiel</a><a href="index.php">Uitloggen</a><a href="winkelmandje.php"><img src="img/winkelkar.png" alt="winkelmandje"></a></p>
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
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="winkelmandNav">
						<ul>
							<li <?= (!isset($_GET['status'])) ? 'class="active"' : '';?>>Winkelmandje</li>
							<!--<li>Inloggen</li>-->
							<li <?= (isset($_GET['status']) && $_GET['status'] == "betalen") ? 'class="active"' : '';?>>Betalen</li>
							<li <?= (isset($_GET['status']) && $_GET['status'] == "controle") ? 'class="active"' : '';?>>Controle</li>
							<li <?= (isset($_GET['status']) && $_GET['status'] == "geplaatst") ? 'class="active"' : '';?>>Afronding</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="winkelmandje">

				<?php if (isset($_GET['status']) && $_GET['status'] == "betalen"): ?>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<h2>Betaalmethode</h2>
							<div class="line lang12"></div>
							<p>Momenteel is het enkel mogelijk via overschrijving te betalen. Als wij de betaling hebben ontvangen, sturen we uw bestelling op.</p>
							<form>
								<input type="radio" name="betaalmethode" value="overschrijving" checked> Overschrijving<br/>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8"></div>
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>">
								<button>Bestelling Wijzigen</button>
							</a>
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>?status=controle">
								<button class="no-margin-left">Volgende</button>
							</a>
						</div>
					</div>

				<?php elseif (isset($_GET['status']) && $_GET['status'] == "controle"): ?>

					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h2>Bestellingsoverzicht</h2>
							<div class="line lang8"></div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p>1</p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p>Interstellar - DVD</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen">19,90 EUR</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p>2</p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p>Orange is the New Black - seizoen 2 - DVD</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen">58,88 EUR</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p>1</p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p>X-men: Days of Future Past - Blu-ray</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen">24,95 EUR</p>
								</div>
							</div>
							<div class="line lang8 dun"></div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p></p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p>VERZENDKOSTEN</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen">4,95 EUR</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p></p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p>KORTING</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen">- 0,00 EUR</p>
								</div>
							</div>
							<div class="line lang8 dun"></div>
							<div class="row">
								<div class="col-md-1 col-sm-1">
									<p></p>
								</div>
								<div class="col-md-7 col-sm-7">
									<p><strong>TOTAAL</strong></p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="prijzen"><strong>110,65 EUR</strong></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Betalingsmethode</h2>
									<div class="line fatline"></div>
									<p>Overschrijving</p>
									<p class="no-margin"><em>Rekeninghouder:</em></p>
									<p>Movie Shot</p>
									<p class="no-margin"><em>Rekeningnummer:</em></p>
									<p>BE12 3456 7890 12</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2>Leveringadres</h2>
									<div class="line fatline"></div>
									<p>Floor Leemans</p>
									<p class="no-margin">Korte Wijkstraat 3</p>
									<p class="no-margin">2381 Weelde</p>
									<p>België</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8"></div>
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>">
								<button>Bestelling Wijzigen</button>
							</a>
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>?status=geplaatst">
								<button class="no-margin-left">Bestelling Plaatsen</button>
							</a>
						</div>
					</div>

				<?php elseif (isset($_GET['status']) && $_GET['status'] == "geplaatst"): ?>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<h2>Bestelling geplaatst</h2>
							<div class="line lang12"></div>
							<p>Uw bestelling is geplaatst.</p>
							<p>Bestelnummer: <strong>0000000001</strong><br/>
							4 artikelen<br/>
							Totaal: 110,65 EUR</p>
							<p>Gelieve het totaalbedrag over te maken op:<br/>
							Rekeninghouder: <strong>Movie Shot</strong><br/>
							Rekeningnummer: <strong>BE12 3456 7890 1234</strong><br/>
							BIC: <strong>KREDBEBB</strong><br/>
							Vrije mededeling: <strong>Bestelnummer 0000000001</strong><br/>
							</p>
							<p>Als wij de betaling hebben ontvangen, sturen we uw bestelling op.</p>
							<p>U krijgt een e-mailbevestiging op <em>floorleemans@outlook.com</em></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>">
								<button>Factuur opslaan</button>
							</a>
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="profiel.php">
								<button class="no-margin-left">Terug naar profiel</button>
							</a>
						</div>
					</div>

				<?php else: ?>

					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h2>Producten</h2>
						</div>
						<div class="col-md-2 col-sm-2">
							<h2>Aantal</h2>
						</div>
						<div class="col-md-2 col-sm-2">
							<h2>Prijs</h2>
						</div>
					</div>
					<div class="line lang12">
					</div>
					<form>
						<div class="row">
							<div class="col-md-8 col-sm-8">
								<p><a href="detailpagina-interstellar.php">Insterstellar - DVD</a></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<input type="text" class="aantal" value="1">
							</div>
							<div class="col-md-2 col-sm-2">
								<p class="prijs">19,90 EUR</p>
								<div class="verwijder"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-sm-8">
								<p><a href="#">Orange is the New Black - seizoen 2 - DVD</a></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<input type="text" class="aantal" value="2">
							</div>
							<div class="col-md-2 col-sm-2">
								<p class="prijs">58,88 EUR</p>
								<div class="verwijder"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-sm-8">
								<p><a href="#">X-men: Days of Future Past - Blu-ray</a></p>
							</div>
							<div class="col-md-2 col-sm-2">
								<input type="text" class="aantal" value="1">
							</div>
							<div class="col-md-2 col-sm-2">
								<p class="prijs">24,95 EUR</p>
								<div class="verwijder"></div>
							</div>
						</div>
					</form>
					<div class="line lang12 dun">
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<p>TUSSENTOTAAL</p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>4</p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>103,73 EUR</p>
						</div>
					</div>
					<div class="line lang12 dun">
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
						</div>
						<div class="col-md-2 col-sm-2">
							<p>VERZENDKOSTEN</p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>4,95 EUR</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<p></p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>ADMINISTRATIEKOSTEN</p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>1,95 EUR</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<p></p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>KORTING</p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p>0,00 EUR</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="line dun"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<p></p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p><strong>TOTAAL</strong></p>
						</div>
						<div class="col-md-2 col-sm-2">
							<p><strong>110,65 EUR</strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<p></p>
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="producten.php">
								<button>Verder Winkelen</button>
							</a>
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="<?= BASE_URL ?>?status=betalen">
								<button class="no-margin-left">Volgende</button>
							</a>
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