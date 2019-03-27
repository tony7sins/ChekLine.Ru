<?php
namespace resources\vendor\core;

/**
* ob'javljaem prostranstvo imjon
*
* @author - webForMySelf / t7s update
* @final
*/
final class Router {

	/**
	* tablica maršrutov
	*
	* zapolnjaem maršruty v massiv
	* v vide controller => view => alias
	* @var array $routes значение
	*/
	protected static $routes = [];
	/**
	* tablica maršrut!
	*
	* @var array $route - maršrut ([controller, action, params])
	*/
	protected static $route = [];
	/**
	* vmesto sozdanija __constructora!
	*
	* @param string $regexp - Reguljarnoe vyarażenie!
	* @param array $routes - maršrut ([cintroller, action, params])
	*/
	public static function start($url, $routes=[])
	{
		foreach($routes as $regexp => $array)
		{
		  self::add($regexp, $array);
		}
		self::dispatch($url);
	}
	/**
	* zapolnjaet tablicu maršrutov po ključu RegExp
	* @param string $regexp
	* @param array $route
	*/
	private static function add($regexp, $route = []) {

		self::$routes[$regexp] = $route;

	}
	/**
		* vizov "method" getView() v Controller-e po stroke URL
		*
		* sozdajot od'jekt Controller-a po stroke URL
		* potom vizivaet "method" iz self::route
		* @param string $url - eto vhodjaščij URL
		* @return boolean
	**/
	private static function dispatch($url) {

		$url = self::removeQueryString($url);
		//var_dump($url);
		if(self::matchRoute($url)) {
			// sozdaem "string" kotorij prosto podključim v kode
			$controller = "app\Http\Controllers\\" . self::$route['controller'] . "Controller";
			if(class_exists($controller)) {
				// sozdajom "Controller" dannogo class-a
				$cObj = new $controller(self::$route);
				$action = self::lowerCamelCase(self::$route['action']) . "Action";
				if(method_exists($cObj, $action)) {
					// Esli takoj "method" suščestvuet, to my ego zapuskaem;
					$cObj->$action();
					$cObj->getView(); //vsegda vključaet vid?
				} else {
					echo "Method <b>$controller::$action</b> ne najden";
				}
			} else {
				echo "Controller <b>$controller</b> ne najden";
			}
		} else {
			//debug($url);
			http_response_code(404);
			require "../resources/views/errors/404.php";
		}
	}
	/**
	* vozvraščaet tablicu maršrutov
	* @return array
	*/
	public static function getRoutes() {

		return self::$routes;

	}
	/**
		* vozvraščaet tekuščij maršrut
		* v formate:
		* ([cintroller, action, params])
		* @return array
	*/
	public static function getRoute() {

		return self::$route;

	}
	/**
	* iščet URL v tablice maršrutov
	* @param string $url - eto vhodjaščij URL
	*
	* @return boolean
	*/
	private static function matchRoute($url) {
		foreach(self::$routes as $pattern => $route) {
			/* Ищет в заданном тексте subject  (vroroj argument) совпадения с шаблоном pattern (pervyj argument). В случае, если указан дополнительный параметр matches, он будет заполнен результатами поиска. Элемент $matches[0] будет содержать часть строки, соответствующую вхождению всего шаблона, $matches[1] - часть строки, соответствующую первой подмаске и так далее.  */
			if(preg_match("#$pattern#i", $url, $matches))
			{
				foreach($matches as $key => $value)
				{
					if(is_string($key))
					{
						$route[$key] = $value;
					}
				}
				if(!isset($route['action']))
				{
					$route['action'] = 'index';
				}
				$route['controller'] = self::upperCamelCase($route['controller']);
				self::$route = $route;
				return true;
			}
		}
		return false;
	}
	/**
	* Obrabotčik registra Controller-a
	*
	* Privodit pervuju bukvu stroki k verhnemu registru
	* @param string $name
	* @return string
	*/
	protected static function upperCamelCase($name) {
		/**
		* sokraščjonnyj variant zapisi
		*
		* polnyj variant redaktirovanija:
		* $name = str_replace("-", " ", $name);
		* $name = ucwords($name);
		* $name = str_replace(" ", "", $name);
		* @var string $name
		* @return string
		*/
		$name = str_replace(" ", "", ucwords(str_replace("-", " ", $name)));
		return $name;
	}
	/**
	* Obrabotčik registra Controller-a
	*
	* Privodit pervuju bukvu stroki k nižnemu registru
	* @param string $name
	* @return string
	*/
	protected static function lowerCamelCase($name) {
		return lcfirst(self::upperCamelCase($name));
	}
	/**
	* Obrabotčik registra Controller-a
	*
	* udaljaet QueryString iz striki $url
	* privodit k nižnemu registru [0]-oj element
	* udaljaet po privilam "\t\n\r\0\x0B/"
	* @param string $url
	* @return string
	*/
	protected static function removeQueryString($url) {
		if($url) {
			$exp = explode("?", $url); // vsjo čto posle "?"
			$url = urldecode($url);
			$url = strtolower($exp[0]);
			$url = trim($url, "\t\n\r\0\x0B/");
		}
		return $url;
	}
}
?>
