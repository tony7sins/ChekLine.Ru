<?php 

namespace resources\vendor\core\base;

abstract class Controller {

	public $route = []; // tekuščij maršrut v parametry (controller, action, params) - @var, array
	public $view; // tekuščij vid - @var, string
	public $layout; // tekuščij šablon - @var, array
	public $vars = []; // peredača polzovatel'skih dannyh i drugie peremennye - @var, array

	public function __construct($route) {
		$this->route = $route; // http://catlaw/posts/test 
		//debug($route);
        $this->view = $route['action'];
        
        //include  VIEW . "/{$route['controller']}/{$this->view}.php";
	}
	public function getView() {
		$vObj = new View($this->route, $this->layout, $this->view);
		$vObj->render($this->vars);
	}

	public function set($vars) {
		$this->vars = $vars;
        //echo $vars;
	}

}

?>