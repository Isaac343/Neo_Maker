<?php
	$template = new Template();
	class Template{
		public function __construct(){
			$request = new Request;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM-MAKER</title>
    <link rel="stylesheet" href="<?php echo URL; ?>/src/css/carbon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/src/css/main.css">
  </head>
  <body>
		<?php
			if (isset($_GET['url']) and $_GET['url'] != 'login') {
				sessionRequired();
				include 'include/navbar.php';
			}
		?>
<?php
    }
    public function __destruct(){
?>
		<script src="<?php echo URL; ?>/src/js/archive.js" charset="utf-8"></script>
  </body>
</html>
<?php
		}
	}
?>
