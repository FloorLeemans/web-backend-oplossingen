<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Uploaden | Foto</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<p><a href="gallery.php">Terug naar de gallerij</a></p>
		
		<h1>Foto uploaden</h1>

		<?php if (isset($_SESSION['notification'])): ?>
			<p class="error"><?= $_SESSION['notification'] ?></p>
		<?php endif ?>

		<form method="POST" action="photo-upload.php">
			<label for="foto">Bestand uploaden</label>
			<input type="file" name="foto" id="foto">

			<label for="titel">Titel</label>
			<input type="text" name="titel" id="titel">

			<label for="beschrijving">Beschrijving</label>
			<input type="text" name="beschrijving" id="beschrijving">

			<input type="submit" name="submit" value="Verzenden">
		</form>
	</body>
</html>