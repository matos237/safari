
<form name="formular" onsubmit="validateTextArea()" action="./thankyou.html">
            <div class="form-container">
                <ul class="flex-outer">
                  <li>
                    <label for="first-name">Meno:</label>
                    <input type="text" id="first-name" placeholder="Sem zadajte svoje meno" required>
                  </li>
                  <li>
                    <label for="last-name">Priezvisko:</label>
                    <input type="text" id="last-name" placeholder="Sem zadajte svoje priezvisko" required>
                  </li>
                  <li>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" placeholder="Sem zadajte svoju mailovú adresu" required>
                  </li>
                  <li>
                    <label for="phone">Telefón:</label>
                    <input type="tel" id="phone" name="telefon" placeholder="Sem zadajte svoje tel. č.">
                  </li>
                  <li>
                    <label for="message">Váš odkaz:</label>
                    <textarea rows="6" id="message" name="textarea" placeholder="Sem napíšte svoju správu"></textarea>
                  </li>
                  <li>
                    <input type="checkbox" id="suhlas" required>
                    <label for="suhlas">Súhlasíte so spracovaním osobných údajov?</label>
                  </li>
                  <li>
                    <button type="submit">Odoslať</button>
                  </li>
                </ul>
</form>