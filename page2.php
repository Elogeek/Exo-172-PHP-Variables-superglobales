<?php
if (isset($_GET['nom'], $_GET['prenom'])) {
    $nom = strip_tags(trim($_GET['nom']));
    $prenom = strip_tags(trim($_GET['prenom']));
    echo "Bonjour $nom $prenom";
}