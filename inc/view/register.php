<?php
  if (isset($_POST['create'])) {
    $name_of_user = $_POST['nombre'];
    $username = $_POST['user'];
    $password =$_POST['pass'];
    $fp =fopen('usuarios.csv','a');
    $text = $name_of_user.','.$username.','.$password.PHP_EOL;
    fwrite($fp, $text);
    $fp++;
    fclose($fp);

    if (!$fp) {
      echo "Impossible to create data file for register";
    }
  }elseif(isset($_POST['return'])){
    header('Location:login');
  }
?>

<div class="sub_body">
  <form class="" action="register" method="post">
    <div class="login_container">
      <h2 class="login_title"> FORM-MAKER </h2>
      <h3>Registro</h3><br>

      <div class="bx--form-item">
        <label for="nombre" class="bx--label">Name</label>
        <input id="nombre" name="nombre" type="text" class="bx--text-input" placeholder="" required/>
        <div class="bx--form-requirement">
          Compleate the field
        </div>
      </div>

      <div class="bx--form-item">
        <label for="user" class="bx--label">Username</label>
        <input id="user" name="user" type="text" class="bx--text-input" placeholder="" required/>
        <div class="bx--form-requirement">
          Compleate the field
        </div>
      </div>

      <div class="bx--form-item">
        <label for="pass" class="bx--label">Password</label>
        <input id="pass" name="pass" type="password" class="bx--text-input" placeholder="" required/>
        <div class="bx--form-requirement">
          Compleate the field
        </div>
      </div>

      <div class="bx--form-item">
          <button class="bx--btn bx--btn--primary" type="submit" name="create">Create new user</button>
          <button class="bx--btn bx--btn--primary" type="submit" name="return">Sing In</button>

      </div>
    </div>
  </form>
</div>
<?php ?>
