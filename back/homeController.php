<?php
session_start();

require 'back/connection.php';

$usuari = $_SESSION['usuari'];

$stmt = $conn->prepare("SELECT Nom, Punts FROM usuaris WHERE Correu = ? and Nom = ?");
$stmt->execute([$usuari['email'], $usuari['nom']]);

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt1 = $conn->prepare("SELECT CodiP FROM usuaris WHERE Correu = ? and Nom = ?");
$stmt1->execute([$usuari['email'], $usuari['nom']]);

$resultats = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$ids = reset($resultats);
$id = reset($ids);

$url_base = "http://localhost/globus/geieg?id=$id";
$mensaje = "Ei!
Acabo de descobrir *Go for Rugby*, una web genial on pots conèixer el rugbi a Girona i guanyar premis recomanant-la a altres persones. És súper fàcil i crec que t'agradaria! Si vols donar-hi un cop d'ull, uneix-te aquí: $url_base. *No t’ho perdis!*";
$mensaje_codificado = urlencode($mensaje);

$url_whatsapp = "https://api.whatsapp.com/send?text=" . $mensaje_codificado;

require 'view/home.view.php';
