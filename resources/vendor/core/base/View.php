<?php

namespace resources\vendor\core\base;

class View {

	public $route = []; // tekuščij maršrut b parametry (controller, action, params) - @var, array
	/**
* tekuščij vid
* @var string
*/
	public $view;
	/**
	* tekuščij šablon
	* @var array
	*/
	public $layout; // tekuščij

	public function __construct($route, $layout, $view = '') {
		//var_dump($layout); // zdes' pusto
		//var_dump($view); // i zdes' pusto
		$this->route = $route;
		if($layout === false) {
			$this->layout = false;
		}else{
			$this->layout = $layout ?: LAYOUT;
		}
		$this->view = $view;
		//var_dump($this->layout); // a zdes' napolneno
		//var_dump($this->view); // i zdes' napolneno
	}
/**
* Poisk v papke resources/views/
*
* @param array $vars
*/
	public function render($vars) {
    if(is_array($vars)) {
			/**
			* Sodajom peremennye $this->route, $this->layout, $this->view
			*/
			extract($vars);
		} // izvlekaet elementy iz massiva VARS
		$file_view = VIEW . "/{$this->route['controller']}/{$this->view}.php";
		ob_start(); // vrključaem buferezaciju
		if(is_file($file_view)) {
			require $file_view;
		} else {
			echo "<br>Ne najden vid <b>{$file_view}</b><br/>";
		}
		// !!!!!! superVAŽNAJA Peremennaja CONTENT!!!!!!!! //
		$content = ob_get_clean();
		if(false !== $this->layout) {
			$file_layout = VIEW . "/layouts/{$this->layout}.php";
			if(is_file($file_layout)) {
				require $file_layout;
			} else {
				echo "<br>Ne najden šablon <b>{$file_layout}</b><br/>";
			}
		}
	}
}

?>
