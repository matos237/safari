  
  <?php
    include('partials/header.php');
  ?>
  <main>
  
    <div class="row">
      <div class="col-40" id="zmizni"></div>
        <div class="col-form">
          <form action="inc/register/insert.php" method="post">
          <div class="form-container">
            <ul class="flex-outer">
              <li>
                <h1>Registrácia</h1>
              </li>
              <li>
                <label for="user_name">Meno:</label> 
                <input type="text" name="user_name" placeholder="Vložte vaše použ. meno">
              </li>
              <li>
                <label for="mail">E-mail:</label> 
                <input type="mail" name="user_email" placeholder="Vložte váš mail">
              </li>
              <li>
                <label for="mail">Heslo:</label> 
                <input type="password" name="user_password" placeholder="Vložte vaše heslo">
              </li>
              <li>
                <input type="submit" value="Zaregistrovať sa" name="add_user">
              </li>
              <li>
                <br>
                <p>Máte účet? <a href="login.php">Prihláste sa</a></p>
              </li>
            </ul>
          </form>
        </div>
      </div>
    <div class="col-40" id="zmizni"></div>
    </div>
  </main>
  <?php
    include('partials/footer.php');
  ?>