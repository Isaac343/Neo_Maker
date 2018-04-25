<?php
	$template = new Template();
	class Template{
		public function __construct(){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORMMAKER</title>

    <link rel="stylesheet" href="<?php echo URL; ?>/src/css/carbon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/src/css/main.css">
  </head>
  <body>
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
