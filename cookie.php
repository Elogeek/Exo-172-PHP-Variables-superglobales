<?php
if (isset($_GET['login'], $_GET['password'])) {
    $login = strip_tags(trim($_GET['login']));
    $password = strip_tags(trim($_GET['password']));
    setcookie('login', $login, time() + 3600, '/', 'localhost');
    setcookie('password', $password, time() + 3600, '/', 'localhost');
}
header('location: index.php');