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
    <link rel="stylesheet" href="/src/css/main.css">
  </head>
  <body>
<?php
    }
    public function __destruct(){
?>
  </body>
</html>
<?php
		}
	}
?>
