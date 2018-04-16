<link rel="stylesheet" href="../elements/css/profile.css">
<?php require_once 'inc/view/sidebar.php'; ?>
<div class="main-box">
  <div class="profile">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-4">
          <form class="" action="index.html" method="post">
            <h1>Edit your User Info</h1>
            <div class="form-group special">
              <center>
                <img src="../elements/img/ui-avatar1.jpg" alt="" class="mw-100">
              </center>
              <label for="file-upload" class="custom-file-upload">
                <i class="material-icons">camera_alt</i>
              </label>
              <input type="file" name="file-upload" value="" id="file-upload">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Old Password" name="username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="New Password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
