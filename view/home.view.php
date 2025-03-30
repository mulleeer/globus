<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rugbi GEiEG</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header>
        <h1>Go for Rugby</h1>
    </header>
    <main>
        <div class="content">
            <h2 id="nom"> <?php foreach($resultat as $nom){ echo($nom['Nom']); } ?> </h2>
            <h2>Tens <span class="points"><?php foreach($resultat as $punts){ echo($punts['Punts']); } ?></span> punts.</h2>
            <h3 class="win-more" id="nom">Guanya'n més!</h3>
            <h3 class="win-more">Ajuda a la gent a participar. <br>Convida'ls al Rugbi GEiEG.</h3>
            <a href="<?php echo $url_whatsapp; ?>" target="_blank">
              <button class="invite-button">CONVIDA</button>
            </a>
        </div>

<div class="accordion">
          <h3 class="accordion-header">Així funciona</h3>
          <div class="accordion-content">
          <div style="text-align: justify;">
              <p><strong>Convida algú</strong> 
              <ul>
                <li>Recomana el rugbi a altres persones a través d'aquesta pàgina.</li>
              </ul>
              <ul>
                <li>Per exemple, si en Joan convida a la Laura i ella s'apunta, en Joan guanya 16 punts. Aquests punts es poden bescanviar per premis com per exemple una entrada al Salting o un val per al Decathlon!</li>
              </ul>
              
              <p><strong>Les teves amistats també poden recomanar!</strong></p>
              <ul>
                <li>Ara es posa emocionant! Si la Laura convida a l'Arnau i ell s'apunta, la Laura guanya 16 punts i en Joan, que la va convidar, també rep 8 punts més!</li>
              </ul>

              <p><strong>Com més recomanacions, més punts!</strong></p>
              <ul>
                <li>Cada vegada que algú s'uneixi gràcies a tu o a la teva xarxa, aniràs acumulant punts. És un sistema en cadena: tothom guanya!</li>
              </ul>

              <p><strong>Quan les teves amistats guanyin punts gràcies a tu, ho veuran!</strong></p>
              <ul>
                <li>I tu també podràs veure d'on provenen els teus. Us estareu ajudant mútuament i, junts, sumareu premis!</li>
              </ul>
            </div>
          </div>
        
          <h3 class="accordion-header">Punts i premis</h3>
          <div class="accordion-content">

          <h3>Punts</h3>
          <table border="1" cellspacing="0" cellpadding="5">
            <tr>
              <td><strong>Repte</strong></td>
              <th style="text-align: center;">Punts</th>
            </tr>
            <tr>
              <td>Quan tu t'uneixes</td>
              <td style="text-align: center;">4</td>
            </tr>
            <tr>
              <td>La persona convidada fa la prova al GEIEG</td>
              <td style="text-align: center;">8</td>
            </tr>
            <tr>
              <td>La persona convidada fa la fitxa al GEIEG</td>
              <td style="text-align: center;">16</td>
            </tr>
          </table>
          <br>
          <h3>Premis</h3>
          <table border="1" cellspacing="0" cellpadding="5">
            <tr>
              <td><strong>Descripció</strong></td>
              <th>Punts</th>
            </tr>
            <tr>
              <td>Una beguda al bar del camp</td>
              <td style="text-align: center;">10</td>
            </tr>
            <tr>
              <td>Una bossa de Born Fruits al bar</td>
              <td style="text-align: center;">10</td>
            </tr>
            <tr>
              <td>Una entrada a l'Ocine</td>
              <td style="text-align: center;">35</td>
            </tr>
            <tr>
              <td>Un val de 10€ pel Decathlon</td>
              <td style="text-align: center;">55</td>
            </tr>
            <tr>
              <td>Un val de 10€ pel Krokers</td>
              <td style="text-align: center;">55</td>
            </tr>
            <tr>
              <td>Una entrada per 1 hora al Salting</td>
              <td style="text-align: center;">65</td>
            </tr>
            <tr>
              <td>Una entrada al USAP Top 14</td>
              <td style="text-align: center;">150</td>
            </tr>
          </table>

          </div>
          
          <h3 class="accordion-header">Passos senzills per començar</h3>
          <div class="accordion-content">
          <ol>
            <li>Uneix-te a Go for Rugby.</li>
            <br>
            <li>Tria un dia per fer una prova (si vols).</li>
            <br>
            <li>Convida les teves amistats.</li>
            <br>
            <li>Canvia els punts per premis.</li>
          </ol>

          </div>

          <h3 class="accordion-header">Qui és el responsable?</h3>
          <div class="accordion-content">
            <p>Go for Rugby és una campanya de l'Associació de Rugbi Gironí (ARG). L'ARG és una entitat sense ànim de lucre que ajuda el Rugbi GEiEG a promoure el rugbi a Girona.</p>
          </div>
      </div>

      <script>
    document.addEventListener("DOMContentLoaded", function() {
      var headers = document.querySelectorAll(".accordion-header");
      
      headers.forEach(function(header) {
        header.addEventListener("click", function() {
          var content = this.nextElementSibling;
          
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.classList.remove('open');
          } else {
            document.querySelectorAll(".accordion-content").forEach(function(el) {
              el.style.maxHeight = null;
              el.classList.remove('open');
            });

            content.style.maxHeight = content.scrollHeight + "px";
            content.classList.add('open');
          }
        });
      });
    });
  </script>
    </main>
</body>
</html>
