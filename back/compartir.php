<?php
session_start();
require 'back/connection.php';

require 'back/PHPMailer-master/src/PHPMailer.php';
require 'back/PHPMailer-master/src/SMTP.php';
require 'back/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$escola = isset($_POST['escola']) ? $_POST['escola'] : null;
$academia = isset($_POST['academia']) ? $_POST['academia'] : null;
$senior = isset($_POST['senior']) ? $_POST['senior'] : null;
$prova = isset($_POST['prova']);



$selecciones = 0;
$horari = "";

if ($escola) {
    $selecciones++;
    $horari = $escola;
}

if ($academia) {
    $selecciones++;
    $horari = $academia;
}

if ($senior) {
    $selecciones++;
    $horari = $senior;
}

if ($prova) {
    header("Location: http://localhost/globus/geieg/home");
    exit();
}

if ($selecciones > 1 || $selecciones == 0) {
    echo "<h2>Només pots seleccionar un dia</h2>";
    echo "<a href='javascript:history.back()'>Tornar al formulari</a>";
} else {
    if ($escola != null) {
        $seax = "E";
        $stmt = $conn->prepare("UPDATE usuaris SET SEAX = ? WHERE correu = ? and nom = ?");
        $stmt->execute([$seax, $_SESSION['usuari']['email'], $_SESSION['usuari']['nom']]);
    } elseif ($academia != null) {
        $seax = "A";
        $stmt = $conn->prepare("UPDATE usuaris SET SEAX = ? WHERE correu = ? and nom = ?");
        $stmt->execute([$seax, $_SESSION['usuari']['email'], $_SESSION['usuari']['nom']]);
    } elseif ($senior != null) {
        $seax = "S";
        $stmt = $conn->prepare("UPDATE usuaris SET SEAX = ? WHERE correu = ? and nom = ?");
        $stmt->execute([$seax, $_SESSION['usuari']['email'], $_SESSION['usuari']['nom']]);
    }

    $stmt = $conn->prepare("UPDATE usuaris SET CodiO = ? WHERE correu = ? and nom = ?");
    $stmt->execute([$_SESSION['id'], $_SESSION['usuari']['email'], $_SESSION['usuari']['nom']]);
    
    $cemail = $_SESSION['usuari']['email'];
    $cnom = $_SESSION['usuari']['nom'];


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mullermarc555@gmail.com';
        $mail->Password = 'atrzzkjvjyyebbei';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('mullermarc555@gmail.com', 'ADMIN');
        $mail->addAddress('mullermarc555@gmail.com');

        $mail->isHTML(false);
        $mail->Subject = 'Un nou jugador!';
        $mail->Body = "$cnom amb el correu, $cemail assistira al entreno de prova, la informació es la següent: $horari.";

        $mail->send();
        echo 'El mensaje se ha enviado correctamente';
    } catch (Exception $e) {
        echo "El mensaje no se pudo enviar. Error de PHPMailer: {$mail->ErrorInfo}";
    }

    header("Location: http://localhost/globus/geieg/home");
    exit();
}
?>
