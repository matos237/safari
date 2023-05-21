<?php
    session_start();
    include("partials/header.php");
?>
  <main>
  
    <div class="row">
      <div class="col-40" id="zmizni"></div>
        <div class="col-form">
          <form action="inc/login/login.php" method="post">
          <div class="form-container">
            <ul class="flex-outer">
              <li>
                <h1>Prihlásenie</h1>
              </li>
              <li>
                <label for="email">E-mail:</label>  
                <input type="email" name="email" placeholder="Vložte váš email">
              </li>
              <li>
                <label for="password">Heslo:</label>
                <input type="password" name="password" placeholder="Vložte vaše heslo">
              </li>
              <li>
                <label for="submit"> </label>
                <input type="submit" value="Prihlásiť sa" name="log_user">
              </li>
              <li>
                <br>
                <p>Nemáte účet? <a href="register.php">Registrujte sa</a></p>
              </li>
            </ul>
          </form>
        </div>
      </div>
      <div class="col-40" id="zmizni"></div>
    </div>
  </main>
  <?php
    include("partials/footer.php");
  ?>