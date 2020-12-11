<?php 
session_start();
$_SESSION['lastname'] = 'Boe';
$_SESSION['firstname'] = 'Johannes';
$_SESSION['age'] = 34;
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 2 Partie 8 </title>
</head>
<body>
    <h1>Exercice 2  Partie 8</h1>
    <p><a href="session.php">Va voir ce que l'on sait de toi</a></p>
</body>
</html>