<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>

<?php
$nom = "0007";
$prenom = "elodie";

echo "Votre User Agent est :" . $_SERVER['REMOTE_USER'] . "<br>";
echo "Votre adresse IP est :" . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Le nom du serveur est :" . $_SERVER['SERVER_NAME'] . "<br>";
echo "<a href='page2.php?nom=$nom&prenom=$prenom'> Aller a la page 2</a><br>";
echo "<a href='page3.php'> Aller a la page 3(cookie)</a><br>";
?>

<div class="container">
    <form action="cookie.php" method="GET">

        <div>
            <label for="login">Pseudo:
                <input type="text" name="login" id="login" maxlength="20">
            <label>
        </div>

        <div>
            <label for="password">Mot de passe:
                 <input type="password" name="password" id="password" maxlength="15">
            <label>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</div>

</body>
</html>