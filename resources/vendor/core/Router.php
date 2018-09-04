<?php
/* *ob'javljaem prostranstvo imjon */
namespace resources\vendor\core;

class Router {
	
	/*
		tablica maršrutov
		@var
	*/
	protected static $routes = [];
	
	/*
		tablica maršrut!
		@var array
	*/
	protected static $route = [];
	
	/*
		Dobavljaem maršrut v tablicu maršrutov!
		@var array
		@param string $regexp !Reguljarnoe vyarażenie!
		@param string $route maršrut ([cintroller, action, params])
	*/
	public static function add($regexp, $route = []) {
		self::$routes[$regexp] = $route;
	}
	/*
		vozvraščaet tablicu maršrutov
		@return array
	*/
	public static function getRoutes() {
		return self::$routes;
	}

	/*
		vozvraščaet tekuščij maršrut ([cintroller, action, params])
		
		@return array 
	*/
	public static function getRoute() {
		return self::$route;
	}
	/*
	iščet URL v tablice maršrutov 
	$param string $url vhodjaščij URL
	@return boolean
	*/
	private static function matchRoute($url) {
		foreach(self::$routes as $pattern => $route) {
			/* Ищет в заданном тексте subject  (vroroj argument) совпадения с шаблоном pattern (pervyj argument). В случае, если указан дополнительный параметр matches, он будет заполнен результатами поиска. Элемент $matches[0] будет содержать часть строки, соответствующую вхождению всего шаблона, $matches[1] - часть строки, соответствующую первой подмаске и так далее.  */
			if(preg_match("#$pattern#i", $url, $matches)) {
				// debug($matches);
				foreach($matches as $key => $value) {
					if(is_string($key)) {
						$route[$key] = $value;
					}
				}
				if(!isset($route['action'])) {
					$route['action'] = 'index'; 
				}
				$route['controller'] = self::upperCamelCase($route['controller']);
				self::$route = $route;
				//debug(self::$route);
				return true;
			}
		}
		return false;
	}
	public static function dispatch($url) {
		$url = self::removeQueryString($url);
		//var_dump($url);
		if(self::matchRoute($url)) {
			//debug($url);
			$controller = 'app\http\controllers\\' . self::$route['controller'] . "Controller";
			//debug(self::$route);
			if(class_exists($controller)) {
				// sozdajom "controller" dannogo class-a
				$cObj = new $controller(self::$route);
				$action = self::lowerCamelCase(self::$route['action']) . "Action";
				//debug($action);
				if(method_exists($cObj, $action)) {
					// Esli takoj "method" suščestvuev, to my ego zapuskaem;
					$cObj->$action();
                    //debug($cObj);
					$cObj->getView();
                    
				}else{
					echo "Method <b>$controller::$action</b> ne najden"; 
				}
			}else{
				echo "Controller <b>$controller</b> ne najden"; 
			}
		}else{
			//debug($url);
			http_response_code(404);
			require "../resources/views/errors/404.php";
		}
	}
	/*
	OBRABOTČiki registra kontrollera
	*/
	protected static function upperCamelCase($name) {
		// 1. polyj variant redaktirovanija
		// $name = str_replace("-", " ", $name);
		// $name = ucwords($name);
		// $name = str_replace(" ", "", $name);
		// 2. Vtoroj variant redaktirovanija
		$name = str_replace(" ", "", ucwords(str_replace("-", " ", $name)));
		return $name;
	}
	protected static function lowerCamelCase($name) {
		return lcfirst(self::upperCamelCase($name));
	}
	protected static function removeQueryString($url) {
		if($url) {
			$exp = explode("?", $url);
			$url = strtolower($exp[0]);
			$url = trim(urldecode($url), "\t\n\r\0\x0B/");

			// if(false === strpos($params[0], '=')){
			//return rtim($params[0], '/');
			// }else{
			// debug($params);
			//	return '1';
			//}
			
		}
		
		//debug($url);
		return $url;
	}
}
?>