<?php
	unset($_SESSION['username']);
	unset($_SESSION['loggedin']);
	session_destroy();
  header('Location: login')
?>
