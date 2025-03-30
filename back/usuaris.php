<?php
session_start();

require 'back/connection.php';


$nom_i_cognom = $_POST['name'];
$email = $_POST['email'];
$contrasenya = $_POST['password'];
$punts = 4;
$seax = "x";

$_SESSION['usuari'] = [
    'email' => $email,
    'nom' => $nom_i_cognom,
];

$stmt = $conn->prepare("SELECT Correu, Nom, Contrasenya FROM usuaris WHERE Correu = ? and Nom = ?");
$stmt->execute([$email, $nom_i_cognom]);

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($resultat)) {

    $stmt = $conn->prepare("INSERT INTO usuaris (Nom, Correu, Contrasenya, Punts, SEAX) VALUES (?,?,?,?,?)");
    $stmt->execute([$nom_i_cognom, $email, $contrasenya, $punts, $seax]);
    //$stmt = $conn->prepare("DELETE FROM usuaris");
    //$stmt->execute();

    //$stmt = $conn->prepare("ALTER TABLE usuaris AUTO_INCREMENT = 1");
    //$stmt->execute();

    if (isset($_SESSION['id'])) {
        header("Location: http://localhost/globus/geieg/compartir");
        exit();
    } else {
        header("Location: http://localhost/globus/geieg/home");
        exit();
    }


} else {
    $stmt = $conn->prepare("SELECT Contrasenya FROM usuaris WHERE Correu = ? and Nom = ?");
    $stmt->execute([$email, $nom_i_cognom]);

    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $cont = reset($resultat);
    $contra = reset($cont);



    if($contra == $contrasenya){
        $usuari = $_SESSION['usuari'];

        if($usuari['email'] == "admin@geieg.cat" && $usuari['nom'] == "admin"){
            header("Location: http://localhost/globus/admin");
            exit();
        }

        header("Location: http://localhost/globus/geieg/home");
        exit();
        
    }elseif($contra != $contrasenya){
        header("Location: http://localhost/globus/geieg");
        exit();
    }
}
?>

