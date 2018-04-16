<link rel="stylesheet" href="../elements/css/panel.css">
<?php require_once 'inc/view/sidebar.php'; ?>
<div class="main-box">
  <div class="container">
    <!--<div class="row">
      <div class="col special">
        <center><img src="../elements/img/logo-white.png" alt="" height="30"></center>
      </div>
    </div>-->
    <div class="row">

      <div class="col-sm-4 mx-auto">
        <br>
        <br><br>
        <form>
          <h1>Create User</h1>
          <div class="form-group">
            <input type="email" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group select">
            <select class="" name="">
              <option value="" disabled selected>Role</option>
              <option>Admin</option>
              <option>User</option>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
