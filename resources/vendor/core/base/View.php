<?php

namespace resources\vendor\core\base;

class View {

	public $route = []; // tekuščij maršrut b parametry (controller, action, params) - @var, array
	public $view; // tekuščij vid - @var, string
	public $layout; // // tekuščij šablon - @var, array

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
		//var_dump($this->view); // i zdes' naoplneno
		//debug($this->view);
	}

	public function render($vars) {
        //debug($vars);
        if(is_array($vars)) {
			extract($vars);
		} // izvlekaet elementy iz massiva VARS
		$file_view = VIEW . "/{$this->route['controller']}/{$this->view}.php";
        //debug($this->view);
		ob_start(); // vrključaem buferezaciju;
		if(is_file($file_view)){
            require $file_view;        
		}else{
			echo "<br>Ne najden vid <b>{$file_view}</b><br/>";
		}
		$content = ob_get_clean();
		if(false !== $this->layout) {
            //echo $this->layout;
			$file_layout = VIEW . "/layouts/{$this->layout}.php";
			if(is_file($file_layout)) {
				require $file_layout;
			}else{
				echo "<br>Ne najden šablon <b>{$file_layout}</b><br/>";
			}
		}
	}
}
	
?>