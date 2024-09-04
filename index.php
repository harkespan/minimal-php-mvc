<?php
			require_once __DIR__ . '/vendor/autoload.php';
			require_once 'routes.php';
			
			$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
			$params = $_GET;
			unset($params['url']);
			if (array_key_exists($url, $routes)) 
			{
				$controllerAction = explode('@', $routes[$url]);
				$controller = $controllerAction[0];
				$action = $controllerAction[1];

				$dynamicClassName = 'Classes\\' . $controller;
				if (class_exists($dynamicClassName)) 
				{
					$instance = new $dynamicClassName();
					call_user_func_array([$instance, $action], $params);

				} 
				else 
				{
					echo "Class $dynamicClassName does not exist.";
				}
				
			} else {
				echo "404 - Page Not Found";
			}


