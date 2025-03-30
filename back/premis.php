<?php

require 'back/connection.php';

$codi = $_POST['name'];
$punts = $_POST['access'];



$stmt = $conn->prepare("SELECT Punts FROM usuaris WHERE CodiP = ?");
$stmt->execute([$codi]);


$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);


$punts = (int) $punts;

if($punts != 8 && $punts != 16){

    foreach($resultat as $punt){
        foreach($punt as $reg){
            if($punts < $reg){
            $nousPunts = $reg - $punts;

            $stmt = $conn->prepare("UPDATE usuaris SET Punts = ? WHERE CodiP = ?");
            $stmt->execute([$nousPunts ,$codi]);

            
            }

            //posar misatge de error
        }
    }
}elseif($punts == "8" || $punts == "16"){

    if($punts == "8"){
        $factor = 3;

        $stmt = $conn->prepare("SELECT Punts FROM usuaris WHERE CodiP = ?");
        $stmt->execute([$codi]);
        
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultat as $punt){
            foreach($punt as $reg){
                $nousPunts = $reg + 8;
            }
        }
        
        $stmt = $conn->prepare("UPDATE usuaris SET Punts = ? WHERE CodiP = ?");
        $stmt->execute([$nousPunts ,$codi]);

    }elseif($punts == "16"){
        $factor = 4;
    }

    $stmt = $conn->prepare("SELECT CodiO FROM usuaris WHERE CodiP = ?");
    $stmt->execute([$codi]);
    $cont = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $array = reset($cont);
    $codio = reset($array);
    var_dump($codio);

    $origen = false;
    
    if($cont != null){
        $origen = true;
    }

    while($origen == true){
        $puntsO = 2 ** $factor;


        $stmt = $conn->prepare("SELECT Punts FROM usuaris WHERE CodiP = ?");
        $stmt->execute([$codio]);
        
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultat as $punt){
            foreach($punt as $reg){
                $nousPunts = $reg + $puntsO;
            }
        }
        
        $stmt = $conn->prepare("UPDATE usuaris SET Punts = ? WHERE CodiP = ?");
        $stmt->execute([$nousPunts ,$codio]);

        $stmt = $conn->prepare("SELECT CodiO FROM usuaris WHERE CodiP = ?");
        $stmt->execute([$codio]);
        $ori = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if($ori == null){
            $origen = false;
        } else {
            $orig = reset($ori);
            $orige = reset($orig);
            $codio = $orige;
        }
        $factor = $factor - 1;
        $nousPunts = 0;
    }
}

header("Location: http://localhost/globus/admin");
exit;

?>

