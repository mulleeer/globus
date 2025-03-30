<?php

require 'back/connection.php';

session_start();

$usuari = $_SESSION['usuari'];

$stmt = $conn->prepare("SELECT Nom, Punts FROM usuaris WHERE Correu = ? and Nom = ?");
$stmt->execute([$usuari['email'], $usuari['nom']]);

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

//$ids = $_SESSION['id'];
//$id = reset($ids);

require 'view/compartir.view.php';
