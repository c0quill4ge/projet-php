<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> BIENVENUE!!!!!!!!!!</title>
<body>
<?php
session_start();
if (isset($_SESSION['interet'])){
    if $_SESSION['interet'] !== 'jeux_videos'{
         echo '<a href=""> "WOW The LASt OF US EN RéduCTION"</a>';
         echo '<a href=""> .$_SESSION["prenom"].", LA PS6 déJà en VENTE, CLIQUE ICI"</a>';
    }
} else {
    echo "je n'ai rien sur toi, mais je vais t'enregistrer";
    $_SESSION["a"]= 1;
}
?>