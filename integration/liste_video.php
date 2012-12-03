<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/style_temp.css">
	<?php require('header.php'); ?>
	<span class="separator">&nbsp;</span>
	<div id="laVideo">
		<a id="close" href="">[Fermer]</a>
	</div>
	<section id="videos">
		<header id="defi-semaine-head">
			<h1>Les vidéos</h1>
		</header>
		<div id="absolute2">
			<div id="recherche_video">
				<form method="post" name="form">
					<label>Rechercher une vidéo :</label>
					<select>
						<option value="0">Intitulé du défi</option>
						<option value="1">Défi 1</option>
						<option value="2">Défi 2</option>
						<option value="3">Défi 3</option>
						<option value="4">Défi 4</option>
					</select>
					<select>
						<option value="0">Auteur du défi</option>
						<option value="1">Défi 1</option>
						<option value="2">Défi 2</option>
						<option value="3">Défi 3</option>
						<option value="4">Défi 4</option>
					</select>
					<select>
						<option value="0">Localisation du défi</option>
						<option value="1">Défi 1</option>
						<option value="2">Défi 2</option>
						<option value="3">Défi 3</option>
						<option value="4">Défi 4</option>
					</select>
					<input id="go" type="submit" value="GO" onclick="valid(this);"/>
				</form>
			</div>
			<div id="trier_par">
				<p id="trier">Trier par :</p>
				<nav>
					<a href="#" id="date" class="classement active">Date</a>
					<p> | </p>
		        	<a href="#" id="pop" class="classement">Popularité</a>
		        </nav>
			</div>
			<div id="resultat_recherche">
			</div>
		</div>


	</section>
		<?php require('footer.php'); ?>
	</div>
	
</body>
</html>

