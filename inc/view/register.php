<?php
  if (isset($_POST['create'])) {


  }
  elseif (isset($_POST['register'])) {

  }
  else {
?>
<div class="sub_body">
  <form class="" action="regist_result" method="post">
    <div class="login_container">
      <h2 class="login_title"> FORM-MAKER </h2>
      <h3>Registro</h3><br>

      <div class="bx--form-item">
        <label for="nombre" class="bx--label">Nombre</label>
        <input id="nombre" type="text" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          Llene el campo
        </div>
      </div>

      <div class="bx--form-item">
        <label for="user" class="bx--label">Nombre de Usuario</label>
        <input id="user" type="text" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          Llene el campo
        </div>
      </div>

      <div class="bx--form-item">
        <label for="pass" class="bx--label">Contraseña</label>
        <input id="pass" type="password" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          Llene el campo
        </div>
      </div>

      <div class="bx--form-item">
          <button class="bx--btn bx--btn--primary" type="submit" name="create">Crear nuevo usuario</button>

      </div>
    </div>
  </form>
</div>
<?php } ?>
