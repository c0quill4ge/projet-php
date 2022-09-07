<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Résumé</title>
</head>
<body>

Pour résumer voici tes réponses:</br>
</br>
<?php
echo "La solution pour 1+1=x est: ".$_POST['un_et_un']."</br>";

echo "La racine carrée de 4 est: ".$_POST['rac_car']."</br>";

echo "Le nom du fameux binôme est le binôme de ".$_POST['bin']."</br>";

echo "Le triangle très utile en mathématiques est le triangle de ".$_POST['tri']."</br>";
?>

<a href="correction.php">CLIQUE pour la correction</a>
