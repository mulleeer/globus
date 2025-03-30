<?php
session_start();
require 'back/connection.php';
$_SESSION['id'] = null;

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $_SESSION['id'] = $id;
}

require 'view/formulari.view.php';
