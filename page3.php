<?php
foreach ($_COOKIE as $cookieName => $value) {
    if($cookieName === "login" || $cookieName === "password") {
        echo $cookieName . ": " . $value . "<br>";
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Modif cookie</title>
</head>
<body>

    <div class="container">
        <form action="page3.php" method="POST">
            <div>
                <label for="login">Peudo:
                    <input type="text" name="login" id="login">
                </label>
            </div>
            <div>
                <label for="password">Mot de passe:
                    <input type="password" name="password" id="password">
                    <input type="submit">
                </label>
            </div>
        </form>
    </div>

    <?php
        if (isset($_POST["login"], $_POST["password"])){
            setcookie("login", $_POST["login"]);
            setcookie("password", $_POST["password"]);
        }
    ?>

    <a href="index.php">Retour page index</a>
    <a href='page2.php'>aller a la page 2</a>
</body>
</html>