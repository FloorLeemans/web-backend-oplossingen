<!DOCTYPE html>
<html lang="nl" class="gradient">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Home - Movie shot</title>
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

		<header class="container">
			<div class="row top">
				<div class="col-md-6 col-sm-6">
					<a href="index.php"><img class="logo" src="img/logo3.png" alt=""></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<nav class="login">
						<p><a href="#">Inloggen</a> | <a href="#">Registreren</a> | <a href="#"><img src="img/winkelkar.png" alt=""></a></p>
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="#">Producten</a></li>
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

		<div class="container">
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide col-md-12 col-sm-12 col-xs-12" data-ride="carousel">
					<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

					<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
		 						<a href="#"><img src="img/banner1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="#"><img src="img/banner1.jpg" alt=""></a>
							</div>
						</div>

					<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Vorige</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Volgende</span>
						</a>
				</div>
			</div>
		</div>

		<div class="container infobox">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="titel">
						<h1>Nieuw</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 filmbox">
					<h2>The Imitation Game</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/the imitation game.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs not">15,99 EUR</p>
								<p class="actieprijs">12,99 EUR</p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Orange is the New Black - Seizoen 2</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/orange is the new black s2.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs">29,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Guardians of the Galaxy</h2>
					<div class="row">
							<a href="detailpagina-guardians.php">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/guardians of the galaxy.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort bluray"></div>
								<p class="prijs">24,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="detailpagina-guardians.php">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Image</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/image.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs">12,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>The Hunger Games: Catching Fire</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/hunger games catching fire.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs not">12,99 EUR</p>
								<p class="actieprijs">11,99 EUR</p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>The Hobbit: The Battle of the Five Armies</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/the hobbit the battle of the five armies.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs">21,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>X-Men: Days of Future Past</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/x-men days of future past.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort bluray"></div>
								<p class="prijs">24,95 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Interstellar</h2>
					<div class="row">
							<a href="detailpagina-interstellar.php">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/interstellar.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs not">21,99 EUR</p>
								<p class="actieprijs">19,90 EUR</p>
								<a href="detailpagina-interstellar.php">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>The Fault in our Stars</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/the fault in our stars.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs">19,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Boyhood</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/boyhood.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs not">14,99 EUR</p>
								<p class="actieprijs">13,95 EUR</p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Tinkerbell en de Piraten</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/tinkerbell en de piraten.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort bluray"></div>
								<p class="prijs">18,99 EUR</p>
								<p class="actieprijs none"></p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
				<div class="col-md-3 filmbox">
					<h2>Game of Thrones - Seizoen 2</h2>
					<div class="row">
							<a href="#">
								<img class="col-md-8 col-sm-8 filmposter" src="img/dvd-covers/game of thrones s2.jpg" alt="">
							</a>
							<div class="col-md-4 col-sm-4">
								<div class="soort dvd"></div>
								<p class="prijs not">43,99 EUR</p>
								<p class="actieprijs">39,95 EUR</p>
								<a href="#">
									<p class="moreInfo">Meer info ></p>
								</a>
							</div>
					</div>
					<a href="#">
						<p class="buttonWinkelmand">In winkelmand leggen</p>
					</a>
				</div>
			</div>
		</div>

		<footer class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 footerBottom">
					
				</div>
				<div class="col-md-3 col-sm-3">
					<h3>Producten</h3>
					<p><a href="#">Speelfilms</a></p>
					<p><a href="#">TV-Series</a></p>
					<p><a href="#">DVD</a></p>
					<p><a href="#">Blu-ray</a></p>
					<p><a href="#">Specials</a></p>
				</div>
				<div class="col-md-3 col-sm-3">
					<h3>Over Movie Shot</h3>
					<p><a href="#">Over ons</a></p>
					<p><a href="#">Contact</a></p>
				</div>
				<div class="col-md-3 col-sm-3">
					<h3>Shoppen</h3>
					<p><a href="#">Winkelmandje</a></p>
					<p><a href="#">Algemene Voorwaarden</a></p>
					<p><a href="#">Ruilen / Retourneren</a></p>
					<p><a href="#">Betalen</a></p>
				</div>
				<div class="col-md-3 col-sm-3">
					<h3>Volg Movie Shot</h3>
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