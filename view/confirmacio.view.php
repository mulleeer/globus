<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rugbi GEiEG</title>
    <link rel="stylesheet" href="css/confirmacio.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header>
        <h1>Go for Rugby</h1>
    </header>
    <main>
        <div class="content">
        <form action="http://localhost/globus/premis" method="POST">
            <label for="name">Nom</label>
            <select id="name" name="name" size="10">
            <?php foreach($resultat as $nom): ?>
                <option value="<?php echo($nom['CodiP']); ?>" ><?php echo($nom['Nom']); ?>,  <?php echo($nom['Punts']); ?>p (<?php echo($nom['SEAX']); ?>) -  <?php echo($nom['Correu']); ?></option>
            <?php endforeach; ?>
            </select>
            
            <label for="access">Acció</label>
            <select id="access" name="access" size="10">
                <option value="8">1er entrenament</option>
                <option value="16">Fitxa</option>
                <option value="10">Beguda - 10p</option>
                <option value="10">Born Fruits - 10p</option>
                <option value="35">Ocine - 35p</option>
                <option value="55">Decathlon - 55p</option>
                <option value="55">Krokers - 55p</option>
                <option value="65">Saltin 1 hora - 65p</option>
                <option value="150">Partit USAP top 14 - 150p</option>
            </select>
            <button type="submit" class="confirm-button">CONFIRMAR</button>
        </form>
        </div>
    </main>
</body>
</html>
