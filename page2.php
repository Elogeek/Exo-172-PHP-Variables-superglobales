<?php
if (isset($_GET['nom'], $_GET['prenom'])) {
    $nom = strip_tags(trim($_GET['nom']));
    $prenom = strip_tags(trim($_GET['prenom']));
    echo "Bonjour $nom $prenom";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>page2</title>
</head>
<body>

    <a href="index.php">Retour page index</a>
    <a href='page3.php'>aller a la page 3</a>

</body>
</html>
