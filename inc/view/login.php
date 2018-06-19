<?php

  if (isset($_POST['submit'])) {
      if ($_SESSION['loggedin']) {
          header('Location: forge');
      }
    //echo "isset working action -> submit";
    $fp = fopen('usuarios.csv','r'); //Abrir archivo base de datos de usuarios
      //Obtencion de datos para login
    $user =$_POST['username'];
    $pass =$_POST['pass'];
      //Construccion de array para lectura de datos
    $file = 'usuarios.csv';
    $csv = array_map('str_getcsv', file($file));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv);

    $acuse_user = $csv[0]['username'];
    $acuse_pass = $csv[0]['password'];

    //Validacion de datos de usaurios
    if (($user == $acuse_user) && ($pass == $acuse_pass)) {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $user;
      header('Location:forge');
    }else {
      header('Location:login');

    }
    fclose($fp);

  }
  elseif (isset($_POST['register'])) {
    header('Location:register');
  }
  else {
?>
<div class="sub_body">
  <form class="" action="login" method="post">
    <div class="login_container">
      <h2 class="login_title">FORM-MAKER</h2>
      <br>
      <div class="bx--form-item">
        <label for="user" class="bx--label" >Username</label>
        <input id="user" name="username" type="text" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          Wrong username
        </div>
      </div>

      <div class="bx--form-item">
        <label for="pass" class="bx--label" >Password</label>
        <input id="pass" name="pass" type="password" class="bx--text-input" placeholder="" />
        <div class="bx--form-requirement">
          Wrong password
        </div>
      </div>

      <div class="bx--form-item">
        <button class="bx--btn bx--btn--primary" type="submit" name="register">Register</button>
        <button class="bx--btn bx--btn--primary" type="submit" name="submit">Login</button>
      </div>
    </div>
  </form>
</div>
<?php } //cierra el ultimo else
//echo "string";?>
