<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalista Formulario</title>
    <link rel="stylesheet" href="css/formulari.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header>
        <h1>Go for Rugby</h1>
    </header>
    <div class="eslogan">
        <div class="eslogan_container">
            <h2>Tu creixes amb el Rugbi.</h2>
            <h2>El Rugbi creix amb tu.</h2>
        </div>
    </div>
    <div class="eslogan">
            <div class="eslogan_container">
                <h2 id="acces">Uneix-te i guanya!</h2>
            </div>
    </div>
    <div class="container">
        <form action="http://localhost/globus/usuaris" method="POST">
            <div class="form-group">
                <label for="name">Nom i cognom (jugador/a)</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contrasenya (Ets nou? - Crea'n una!)</label>
                <input type="password" id="password" name="password" required>
            </div>
    </div>
            <div class="form-group">
                <div id="button">
                    <button type="submit">UNEIX-TE</button>
                </div>
            </div>
        </form>

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
</body>
</html>
