<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <form action="cookie.php" method="GET">
            <div>
                <label for="login"> New login:
                    <input type="text" name="login" id="login" maxlength="20" required>
                </label>
            </div>
            <div>
                <label for="password"> New password:
                    <input type="password" name="password" id="password" maxlength="15" required>
                </label>
            </div>
            <div>
                <label>
                     <input type="submit">
                </label>
            </div>
        </form>
    </div>
</body>
</html>