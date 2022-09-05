<?php
session_start();
?>

<!DOCTYPE html>
<body>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $_SESSION['nom']= $_POST['nom']
    $_SESSION['prenom']= $_POST['prenom']
    $_SESSION['age']= $_POST['age']
    $_SESSION['ville']= $_POST['ville']
    $_SESSION['appareil']= $_POST['appareil']
    $_SESSION['interet']= $_POST['interet']
    $_SESSION['couleur']= $_POST['couleur']
?>
</body>