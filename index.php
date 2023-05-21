<?php
    session_start();
    include("partials/header.php");
  ?>
  <main>
  <div class="row">
    <div class="col-25">
      <h1 style="text-align:center">Základné informácie</h1>

      <div class="tabulka">
        <h3>Otváracia doba</h3>
        <table>
          <tr>
            <th>Deň</th>
            <th>Čas</th>
          </tr>
          <tr>
            <td>Pondelok</td>
            <td>07:30-19:30</td>
          </tr>
          <tr>
            <td>Utorok</td>
            <td>07:30-19:30</td>
          </tr>
          <tr>
            <td>Streda</td>
            <td>07:30-18:30</td>
          </tr>
          <tr>
            <td>Štvrtok</td>
            <td>07:30-19:30</td>
          </tr>
          <tr>
            <td>Piatok</td>
            <td>07:30-19:30</td>
          </tr>
          <tr>
            <td>Sobota</td>
            <td>09:30-16:30</td>
          </tr>
          <tr>
            <td>Nedeľa</td>
            <td>Zatvorené</td>
          </tr>
        </table>
        <p>Safari Park je zatvorený počas všetkých sviatkov.</p>
      </div>

      <div id="pravidla">
        <h3>Pravidlá parku</h3>
        <ol>
          <li>Nikdy nekŕmte zvieratá.</li>
          <li>Nikdy nenaháňajte zvieratá.</li>
          <li>Nevyrušujte zvieratá.</li>
          <li>Nezahadzujte odpadky. Zvieratá ich môžu zjesť!</li>
          <li>Divoké zvieratá sú nebezpečné. Neriskujte.</li>
          <li>Netrhať kvety a inú vegetáciu.</li>
          <li>Dodržiavať riadnu otváraciu dobu.</li>
        </ul>
      </div>
    </div>
    <div class="col-75">
      <section>
      <h2>Čo je naša ponuka?</h2>
      <p>V našej ponuke sa nachádza rozsiahle množstvo zážitkov, výletov a prehliadok v našom úžasnom safari parku.</p>
      <h3>Kde sa nachádzame?</h3>
      <p>Nachádzame sa niekde medzi Koltou v okrese Nové Zámky a obcou Bánov, v okrese Nové Zámky. 
        Na presnom mieste sme sa ešte nezhodli zhľadiska toho, že neexistujeme.</p>
      <div id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5337.228287522614!2d18.40914264822833!3d48.02116410133851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476afca330286dc5%3A0x3e4cfffe9a499427!2sPo%C4%BEnohospod%C3%A1rske%20Dru%C5%BEstvo%20Kolta!5e0!3m2!1ssk!2ssk!4v1669963642396!5m2!1ssk!2ssk"
         width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
      </div>
      <h3>Aký máme cenník?</h3>
      <p>Z dôvodu zvýšeného nebezpečenstva počas návštev sa Vám naše ceny môžu zdať privysoké no ale povedzme si na rovinu,
         kto by sa prechádzal medzi krokodílmi za minimálku?</p>
      <div class="tabulka">
        <h4>Cenník</h4>
        <table>
          <tr>
            <th>Osoba</th>
            <th>Cena</th>
          </tr>
          <tr>
            <td>Dospelí a mladí od 13 rokov</td>
            <td>200€</td>
          </tr>
          <tr>
            <td>Deti do 13 rokov</td>
            <td>100€</td>
          </tr>
          <tr>
            <td>Seniori</td>
            <td>150€, zdarma ak nakŕmite levy</td>
          </tr>
        </table>
      </div>
      <div class="rezervacia">
        <h3>Rezervácia vstupného!</h3>
        <button id="rezervuj" onclick="rezervuj()">REZERVUJ TU!</button>
      </div>
      <h3>Kde sa dozviem viac?</h3>
      <p>Viac sa o nás dozviete v sekcii <a href="./about.html">O nás</a> a ak chcete vidieť ochutnávku z toho, čo Vás u nás čaká navštívte sekciu <a href="./about.html">Galéria</a>. 
      Prajeme Vám veľa príjemne strávených chvíľ v našich priestoroch.</p>
      </section>
    </div>
  </div>
  </main>
  <?php
    include("partials/footer.php");
  ?>