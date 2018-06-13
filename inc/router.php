<?php
	class Router{
		function run(){
            $request = new Request;
			//Llamamos la pagina a mostrar
			if ($request->getPage()){
				$route = ROOT.'inc/view'.DS.$request->getSection().DS.$request->getPage().'.php';
			}
			else {
				$route = ROOT.'inc/view'.DS.$request->getSection().'.php';
			}

			if(is_readable($route)){
				require_once $route;
			}
            else{
				echo 'No se encontro la vista'.$route;
			}
		}
	}
?>
