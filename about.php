<?php
    session_start();
    include("partials/header.php");
  ?>

    <main>
      <div class="row">
        <div class="col-50">
          <h2>Často kladené otázky</h2>
            <?php
              include("partials/qna.php");
            ?>
        </div>
        <div class="col-50">
          <section>
          <h2>Niečo o našej histórii</h2>
          <h3>Opis</h3>
          <p>Boli sme založení vizionárom Matejom Svrčekom niekedy v novembri roku 2022. Celým účelom našej firmy bolo vytvorenie finálneho projektu z predmetu, ktorého meno vždy zabudnem.
            Jednoducho niečo s webmi. Matej bol veľký vizionár a preto si predstavoval vo svojej rodnej krajine niečo jedinečné, pravé Africké safari, takmer v srdci Slovenska.
            Kolta bolo ideálne miesto pre založenie tohto parku z dôvodu dostatku jedinečných jedincov v okolí, ktorí by zabavili nejedného turistu a samozrejme mnoho nádherných,
            dychberúcich výhľadov, pohľadov a samozrejme, zvierat.
          </p>
          </section>
          <br>
          <section>
            <h2>Naše zvieratá</h2>
            <h4>Naša reálna zebra Feri</h4>
            <img src="./img/realna_zebra.jpg">

            <h4>Náš leopard Ďuri</h4>
            <img class="image_b" src="./img/realny_leopard.jpg">
          </section>
        </div>
      </div>
    </main>
    <?php
    include("partials/footer.php");
    ?>