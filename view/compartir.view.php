<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rugbi GEiEG</title>
    <link rel="stylesheet" href="../css/compartir.css">
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header>
        <h1>Go for Rugby</h1>
    </header>
    <main>
            <div class="punts">
                <h2 id="nom"><?php foreach($resultat as $nom){ echo($nom['Nom']); } ?></h2>
                <h2 id="baixa">Tens <span class="points"><?php foreach($resultat as $punts){ echo($punts['Punts']); } ?></span> punts.</h2>
                <h3 id="win-more">Guanya <span class="point">8</span> més <br>quan provis el Rugbi GEIEG</h3>
                <h3>Començaré la prova gratuïta:</h3>
            </div>

            <div class="content">
            <form action="http://localhost/globus/compartir" method="POST">
                <legend>Escola (Nascuts 2011 - 2019)</legend>
                <label>
                    <input id="dimarts" type="radio" name="escola" value="escola-dimarts-11h">
                    dimarts a les 18h
                </label>
                <label>
                    <input id="dijous" type="radio" name="escola" value="escola-dijous-18h">
                    dijous a les 18h
                </label>
                <label>
                    <input id="dissabte" type="radio" name="escola" value="escola-dissabte-11h">
                    dissabte a les 11h
                </label>

                <legend>Acadèmia (Nascuts 2007 - 2010)</legend>
                <label>
                    <input id="dimarts1830h" type="radio" name="academia" value="academia-dimarts-18:30h">
                    dimarts a les 18:30h
                </label>
                <label>
                    <input id="dijous1830h" type="radio" name="academia" value="academia-dijous-18:30h">
                    dijous a les 18:30h
                </label>

                <legend>Sènior (major d'edat)</legend>
                <label>
                    <input id="dilluns2030h" type="radio" name="senior" value="senior-dilluns-20:30h">
                    dilluns a les 20:30h
                </label>
                <label>
                    <input id="dimarts2030h" type="radio" name="senior" value="senior-dimarts-20:30h">
                    dimarts a les 20:30h
                </label>
                <label>
                    <input id="dijous2030h" type="radio" name="senior" value="senior-dijous-20:30h">
                    dijous a les 20:30h
                </label>
                <legend>Sense prova</legend>
                <label>
                    <input id="prova" type="radio" name="prova" value="sense-prova">
                    De moment no faig cap prova
                </label>

                <div class="guanya">
                    <h2>Al camp de rugbi a GEiEG Palau</h2>
                </div>
                <div id="button">
                    <button type="submit" class="invite-button">CONFIRMA</button>
            </form>
            </div>
        </main>
</body>
</html>
