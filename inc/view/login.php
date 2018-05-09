<?php
  if (isset($_POST['submit'])) {
    echo "isset working action -> submit";

  }
  elseif (isset($_POST['register'])) {
    echo "isset working action -> register";
  }
  else {
?>
<div class="sub_body">
  <form class="" action="login" method="post">
    <div class="login_container">
      <h2 class="login_title">FORM-MAKER</h2>
      <div class="bx--form-item">
        <label for="user" class="bx--label">Usuario</label>
        <input id="user" type="text" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          NOmbre de usuario incorrecto
        </div>
      </div>

      <div class="bx--form-item">
        <label for="pass" class="bx--label">Contraseña</label>
        <input id="pass" type="password" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
        Contraseña incorrecta
        </div>
      </div>

      <div class="bx--form-item">
          <button class="bx--btn bx--btn--primary" type="submit" name="register">Registrarse</button>
        <button class="bx--btn bx--btn--primary" type="submit" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php } //cierra el ultimo else
//echo "string";?>
