<?php
	session_start();
	unset($_SESSION['nom']);
	unset($_SESSION['prenom']);
	unset($_SESSION['appareil']);
	unset($_SESSION['couleur']);
	unset($_SESSION['jeux_videos']);
	unset($_SESSION['lecture']);
	unset($_SESSION['vehicules']);
?>

<! DOCTYPE html>
<html lang = "fr" >
	<head>
		<meta charset = "utf-8">
		<title>Quelques informations avant de commencer...</title>
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
		<form method = "post" action = "site_mar.php">
			<label for = "nom"> Votre nom :<input type = "text" name = "nom"></br>
			<label for = "prenom"> Votre prénom :<input type = "text" name = "prenom"></br>
			<label for = "couleur"> Votre couleur préférée :<input type = "color" name = "nom"></br>
			<label for = "age"> Votre âge :<input type = "number" name = "age"></br>
			<u>Quel appareil utilisez-vous le plus?</u></br>
			<label for = "appareil">Smartphone<input type = "radio" name="appareil" value = "smartphone"></br>
			<label for = "ordinateur">Ordinateur<input type = "radio" name="appareil" value = "ordinateur"></br>
			<u>Quels sont vos centres d'intérêt?</u></br>
			<label for = "jeux_videos">Jeux-vidéos<input type = "checkbox" name="interet" value = "jeux-videos"></br>
			<label for = "lecture">Lecture<input type = "checkbox" name="interet" value = "lecture"></br>
			<label for = "vehicules">Vehicules<input type = "checkbox" name="interet" value = "vehicules"></br>
			<input type = "submit" value = "Envoyer"/></br>
		</form>
	</body>
</html>