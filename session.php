<?php session_start() 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 2 Partie 8</title>
</head>
<body>
    <h1>Exercice 2 Partie 8</h1>
    <h2>Welcome</h2>
    <p>Hello à toi <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname']  ?></p>
    <p>Ton as <?= $_SESSION['age'] . ' ' . 'ans si je ne m\'abuse' ?></p>
</body>
</html>