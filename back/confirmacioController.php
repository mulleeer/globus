<?php
session_start();

require 'back/connection.php';

$usuari = $_SESSION['usuari'];

if($usuari['email'] == "admin@geieg.cat" && $usuari['nom'] == "admin"){

$usuari = $_SESSION['usuari'];

$stmt = $conn->prepare("SELECT Nom, Correu, SEAX, Punts, CodiP FROM usuaris");
$stmt->execute();

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

require 'view/confirmacio.view.php';
}