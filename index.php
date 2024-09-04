<?php
			require_once __DIR__ . '/vendor/autoload.php';
			require_once 'routes.php';

			$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
			if (array_key_exists($url, $routes)) {
				$controllerAction = explode('@', $routes[$url]);
				$controller = $controllerAction[0];
				$action = $controllerAction[1];

				require_once "app/Classes/$controller.php";
				$controller = new $controller;
				$controller->$action();
			} else {
				echo "404 - Page Not Found";
			}


